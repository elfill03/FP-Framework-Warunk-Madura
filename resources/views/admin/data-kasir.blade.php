@extends('admin.layout.default')

@section('title')
    Data Kasir | Warunk Madura
@endsection

@push('css')
    <link href="{{ asset('plugins/datatable/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" />
@endpush

@section('content')
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Informasi Data Kasir</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Data Kasir</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->
        <div class="d-flex">
            <h6 class="mb-0 text-uppercase">Data Kasir Toko</h6>
            <a href="{{ route('kasirController.create') }}" class="btn btn-primary ms-auto">Tambah Kasir</a>
        </div>
        <hr />
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="kasirTable" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>No.</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Tanggal Lahir</th>
                                <th>Jenis Kelamin</th>
                                <th>Alamat</th>
                                <th>No. Telp</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    @endsection

    @push('script')
        <script>
            $(document).ready(function() {
                console.log('Document ready');

                $("#kasirTable").DataTable({
                    serverSide: true,
                    processing: true,
                    ajax: "{{ route('dataKasir.getKasir') }}",
                    columns: [{
                            data: "id",
                            name: "id",
                            visible: false
                        },
                        {
                            data: "DT_RowIndex",
                            name: "DT_RowIndex",
                            orderable: false,
                            searchable: false
                        },
                        {
                            data: "nama",
                            name: "nama"
                        },
                        {
                            data: "email",
                            name: "email"
                        },
                        {
                            data: "tanggal_lahir",
                            name: "tanggal_lahir"
                        },
                        {
                            data: "jenis_kelamin",
                            name: "jenis_kelamin"
                        },
                        {
                            data: "alamat",
                            name: "alamat"
                        },
                        {
                            data: "no_telp",
                            name: "no_telp"
                        },
                        {
                            data: "actions",
                            name: "actions",
                            orderable: false,
                            searchable: false
                        }
                    ],
                    order: [
                        [0, "desc"]
                    ],
                    lengthMenu: [
                        [10, 25, 50, 100, -1],
                        [10, 25, 50, 100, "All"],
                    ],
                });
            });
        </script>
        <script src="{{ asset('plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('plugins/datatable/js/dataTables.bootstrap5.min.js') }}"></script>
        <script>
            $(document).ready(function() {
                $('#adminTable').DataTable();
            });
        </script>
        <script>
            $(document).ready(function() {
                var table = $('#example2').DataTable({
                    lengthChange: false,
                    buttons: ['copy', 'excel', 'pdf', 'print']
                });

                table.buttons().container()
                    .appendTo('#example2_wrapper .col-md-6:eq(0)');
            });
        </script>
    @endpush
