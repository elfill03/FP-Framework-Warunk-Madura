<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Employee List</title>
    <style>
        html {
            font-size: 12px;
        }

        .table {
            border-collapse: collapse !important;
            width: 100%;
        }

        .table-bordered th,
        .table-bordered td {
            padding: 0.5rem;
            border: 1px solid black !important;
        }
    </style>
</head>

<body>
    <h1>Laporan Pemasukan</h1>
    <table class="table table-bordered">
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
            @foreach($barangs as $barang)
            <tr>
                <td>{{ $barang->tanggal }}</td>
                <td>{{ $barang->nama_barang }}</td>
                <td>{{ $barang->jumlah_barang }}</td>
                <td>Rp. {{ number_format($barang->harga_barang, 0, ',', '.') }}</td>
                <td>Rp. {{ number_format($barang->harga_barang * $barang->jumlah_barang, 0, ',', '.') }}</td>
            </tr>
              @endforeach

          </tbody>
    </table>
</body>

</html>
