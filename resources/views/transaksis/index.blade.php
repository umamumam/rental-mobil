@extends('layouts1.app')

@section('contents')
<br>
<h1 align="center">Data Rental Mobil</h1>
<br>
<div class="d-flex justify-content-end mb-3">
    <a href="{{ route('transaksis.create') }}" class="btn btn-info">Create</a>
</div>
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
</style>
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3 mb-3">
            <input type="text" class="form-control" id="searchInput" placeholder="Cari transaksi...">
        </div>
    </div>
</div>
<div class="table-responsive" style="overflow-x: auto;">
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
                <th>Action</th>
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
                        <a href="{{ route('transaksis.show', [$transaksi->id]) }}" class="btn btn-info">Show</a>
                        <a href="{{ route('transaksis.edit', [$transaksi->id]) }}" class="btn btn-primary">Edit</a>
                        {!! Form::open(['method' => 'DELETE','route' => ['transaksis.destroy', $transaksi->id]]) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<br>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        document.getElementById('searchInput').addEventListener('input', function() {
            var searchValue = this.value.toLowerCase();
            var rows = document.querySelectorAll('#tableBody tr');
            rows.forEach(row => {
                var rowData = row.textContent.toLowerCase();
                if (rowData.includes(searchValue)) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        });
    });
</script>

@endsection
