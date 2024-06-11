@extends('admin.layout.default')

@section('title')
    Edit Barang Masuk | Warunk Madura
@endsection

@section('content')
<div class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Update Data Barang</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Barang Masuk</li>
                </ol>
            </nav>
        </div>
    </div>
    <!--end breadcrumb-->
    <div class="row">
        <div class="col-xl-9 mx-auto">
            <h6 class="mb-0 text-uppercase">Edit Barang Masuk</h6>
            <hr/>
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('barang.update', $barang->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <label for="tanggal" class="form-label">Tanggal</label>
                        <div class="input-group mb-3">
                            <input type="date" name="tanggal" class="form-control" id="tanggal" value="{{ $barang->tanggal }}" aria-describedby="basic-addon3">
                        </div>
                        <label for="nama_barang" class="form-label">Nama Barang</label>
                        <div class="input-group mb-3">
                            <input type="text" name="nama_barang" class="form-control" id="nama_barang" value="{{ $barang->nama_barang }}" aria-describedby="basic-addon3">
                        </div>
                        <label for="jumlah_barang" class="form-label">Jumlah Barang</label>
                        <div class="input-group mb-3">
                            <input type="text" name="jumlah_barang" class="form-control" id="jumlah_barang" value="{{ $barang->jumlah_barang }}" aria-describedby="basic-addon3">
                        </div>
                        <label for="harga_barang" class="form-label">Harga Barang</label>
                        <div class="input-group mb-3">
                            <input type="text" name="harga_barang" class="form-control" id="harga_barang" value="{{ $barang->harga_barang }}" aria-describedby="basic-addon3">
                        </div>
                        <label for="satuan_id" class="form-label">Satuan Barang</label>
                        <div class="input-group mb-3">
                            <select name="satuan_id" id="satuan_id" class="form-control">
                                @foreach($satuanList as $satuan)
                                    <option value="{{ $satuan->id }}" {{ $satuan->id == $barang->satuan_id ? 'selected' : '' }}>{{ $satuan->kode_satuan }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="d-flex justify-content-center mt-4">
                            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--end row-->
</div>
@endsection

