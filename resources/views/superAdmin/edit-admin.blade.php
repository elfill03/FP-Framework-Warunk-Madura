@extends('superAdmin.layout.default')

@section('title')
    Edit Data Admin | Warunk Madura
@endsection

@section('content')
    <div class="page-content">
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Edit Data Admin</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Edit Data Admin</li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <form action="{{ route('adminController.update', ['adminController' => $user->id]) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Admin</label>
                        <input class="form-control @error('nama') is-invalid @enderror" type="text" name="nama"
                            id="nama" value="{{ $user->nama }}" required placeholder="Nama Admin">
                        @error('nama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input class="form-control @error('email') is-invalid @enderror" type="email" name="email"
                            id="email" value="{{ $user->email }}" required placeholder="Email Admin">
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                        <input class="form-control @error('tanggal_lahir') is-invalid @enderror" type="date"
                            name="tanggal_lahir" id="tanggal_lahir" value="{{ $user->tanggal_lahir }}" required
                            placeholder="Tanggal Lahir">
                        @error('tanggal_lahir')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                        <select class="form-control @error('jenis_kelamin') is-invalid @enderror" name="jenis_kelamin"
                            id="jenis_kelamin" required>
                            <option value="L" {{ $user->jenis_kelamin == 'L' ? 'selected' : '' }}>Laki-laki
                            </option>
                            <option value="P" {{ $user->jenis_kelamin == 'P' ? 'selected' : '' }}>Perempuan
                            </option>
                        </select>
                        @error('jenis_kelamin')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="no_telp" class="form-label">No. Telp</label>
                        <input class="form-control @error('no_telp') is-invalid @enderror" type="text" name="no_telp"
                            id="no_telp" value="{{ $user->no_telp }}" required placeholder="No. Telp">
                        @error('no_telp')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection
