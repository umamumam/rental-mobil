@extends('layouts1.app')

@section('contents')
<br>
<h1 align="center">Data Pengguna Aplikasi</h1>
<br>
	<div class="d-flex justify-content-end mb-3"><a href="{{ route('penggunas.create') }}" class="btn btn-info">Tambah Pengguna</a></div>
	
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
	<div class="table-responsive" style="overflow-x: auto;">
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>id</th>
				<th>Nama</th>
				<th>Email</th>
				<th>Alamat</th>
				<th>Telepon</th>
				<th>Nomor SIM</th>
				<th>Jenis Pengguna</th>

				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($penggunas as $pengguna)

				<tr>
					<td>{{ $pengguna->id }}</td>
					<td>{{ $pengguna->nama }}</td>
					<td>{{ $pengguna->email }}</td>
					<td>{{ $pengguna->alamat }}</td>
					<td>{{ $pengguna->telepon }}</td>
					<td>{{ $pengguna->nomor_sim }}</td>
					<td>{{ $pengguna->jenis_pengguna }}</td>

					<td>
						<div class="d-flex gap-2">
                            <a href="{{ route('penggunas.show', [$pengguna->id]) }}" class="btn btn-info">Show</a>
                            <a href="{{ route('penggunas.edit', [$pengguna->id]) }}" class="btn btn-primary">Edit</a>
                            {!! Form::open(['method' => 'DELETE','route' => ['penggunas.destroy', $pengguna->id]]) !!}
                                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                        </div>
					</td>
				</tr>

			@endforeach
		</tbody>
	</table>
	</div>

@endsection