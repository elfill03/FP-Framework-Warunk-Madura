    <table>
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
            @foreach ($keluar as $barang)
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
