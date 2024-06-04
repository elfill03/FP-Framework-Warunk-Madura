@extends('kasir.layout.default')

@section('title')
    Data Barang Keluar | Warunk Madura
@endsection

@push('css')
    <link href="{{ asset('plugins/datatable/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" />
@endpush

@section('content')
<div class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Logistik</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Data Barang</li>
                </ol>
            </nav>
        </div>
    </div>
    <!--end breadcrumb-->
    <h6 class="mb-0 text-uppercase">Data Barang Keluar</h6>
    <hr/>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Tanggal</th>
                            <th>Nama Barang</th>
                            <th>Jenis Barang</th>
                            <th>Jumlah Barang</th>
                            <th>Harga Barang</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>27-05-2024</td>
                            <td>Teh Pucuk</td>
                            <td>Minuman</td>
                            <td>24</td>
                            <td>Rp. 3.000</td>
                            <td>
                                <button class="btn btn-primary"><i class="bx bx-show text-white"></i></button>
                                <button class="btn btn-warning"><i class="bx bx-edit text-white"></i></button>
                                <button class="btn btn-danger"><i class="bx bx-trash text-white"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>27-05-2024</td>
                            <td>Le Minerale</td>
                            <td>Minuman</td>
                            <td>24</td>
                            <td>Rp. 3.000</td>
                            <td>
                                <button class="btn btn-primary"><i class="bx bx-show text-white"></i></button>
                                <button class="btn btn-warning"><i class="bx bx-edit text-white"></i></button>
                                <button class="btn btn-danger"><i class="bx bx-trash text-white"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>27-05-2024</td>
                            <td>Minyal Bimoli</td>
                            <td>Bahan Masak</td>
                            <td>20</td>
                            <td>Rp. 15.000</td>
                            <td>
                                <button class="btn btn-primary"><i class="bx bx-show text-white"></i></button>
                                <button class="btn btn-warning"><i class="bx bx-edit text-white"></i></button>
                                <button class="btn btn-danger"><i class="bx bx-trash text-white"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>27-05-2024</td>
                            <td>Pepsodent</td>
                            <td>Alat Mandi</td>
                            <td>10</td>
                            <td>Rp. 10.000</td>
                            <td>
                                <button class="btn btn-primary"><i class="bx bx-show text-white"></i></button>
                                <button class="btn btn-warning"><i class="bx bx-edit text-white"></i></button>
                                <button class="btn btn-danger"><i class="bx bx-trash text-white"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>27-05-2024</td>
                            <td>Beras</td>
                            <td>Sembako</td>
                            <td>30</td>
                            <td>Rp. 12.000</td>
                            <td>
                                <button class="btn btn-primary"><i class="bx bx-show text-white"></i></button>
                                <button class="btn btn-warning"><i class="bx bx-edit text-white"></i></button>
                                <button class="btn btn-danger"><i class="bx bx-trash text-white"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>27-05-2024</td>
                            <td>Teh Pucuk</td>
                            <td>Minuman</td>
                            <td>24</td>
                            <td>Rp. 3.000</td>
                            <td>
                                <button class="btn btn-primary"><i class="bx bx-show text-white"></i></button>
                                <button class="btn btn-warning"><i class="bx bx-edit text-white"></i></button>
                                <button class="btn btn-danger"><i class="bx bx-trash text-white"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>27-05-2024</td>
                            <td>Le Minerale</td>
                            <td>Minuman</td>
                            <td>24</td>
                            <td>Rp. 3.000</td>
                            <td>
                                <button class="btn btn-primary"><i class="bx bx-show text-white"></i></button>
                                <button class="btn btn-warning"><i class="bx bx-edit text-white"></i></button>
                                <button class="btn btn-danger"><i class="bx bx-trash text-white"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>27-05-2024</td>
                            <td>Minyal Bimoli</td>
                            <td>Bahan Masak</td>
                            <td>20</td>
                            <td>Rp. 15.000</td>
                            <td>
                                <button class="btn btn-primary"><i class="bx bx-show text-white"></i></button>
                                <button class="btn btn-warning"><i class="bx bx-edit text-white"></i></button>
                                <button class="btn btn-danger"><i class="bx bx-trash text-white"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>27-05-2024</td>
                            <td>Pepsodent</td>
                            <td>Alat Mandi</td>
                            <td>10</td>
                            <td>Rp. 10.000</td>
                            <td>
                                <button class="btn btn-primary"><i class="bx bx-show text-white"></i></button>
                                <button class="btn btn-warning"><i class="bx bx-edit text-white"></i></button>
                                <button class="btn btn-danger"><i class="bx bx-trash text-white"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>27-05-2024</td>
                            <td>Beras</td>
                            <td>Sembako</td>
                            <td>30</td>
                            <td>Rp. 12.000</td>
                            <td>
                                <button class="btn btn-primary"><i class="bx bx-show text-white"></i></button>
                                <button class="btn btn-warning"><i class="bx bx-edit text-white"></i></button>
                                <button class="btn btn-danger"><i class="bx bx-trash text-white"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>27-05-2024</td>
                            <td>Teh Pucuk</td>
                            <td>Minuman</td>
                            <td>24</td>
                            <td>Rp. 3.000</td>
                            <td>
                                <button class="btn btn-primary"><i class="bx bx-show text-white"></i></button>
                                <button class="btn btn-warning"><i class="bx bx-edit text-white"></i></button>
                                <button class="btn btn-danger"><i class="bx bx-trash text-white"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>27-05-2024</td>
                            <td>Le Minerale</td>
                            <td>Minuman</td>
                            <td>24</td>
                            <td>Rp. 3.000</td>
                            <td>
                                <button class="btn btn-primary"><i class="bx bx-show text-white"></i></button>
                                <button class="btn btn-warning"><i class="bx bx-edit text-white"></i></button>
                                <button class="btn btn-danger"><i class="bx bx-trash text-white"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>27-05-2024</td>
                            <td>Minyal Bimoli</td>
                            <td>Bahan Masak</td>
                            <td>20</td>
                            <td>Rp. 15.000</td>
                            <td>
                                <button class="btn btn-primary"><i class="bx bx-show text-white"></i></button>
                                <button class="btn btn-warning"><i class="bx bx-edit text-white"></i></button>
                                <button class="btn btn-danger"><i class="bx bx-trash text-white"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>27-05-2024</td>
                            <td>Pepsodent</td>
                            <td>Alat Mandi</td>
                            <td>10</td>
                            <td>Rp. 10.000</td>
                            <td>
                                <button class="btn btn-primary"><i class="bx bx-show text-white"></i></button>
                                <button class="btn btn-warning"><i class="bx bx-edit text-white"></i></button>
                                <button class="btn btn-danger"><i class="bx bx-trash text-white"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>27-05-2024</td>
                            <td>Beras</td>
                            <td>Sembako</td>
                            <td>30</td>
                            <td>Rp. 12.000</td>
                            <td>
                                <button class="btn btn-primary"><i class="bx bx-show text-white"></i></button>
                                <button class="btn btn-warning"><i class="bx bx-edit text-white"></i></button>
                                <button class="btn btn-danger"><i class="bx bx-trash text-white"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>27-05-2024</td>
                            <td>Teh Pucuk</td>
                            <td>Minuman</td>
                            <td>24</td>
                            <td>Rp. 3.000</td>
                            <td>
                                <button class="btn btn-primary"><i class="bx bx-show text-white"></i></button>
                                <button class="btn btn-warning"><i class="bx bx-edit text-white"></i></button>
                                <button class="btn btn-danger"><i class="bx bx-trash text-white"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>27-05-2024</td>
                            <td>Le Minerale</td>
                            <td>Minuman</td>
                            <td>24</td>
                            <td>Rp. 3.000</td>
                            <td>
                                <button class="btn btn-primary"><i class="bx bx-show text-white"></i></button>
                                <button class="btn btn-warning"><i class="bx bx-edit text-white"></i></button>
                                <button class="btn btn-danger"><i class="bx bx-trash text-white"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>27-05-2024</td>
                            <td>Minyal Bimoli</td>
                            <td>Bahan Masak</td>
                            <td>20</td>
                            <td>Rp. 15.000</td>
                            <td>
                                <button class="btn btn-primary"><i class="bx bx-show text-white"></i></button>
                                <button class="btn btn-warning"><i class="bx bx-edit text-white"></i></button>
                                <button class="btn btn-danger"><i class="bx bx-trash text-white"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>27-05-2024</td>
                            <td>Pepsodent</td>
                            <td>Alat Mandi</td>
                            <td>10</td>
                            <td>Rp. 10.000</td>
                            <td>
                                <button class="btn btn-primary"><i class="bx bx-show text-white"></i></button>
                                <button class="btn btn-warning"><i class="bx bx-edit text-white"></i></button>
                                <button class="btn btn-danger"><i class="bx bx-trash text-white"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>27-05-2024</td>
                            <td>Beras</td>
                            <td>Sembako</td>
                            <td>30</td>
                            <td>Rp. 12.000</td>
                            <td>
                                <button class="btn btn-primary"><i class="bx bx-show text-white"></i></button>
                                <button class="btn btn-warning"><i class="bx bx-edit text-white"></i></button>
                                <button class="btn btn-danger"><i class="bx bx-trash text-white"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>27-05-2024</td>
                            <td>Teh Pucuk</td>
                            <td>Minuman</td>
                            <td>24</td>
                            <td>Rp. 3.000</td>
                            <td>
                                <button class="btn btn-primary"><i class="bx bx-show text-white"></i></button>
                                <button class="btn btn-warning"><i class="bx bx-edit text-white"></i></button>
                                <button class="btn btn-danger"><i class="bx bx-trash text-white"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>27-05-2024</td>
                            <td>Le Minerale</td>
                            <td>Minuman</td>
                            <td>24</td>
                            <td>Rp. 3.000</td>
                            <td>
                                <button class="btn btn-primary"><i class="bx bx-show text-white"></i></button>
                                <button class="btn btn-warning"><i class="bx bx-edit text-white"></i></button>
                                <button class="btn btn-danger"><i class="bx bx-trash text-white"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>27-05-2024</td>
                            <td>Minyal Bimoli</td>
                            <td>Bahan Masak</td>
                            <td>20</td>
                            <td>Rp. 15.000</td>
                            <td>
                                <button class="btn btn-primary"><i class="bx bx-show text-white"></i></button>
                                <button class="btn btn-warning"><i class="bx bx-edit text-white"></i></button>
                                <button class="btn btn-danger"><i class="bx bx-trash text-white"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>27-05-2024</td>
                            <td>Pepsodent</td>
                            <td>Alat Mandi</td>
                            <td>10</td>
                            <td>Rp. 10.000</td>
                            <td>
                                <button class="btn btn-primary"><i class="bx bx-show text-white"></i></button>
                                <button class="btn btn-warning"><i class="bx bx-edit text-white"></i></button>
                                <button class="btn btn-danger"><i class="bx bx-trash text-white"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>27-05-2024</td>
                            <td>Beras</td>
                            <td>Sembako</td>
                            <td>30</td>
                            <td>Rp. 12.000</td>
                            <td>
                                <button class="btn btn-primary"><i class="bx bx-show text-white"></i></button>
                                <button class="btn btn-warning"><i class="bx bx-edit text-white"></i></button>
                                <button class="btn btn-danger"><i class="bx bx-trash text-white"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>27-05-2024</td>
                            <td>Teh Pucuk</td>
                            <td>Minuman</td>
                            <td>24</td>
                            <td>Rp. 3.000</td>
                            <td>
                                <button class="btn btn-primary"><i class="bx bx-show text-white"></i></button>
                                <button class="btn btn-warning"><i class="bx bx-edit text-white"></i></button>
                                <button class="btn btn-danger"><i class="bx bx-trash text-white"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>27-05-2024</td>
                            <td>Le Minerale</td>
                            <td>Minuman</td>
                            <td>24</td>
                            <td>Rp. 3.000</td>
                            <td>
                                <button class="btn btn-primary"><i class="bx bx-show text-white"></i></button>
                                <button class="btn btn-warning"><i class="bx bx-edit text-white"></i></button>
                                <button class="btn btn-danger"><i class="bx bx-trash text-white"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>27-05-2024</td>
                            <td>Minyal Bimoli</td>
                            <td>Bahan Masak</td>
                            <td>20</td>
                            <td>Rp. 15.000</td>
                            <td>
                                <button class="btn btn-primary"><i class="bx bx-show text-white"></i></button>
                                <button class="btn btn-warning"><i class="bx bx-edit text-white"></i></button>
                                <button class="btn btn-danger"><i class="bx bx-trash text-white"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>27-05-2024</td>
                            <td>Pepsodent</td>
                            <td>Alat Mandi</td>
                            <td>10</td>
                            <td>Rp. 10.000</td>
                            <td>
                                <button class="btn btn-primary"><i class="bx bx-show text-white"></i></button>
                                <button class="btn btn-warning"><i class="bx bx-edit text-white"></i></button>
                                <button class="btn btn-danger"><i class="bx bx-trash text-white"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>27-05-2024</td>
                            <td>Beras</td>
                            <td>Sembako</td>
                            <td>30</td>
                            <td>Rp. 12.000</td>
                            <td>
                                <button class="btn btn-primary"><i class="bx bx-show text-white"></i></button>
                                <button class="btn btn-warning"><i class="bx bx-edit text-white"></i></button>
                                <button class="btn btn-danger"><i class="bx bx-trash text-white"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>27-05-2024</td>
                            <td>Teh Pucuk</td>
                            <td>Minuman</td>
                            <td>24</td>
                            <td>Rp. 3.000</td>
                            <td>
                                <button class="btn btn-primary"><i class="bx bx-show text-white"></i></button>
                                <button class="btn btn-warning"><i class="bx bx-edit text-white"></i></button>
                                <button class="btn btn-danger"><i class="bx bx-trash text-white"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>27-05-2024</td>
                            <td>Le Minerale</td>
                            <td>Minuman</td>
                            <td>24</td>
                            <td>Rp. 3.000</td>
                            <td>
                                <button class="btn btn-primary"><i class="bx bx-show text-white"></i></button>
                                <button class="btn btn-warning"><i class="bx bx-edit text-white"></i></button>
                                <button class="btn btn-danger"><i class="bx bx-trash text-white"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>27-05-2024</td>
                            <td>Minyal Bimoli</td>
                            <td>Bahan Masak</td>
                            <td>20</td>
                            <td>Rp. 15.000</td>
                            <td>
                                <button class="btn btn-primary"><i class="bx bx-show text-white"></i></button>
                                <button class="btn btn-warning"><i class="bx bx-edit text-white"></i></button>
                                <button class="btn btn-danger"><i class="bx bx-trash text-white"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>27-05-2024</td>
                            <td>Pepsodent</td>
                            <td>Alat Mandi</td>
                            <td>10</td>
                            <td>Rp. 10.000</td>
                            <td>
                                <button class="btn btn-primary"><i class="bx bx-show text-white"></i></button>
                                <button class="btn btn-warning"><i class="bx bx-edit text-white"></i></button>
                                <button class="btn btn-danger"><i class="bx bx-trash text-white"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>27-05-2024</td>
                            <td>Beras</td>
                            <td>Sembako</td>
                            <td>30</td>
                            <td>Rp. 12.000</td>
                            <td>
                                <button class="btn btn-primary"><i class="bx bx-show text-white"></i></button>
                                <button class="btn btn-warning"><i class="bx bx-edit text-white"></i></button>
                                <button class="btn btn-danger"><i class="bx bx-trash text-white"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>27-05-2024</td>
                            <td>Teh Pucuk</td>
                            <td>Minuman</td>
                            <td>24</td>
                            <td>Rp. 3.000</td>
                            <td>
                                <button class="btn btn-primary"><i class="bx bx-show text-white"></i></button>
                                <button class="btn btn-warning"><i class="bx bx-edit text-white"></i></button>
                                <button class="btn btn-danger"><i class="bx bx-trash text-white"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>27-05-2024</td>
                            <td>Le Minerale</td>
                            <td>Minuman</td>
                            <td>24</td>
                            <td>Rp. 3.000</td>
                            <td>
                                <button class="btn btn-primary"><i class="bx bx-show text-white"></i></button>
                                <button class="btn btn-warning"><i class="bx bx-edit text-white"></i></button>
                                <button class="btn btn-danger"><i class="bx bx-trash text-white"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>27-05-2024</td>
                            <td>Minyal Bimoli</td>
                            <td>Bahan Masak</td>
                            <td>20</td>
                            <td>Rp. 15.000</td>
                            <td>
                                <button class="btn btn-primary"><i class="bx bx-show text-white"></i></button>
                                <button class="btn btn-warning"><i class="bx bx-edit text-white"></i></button>
                                <button class="btn btn-danger"><i class="bx bx-trash text-white"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>27-05-2024</td>
                            <td>Pepsodent</td>
                            <td>Alat Mandi</td>
                            <td>10</td>
                            <td>Rp. 10.000</td>
                            <td>
                                <button class="btn btn-primary"><i class="bx bx-show text-white"></i></button>
                                <button class="btn btn-warning"><i class="bx bx-edit text-white"></i></button>
                                <button class="btn btn-danger"><i class="bx bx-trash text-white"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>27-05-2024</td>
                            <td>Beras</td>
                            <td>Sembako</td>
                            <td>30</td>
                            <td>Rp. 12.000</td>
                            <td>
                                <button class="btn btn-primary"><i class="bx bx-show text-white"></i></button>
                                <button class="btn btn-warning"><i class="bx bx-edit text-white"></i></button>
                                <button class="btn btn-danger"><i class="bx bx-trash text-white"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>27-05-2024</td>
                            <td>Teh Pucuk</td>
                            <td>Minuman</td>
                            <td>24</td>
                            <td>Rp. 3.000</td>
                            <td>
                                <button class="btn btn-primary"><i class="bx bx-show text-white"></i></button>
                                <button class="btn btn-warning"><i class="bx bx-edit text-white"></i></button>
                                <button class="btn btn-danger"><i class="bx bx-trash text-white"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>27-05-2024</td>
                            <td>Le Minerale</td>
                            <td>Minuman</td>
                            <td>24</td>
                            <td>Rp. 3.000</td>
                            <td>
                                <button class="btn btn-primary"><i class="bx bx-show text-white"></i></button>
                                <button class="btn btn-warning"><i class="bx bx-edit text-white"></i></button>
                                <button class="btn btn-danger"><i class="bx bx-trash text-white"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>27-05-2024</td>
                            <td>Minyal Bimoli</td>
                            <td>Bahan Masak</td>
                            <td>20</td>
                            <td>Rp. 15.000</td>
                            <td>
                                <button class="btn btn-primary"><i class="bx bx-show text-white"></i></button>
                                <button class="btn btn-warning"><i class="bx bx-edit text-white"></i></button>
                                <button class="btn btn-danger"><i class="bx bx-trash text-white"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>27-05-2024</td>
                            <td>Pepsodent</td>
                            <td>Alat Mandi</td>
                            <td>10</td>
                            <td>Rp. 10.000</td>
                            <td>
                                <button class="btn btn-primary"><i class="bx bx-show text-white"></i></button>
                                <button class="btn btn-warning"><i class="bx bx-edit text-white"></i></button>
                                <button class="btn btn-danger"><i class="bx bx-trash text-white"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>27-05-2024</td>
                            <td>Beras</td>
                            <td>Sembako</td>
                            <td>30</td>
                            <td>Rp. 12.000</td>
                            <td>
                                <button class="btn btn-primary"><i class="bx bx-show text-white"></i></button>
                                <button class="btn btn-warning"><i class="bx bx-edit text-white"></i></button>
                                <button class="btn btn-danger"><i class="bx bx-trash text-white"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@push('script')
	<script src="{{ asset('plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
	<script src="{{ asset('plugins/datatable/js/dataTables.bootstrap5.min.js') }}"></script>
	<script>
		$(document).ready(function() {
			$('#example').DataTable();
		  } );
	</script>
	<script>
		$(document).ready(function() {
			var table = $('#example2').DataTable( {
				lengthChange: false,
				buttons: [ 'copy', 'excel', 'pdf', 'print']
			} );

			table.buttons().container()
				.appendTo( '#example2_wrapper .col-md-6:eq(0)' );
		} );
	</script>
@endpush
