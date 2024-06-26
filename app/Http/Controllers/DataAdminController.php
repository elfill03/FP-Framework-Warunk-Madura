<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class DataAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        confirmDelete();
        return view('superAdmin.data-admin');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('superAdmin.add-admin');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $messages = [
            'required' => ':Attribute harus diisi.',
            'email' => 'Isi :attribute dengan format yang benar',
            'numeric' => 'Isi :attribute dengan angka'
        ];
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
        ], $messages);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        // create User
        $user = new User();
        $user->nama = $request->input('nama');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->tanggal_Lahir = $request->input('tanggal_Lahir');
        $user->jenis_kelamin = $request->input('jenis_kelamin');
        $user->alamat = $request->input('alamat');
        $user->no_telp = $request->input('no_telp');
        $user->role = "admin";

        if ($request->hasFile('foto_profile')) {
            $imageName = time() . '.' . $request->foto_profile->extension();
            $request->foto_profile->storeAs('profile_images', $imageName, 'public');
            $user->foto_profile = $imageName;
        } else {
            $user->foto_profile = null; // Atau sesuaikan dengan nilai default yang diizinkan
        }
        $user->save();
        return redirect()->route('superAdminController.index');
        // return redirect()->route('users.index')->with('success', 'User created successfully.');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        // $user = User::findOrFail($id);
        // return view('superAdmin.edit-admin') . compact("user");
        $user = User::findOrFail($id);
        return view('superAdmin.edit-admin', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $messages = [
            'required' => ':Attribute harus diisi.',
            'email' => 'Isi :attribute dengan format yang benar',
            'numeric' => 'Isi :attribute dengan angka'
        ];

        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'email' => 'required|email',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required',
            'no_telp' => 'required',
        ], $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user = User::find($id);
        if (!$user) {
            return redirect()->back()->with('error', 'User not found');
        }

        $user->nama = $request->input('nama');
        $user->email = $request->input('email');
        $user->tanggal_lahir = $request->input('tanggal_lahir');
        $user->jenis_kelamin = $request->input('jenis_kelamin');
        $user->no_telp = $request->input('no_telp');
        if ($request->hasFile('foto_profile')) {
            // Hapus foto lama jika ada
            if ($user->foto_profile) {
                Storage::disk('public')->delete('profile_images/' . $user->foto_profile);
            }

            // Upload foto profile yang baru
            $imageName = time() . '.' . $request->foto_profile->getClientOriginalExtension();
            $request->foto_profile->storeAs('profile_images', $imageName, 'public');
            $user->foto_profile = $imageName;
        }
        $user->save();

        return redirect()->route('superAdminController.index')->with('success', 'Data Admin updated successfully');
    }

    public function destroy(string $id)
    {
        $user = User::find($id);
        // Periksa apakah user ada sebelum mencoba menghapus
        if (!$user) {
            return redirect()->route('superAdminController.index')->with('error', 'User not found.');
        }
        // Hapus file yang terkait jika ada
        if ($user->encrypted_filename) {
            $deletionpath = 'public/files/' . $user->encrypted_filename;
            Storage::delete($deletionpath);
        }
        // Hapus user dari database
        if ($user->foto_profile) {
            Storage::disk('public')->delete('profile_images/' . $user->foto_profile);
        }
        $user->delete();
        Alert::success('Deleted Successfully', 'Employee Data Deleted Successfully.');
        return redirect()->route('superAdminController.index');
        // return redirect()->route('adminController.index')->with('success', 'User deleted successfully.');
    }

    public function getAdmin(Request $request)
    {
        if ($request->ajax()) {
            $data = User::where('role', 'admin')->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('actions', function ($row) {
                    return view('superAdmin.layout.actions', ['id' => $row->id, 'name' => $row->nama])->render();
                })
                ->rawColumns(['actions'])
                ->make(true);
        }
    }
}
