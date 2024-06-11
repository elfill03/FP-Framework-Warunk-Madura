@extends('admin.layout.default')

@section('title')
    Data Barang Masuk | Warunk Madura
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
        <h6 class="mb-0 text-uppercase">Data Barang Masuk</h6>
        <a href="{{ route('barang.create') }}" class="btn btn-primary ms-auto">Tambah Barang</a>
    </div>
    <hr/>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Tanggal</th>
                            <th>Nama Barang</th>
                            <th>Jumlah Barang</th>
                            <th>Harga Barang</th>
                            <th>Penambah Barang</th>
                            <th>Satuan Barang</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($barangs as $barang)
                        <tr>
                            <td>{{ $barang->tanggal }}</td>
                            <td>{{ $barang->nama_barang }}</td>
                            <td>{{ $barang->jumlah_barang }}</td>
                            <td>Rp. {{ number_format($barang->harga_barang, 0, ',', '.') }}</td>
                            <td>{{ $barang->user->nama }}</td>
                            <td>{{ $barang->satuan->kode_satuan }}</td>
                            <td>
                                {{-- <a class="btn btn-primary"><i class="bx bx-show text-white"></i></a> --}}
                                <a href="{{ route('barang.edit', $barang->id) }}" class="btn btn-warning"><i class="bx bx-edit text-white"></i></a>
                                <form action="{{ route('barang.destroy', $barang->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?')">
                                        <i class="bx bx-trash text-white"></i>
                                    </button>
                                </form>
                            </td>
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
