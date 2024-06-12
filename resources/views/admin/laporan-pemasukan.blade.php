@extends('admin.layout.default')

@section('title')
    Laporan Pemasukan | Warunk Madura
@endsection

@push('css')
    <link href="{{ asset('plugins/datatable/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" />
@endpush


@section('content')
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Laporan</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item">
                            <a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Laporan Pemasukan
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->
        <h6 class="mb-0 text-uppercase">Laporan Pemasukan</h6>
        <hr />
        <div class="card">
            <div class="card-body">
                <div class="col-lg-3 col-xl-6 d-flex mt-auto">
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <a href="{{ route('barang.exportExcel') }}" class="btn btn-outline-success btn-sm"> <i
                                    class="bi bi-download me-1"></i> to Excel
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="{{ route('barang.exportPdfMasuk') }}" class="btn btn-outline-danger btn-sm">
                                <i class="bi bi-download me-1"></i> to PDF
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="table-responsive">
                    <table id="example2" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Tanggal</th>
                                <th>Nama Barang</th>
                                <th>Jumlah Barang</th>
                                <th>Harga Barang</th>
                                <th>Total Harga</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($barangs as $barang)
                                <tr>
                                    <td>{{ $barang->tanggal }}</td>
                                    <td>{{ $barang->nama_barang }}</td>
                                    <td>{{ $barang->jumlah_barang }}</td>
                                    <td>Rp. {{ number_format($barang->harga_barang / $barang->jumlah_barang, 0, ',', '.') }}
                                    </td>
                                    <td>Rp. {{ number_format($barang->harga_barang, 0, ',', '.') }}</td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('plugins/datatable/js/dataTables.bootstrap5.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $("#example").DataTable();
        });
    </script>
    <script>
        $(document).ready(function() {
            var table = $("#example2").DataTable({
                lengthChange: false,
                //   buttons: ["copy", "excel", "pdf", "print"],
            });

            table
                .buttons()
                .container()
                .appendTo("#example2_wrapper .col-md-6:eq(0)");
        });
    </script>
@endpush
