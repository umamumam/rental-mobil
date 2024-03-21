@extends('layouts1.app')

@section('contents')
<br>
<h1 align="center">Data Riwayat Pengembalian Mobil</h1>
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
        <div class="col-md-6 offset-md-3 mb-3">
            <input type="text" class="form-control" id="searchInput" placeholder="Cari berdasarkan nama...">
        </div>
    </div>
</div>
<div class="table-responsive" style="overflow-x: auto; display: none;">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>id</th>
                <th>nama</th>
                <th>mobil</th>
                <th>plat</th>
                <th>jam</th>
                <th>keterangan</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody id="tableBody">
            @foreach($pengembalians as $pengembalian)
            <tr>
                <td>{{ $pengembalian->id }}</td>
                <td>{{ $pengembalian->nama }}</td>
                <td>{{ $pengembalian->mobil }}</td>
                <td>{{ $pengembalian->plat }}</td>
                <td>{{ $pengembalian->jam }}</td>
                <td>{{ $pengembalian->keterangan }}</td>
                <td>
                    <div class="d-flex gap-2">
                        <a href="{{ route('pengembalians.show', [$pengembalian->id]) }}" class="btn btn-info">Show</a>
                        <a href="{{ route('pengembalians.edit', [$pengembalian->id]) }}" class="btn btn-primary">Edit</a>
                        {!! Form::open(['method' => 'DELETE','route' => ['pengembalians.destroy', $pengembalian->id]]) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
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
            searchTable();
        });

        document.getElementById('searchInput').addEventListener('keypress', function(event) {
            if (event.key === 'Enter') {
                searchTable();
            }
        });

        function searchTable() {
            var searchValue = document.getElementById('searchInput').value.toLowerCase();
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

            var tableDiv = document.querySelector('.table-responsive');
            var notFoundDiv = document.getElementById('notFound');
            if (found) {
                tableDiv.style.display = 'block';
                notFoundDiv.style.display = 'none';
            } else {
                if (searchValue === '') { // Periksa apakah input kosong
                    tableDiv.style.display = 'none';
                    notFoundDiv.style.display = 'none';
                } else {
                    tableDiv.style.display = 'none';
                    notFoundDiv.style.display = 'block';
                }
            }
        }
    });
</script>

@endsection
