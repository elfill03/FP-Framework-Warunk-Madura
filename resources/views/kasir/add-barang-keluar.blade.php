@extends('kasir.layout.default')

@section('title')
    Catat Barang Keluar | Warunk Madura
@endsection

@section('content')
<div class="page-content">
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Input Data Barang</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a></li>
                    <li class="breadcrumb-item active" aria-current="page">Barang Keluar</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-9 mx-auto">
            <h6 class="mb-0 text-uppercase">Catat Barang Keluar</h6>
            <hr/>
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('barangKeluar.store') }}" method="POST">
                        @csrf
                        <label for="tanggal" class="form-label">Tanggal</label>
                        <div class="input-group mb-3">
                            <input type="date" class="form-control" id="tanggal" name="tanggal" aria-describedby="basic-addon3">
                        </div>
                        <label for="nama_barang" class="form-label">Nama Barang</label>
                        <div class="input-group mb-3">
                            <select class="form-select" id="nama_barang" name="barang_id" aria-describedby="basic-addon3">
                                <option selected disabled>Pilih Nama Barang</option>
                                @foreach($barangs as $barang)
                                    <option value="{{ $barang->id }}" data-harga="{{ $barang->harga_barang }}" data-satuan="{{ $barang->satuan->nama_satuan }}" data-satuan-id="{{ $barang->satuan->id }}" data-jumlah="{{ $barang->jumlah_barang }}">{{ $barang->nama_barang }}</option>
                                @endforeach
                            </select>
                        </div>
                        <label for="jumlah_barang" class="form-label">Jumlah Barang</label>
                        <div class="input-group mb-3">
                            <input type="number" class="form-control" id="jumlah_barang" name="jumlah_barang" aria-describedby="basic-addon3" min="1">
                        </div>
                        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                        <label for="harga_barang" class="form-label">Harga Barang per Satuan</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" id="harga_barang" name="harga_barang" aria-describedby="basic-addon3" readonly>
                        </div>
                        <label for="total_harga" class="form-label">Total Harga</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" id="total_harga" name="total_harga" aria-describedby="basic-addon3" readonly>
                        </div>
                        <div class="d-flex justify-content-center mt-4">
                            <button class="btn btn-primary">Tambah Catatan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('script')
    <script>
        $(document).ready(function() {
            function updateTotalHarga() {
                var harga = $('#nama_barang').find(':selected').data('harga');
                var jumlah = $('#jumlah_barang').val();
                var total = harga * jumlah;
                $('#total_harga').val(total);
            }

            $('#nama_barang').change(function() {
                var selectedOption = $(this).find(':selected');
                var harga = selectedOption.data('harga');
                var jumlah = selectedOption.data('jumlah');
                $('#harga_barang').val(harga);
                updateTotalHarga();
            });

            $('#jumlah_barang').change(function() {
                var jumlah = $(this).val();
                var stok = $('#nama_barang').find(':selected').data('jumlah');
                if (jumlah > stok) {
                    alert('Jumlah barang melebihi stok yang tersedia.');
                    $(this).val(stok);
                }
                updateTotalHarga();
            });
        });
    </script>
@endpush
