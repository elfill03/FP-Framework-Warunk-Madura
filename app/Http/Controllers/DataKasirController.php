<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class DataKasirController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        confirmDelete();
        return view("admin.data-kasir");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.add-kasir');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
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
        // create Userx
        $user = new User();
        $user->nama = $request->input('nama');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->tanggal_Lahir = $request->input('tanggal_Lahir');
        $user->jenis_kelamin = $request->input('jenis_kelamin');
        $user->alamat = $request->input('alamat');
        $user->no_telp = $request->input('no_telp');
        $user->role = "kasir";

        if ($request->hasFile('foto_profile')) {
            $imageName = time() . '.' . $request->foto_profile->extension();
            $request->foto_profile->storeAs('profile_images', $imageName, 'public');
            $user->foto_profile = $imageName;
        } else {
            $user->foto_profile = null; // Atau sesuaikan dengan nilai default yang diizinkan
        }
        $user->save();
        return redirect()->route('kasirController.index');
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
        $user = User::findOrFail($id);
        return view('admin.edit-kasir', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
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
        $user->alamat = $request->input('alamat');
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

        return redirect()->route('kasirController.index')->with('success', 'Data Admin updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::find($id);
        // Periksa apakah user ada sebelum mencoba menghapus
        if (!$user) {
            return redirect()->route('kasirController.index')->with('error', 'User not found.');
        }
        // Hapus file yang terkait jika ada
        if ($user->encrypted_filename) {
            $deletionpath = 'public/files/' . $user->encrypted_filename;
            Storage::delete($deletionpath);
        }
        // Hapus user dari database
        $user->delete();
        Alert::success('Deleted Successfully', 'Employee Data Deleted Successfully.');
        return redirect()->route('kasirController.index');
        // return redirect()->route('adminController.index')->with('success', 'User deleted successfully.');
    }
    public function getKasir(Request $request)
    {
        if ($request->ajax()) {
            $data = User::where('role', 'kasir')->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('actions', function ($row) {
                    return view("admin.layout.actions", ['id' => $row->id, 'name' => $row->nama])->render();
                })
                ->rawColumns(['actions'])
                ->make(true);
        }

    }
}
