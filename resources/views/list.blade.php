@extends('layouts1.app')

@section('contents')
<br>
<h1 align="center">Data Riwayat Peminjaman Mobil</h1>
<br>

<style>
    .table td {
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }
    .table th {
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }
    .not-found {
        display: none;
        text-align: center;
        font-size: 18px;
        color: red;
    }
</style>
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2 mb-3">
            <input type="text" class="form-control" id="searchInput" placeholder="Silahkan Masukkan Nama Untuk cek data transaksi anda...">
        </div>
    </div>
</div>
<div class="table-responsive" style="overflow-x: auto; display: none;" id="dataTable">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>id</th>
                <th>nama</th>
                <th>mobil</th>
                <th>plat</th>
                <th>tanggal_mulai</th>
                <th>tanggal_selesai</th>
                <th>waktu</th>
                <th>tarif</th>
                <th>status_mobil</th>
                <th>status_pembayaran</th>
                <th>Pengembalian</th>
            </tr>
        </thead>
        <tbody id="tableBody">
            @foreach($transaksis as $transaksi)
            <tr>
                <td>{{ $transaksi->id }}</td>
                <td>{{ $transaksi->nama }}</td>
                <td>{{ $transaksi->mobil }}</td>
                <td>{{ $transaksi->plat }}</td>
                <td>{{ $transaksi->tanggal_mulai }}</td>
                <td>{{ $transaksi->tanggal_selesai }}</td>
                <td>{{ $transaksi->waktu }}</td>
                <td>{{ $transaksi->tarif }}</td>
                <td>{{ $transaksi->status_mobil }}</td>
                <td>{{ $transaksi->status_pembayaran }}</td>
                <td>
                    <div class="d-flex gap-2">
                    <a href="{{ route('pengembalians.create') }}" class="btn btn-info">Pengembalian</a>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<div class="not-found" id="notFound">Data tidak ditemukan</div>
<br>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        document.getElementById('searchInput').addEventListener('input', function() {
            var searchValue = this.value.toLowerCase();
            var rows = document.querySelectorAll('#tableBody tr');
            var found = false;
            rows.forEach(row => {
                var rowData = row.textContent.toLowerCase();
                if (rowData.includes(searchValue)) {
                    row.style.display = '';
                    found = true;
                } else {
                    row.style.display = 'none';
                }
            });

            var notFoundDiv = document.getElementById('notFound');
            if (!found) {
                notFoundDiv.style.display = 'block';
            } else {
                notFoundDiv.style.display = 'none';
            }
        });

        document.getElementById('searchInput').addEventListener('input', function() {
            if (this.value.trim() !== '') {
                document.getElementById('dataTable').style.display = 'block';
            } else {
                document.getElementById('dataTable').style.display = 'none';
            }
        });
    });
</script>

@endsection
