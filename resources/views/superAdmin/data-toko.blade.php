@extends('superAdmin.layout.default')

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
        <div class="breadcrumb-title pe-3">Cabang Toko</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Data Cabang</li>
                </ol>
            </nav>
        </div>
    </div>
    <!--end breadcrumb-->
    <h6 class="mb-0 text-uppercase">Data Cabang Toko</h6>
    <hr/>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Nama Pemilik</th>
                            <th>Email Pemilik</th>
                            <th>Alamat Toko</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Ahmad</td>
                            <td>ahmad@mail.com</td>
                            <td>Jln. Legenda No 31, Konoha</td>
                            <td>
                                <button class="btn btn-warning"><i class="bx bx-edit text-white"></i></button>
                                <button class="btn btn-danger"><i class="bx bx-trash text-white"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>Rihho</td>
                            <td>ridho@mail.com</td>
                            <td>Jln. Legenda No 31, Konoha</td>
                            <td>
                                <button class="btn btn-warning"><i class="bx bx-edit text-white"></i></button>
                                <button class="btn btn-danger"><i class="bx bx-trash text-white"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>Fahri</td>
                            <td>fahri@mail.com</td>
                            <td>Jln. Legenda No 31, Konoha</td>
                            <td>
                                <button class="btn btn-warning"><i class="bx bx-edit text-white"></i></button>
                                <button class="btn btn-danger"><i class="bx bx-trash text-white"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>Doni</td>
                            <td>doni@mail.com</td>
                            <td>Jln. Legenda No 31, Konoha</td>
                            <td>
                                <button class="btn btn-warning"><i class="bx bx-edit text-white"></i></button>
                                <button class="btn btn-danger"><i class="bx bx-trash text-white"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>Maulana</td>
                            <td>maulana@mail.com</td>
                            <td>Jln. Legenda No 31, Konoha</td>
                            <td>
                                <button class="btn btn-warning"><i class="bx bx-edit text-white"></i></button>
                                <button class="btn btn-danger"><i class="bx bx-trash text-white"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>Akbar</td>
                            <td>Akbar@mail.com</td>
                            <td>Jln. Legenda No 31, Konoha</td>
                            <td>
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
