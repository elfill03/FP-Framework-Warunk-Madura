@extends('superAdmin.layout.default')

@section('title')
    Data Cabang Toko | Warunk Madura
@endsection

@section('content')
<div class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Input Data Cabang</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Cabang Toko</li>
                </ol>
            </nav>
        </div>
    </div>
    <!--end breadcrumb-->
    <div class="row">
        <div class="col-xl-9 mx-auto">
            <h6 class="mb-0 text-uppercase">Tambah Cabang Toko</h6>
            <hr/>
            <div class="card">
                <div class="card-body">
                    <label for="basic-url" class="form-label">Nama Pemilik</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                    </div>
                    <label for="basic-url" class="form-label">Email Pemilik</label>
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                    </div>
                    <label for="basic-url" class="form-label">Alamat Toko</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                    </div>
                    <div class="d-flex justify-content-center mt-4">
                        <button class="btn btn-primary">Tambah Toko</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end row-->
</div>
@endsection
