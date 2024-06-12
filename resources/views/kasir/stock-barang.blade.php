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
    <div class="d-flex">
        <h6 class="mb-0 text-uppercase">Stock Barang</h6>
    </div>
    <hr/>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Nama Barang</th>
                            <th>Stok Barang</th>
                            <th>Harga Barang per Satuan</th>
                            <th>Satuan Barang</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($stockbarangs as $stockbarang)
                        <tr>
                            <td>{{ $stockbarang->nama_barang }}</td>
                            <td>{{ $stockbarang->jumlah_barang }}</td>
                            <td>Rp. {{ number_format($stockbarang->harga_barang, 0, ',', '.') }}</td>
                            <td>{{ $stockbarang->satuan->kode_satuan }}</td>
                        </tr>
                    @endforeach

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
        });
    </script>
@endpush
