@extends('superAdmin.layout.default')

@section('title')
    Data Admin | Warunk Madura
@endsection

@section('content')
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Input Data Admin</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Data Admin</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->
        <div class="row">
            <div class="col-xl-9 mx-auto">
                <h6 class="mb-0 text-uppercase">Tambah Data Admin</h6>
                <hr />
                <div class="card">
                    <form action="{{ route('superAdminController.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class=" mb-3">
                                <label for="firstName" class="form-label">Nama Admin</label>
                                <input class="form-control @error('nama') is-invalid @enderror" type="text"
                                    name="nama" id="nama" value="{{ old('nama') }}" placeholder="Nama Admin">
                                @error('nama')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class=" mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input class="form-control @error('email') is-invalid @enderror" type="text"
                                    name="email" id="email" value="{{ old('nama') }}" placeholder="Email Admin">
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">{{ __('Password') }}</label>
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password" required
                                    autocomplete="new-password" name="password" id="password" value="{{ old('password') }}"
                                    placeholder="Password">
                                @error('password')
                                    <span class="invalid-feedback">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="row gy-5">
                                <div class="col-md-6 mb-3">
                                    <label for="alamat" class="form-label">alamat</label>
                                    <input class="form-control @error('alamat') is-invalid @enderror" type="text"
                                        name="alamat" id="alamat" value="{{ old('alamat') }}" placeholder="alamat">
                                    @error('alamat')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="no_telp" class="form-label">no_telp</label>
                                    <input class="form-control @error('no_telp') is-invalid @enderror" type="text"
                                        name="no_telp" id="no_telp" value="{{ old('no_telp') }}" placeholder="no_telp ">
                                    @error('no_telp')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row gy-5">
                                <div class="col-md-6 mb-3">
                                    <label for="no_telp" class="form-label">Tanggal</label>
                                    <input type="date" class="form-control" id="tanggal_Lahir" name="tanggal_Lahir"
                                        value="{{ old('tanggal_Lahir') }}">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin:</label>
                                    <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                                        <option value="L">Laki-laki</option>
                                        <option value="P">Perempuan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="foto_profile">Foto Profile</label>
                                <input type="file" name="foto_profile" class="form-control">
                            </div>
                            <div class="d-flex justify-content-center mt-4">
                                <button type="submit" class="btn btn-primary">Tambah Admin</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!--end row-->
    </div>
@endsection
