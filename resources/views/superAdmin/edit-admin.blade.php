@extends('superAdmin.layout.default')

@section('title')
    Edit Data Admin | Warunk Madura
@endsection

@section('content')
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Update Data Admin</div>
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
                <h6 class="mb-0 text-uppercase">Edit Data Admin</h6>
                <hr />
                <div class="card">
                    <div class="card-body">
                        <label for="basic-url" class="form-label">Nama Admin</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" id="basic-url" value="Ahmad"
                                aria-describedby="basic-addon3">
                        </div>
                        <label for="basic-url" class="form-label">Email Admin</label>
                        <div class="input-group mb-3">
                            <input type="email" class="form-control" id="basic-url" value="ahmad@mail.com"
                                aria-describedby="basic-addon3">
                        </div>
                        <label for="basic-url" class="form-label">Alamat Admin</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" id="basic-url" value="Jln. Legenda No 31, Konoha"
                                aria-describedby="basic-addon3">
                        </div>
                        <div class="d-flex justify-content-center mt-4">
                            <button class="btn btn-primary">Simpan Perubahan</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end row-->
    </div>
@endsection
