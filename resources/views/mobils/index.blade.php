@extends('layouts1.app')

@section('contents')
<br>
<h1 align="center">Data Mobil</h1>
<br>
<div class="d-flex justify-content-between align-items-center mb-3">
    <form action="{{ route('mobils.index') }}" method="GET" class="form-inline">
        <input type="text" name="search" class="form-control mr-2" placeholder="Search">
        <button type="submit" class="btn btn-primary">Search</button>
    </form>
    <a href="{{ route('mobils.create') }}" class="btn btn-info">Tambah Mobil</a>
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
	@if ($mobils->isEmpty())
	<div class="alert alert-warning" role="alert">
		Data Tidak Ditemukan.
	</div>
	@else
	<div class="table-responsive" style="overflow-x: auto;">
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>id</th>
				<th>foto</th>
				<th>merek</th>
				<th>model</th>
				<th>no_plat</th>
				<th>tarif</th>
				<th>kapasitas</th>
				<th>status</th>
				<th>Keterangan</th>

				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($mobils as $mobil)

				<tr>
					<td>{{ $mobil->id }}</td>
					<td><img src="{{ asset('storage/photos/' . $mobil->foto) }}" alt="Foto Mobil" style="max-width: 100px;"></td>
					<td>{{ $mobil->merek }}</td>
					<td>{{ $mobil->model }}</td>
					<td>{{ $mobil->no_plat }}</td>
					<td>{{ $mobil->tarif }}</td>
					<td>{{ $mobil->kapasitas }}</td>
					<td>{{ $mobil->status }}</td>
					<td>{{ $mobil->keterangan }}</td>

					<td>
						<div class="d-flex gap-2">
                            <a href="{{ route('mobils.show', [$mobil->id]) }}" class="btn btn-info">Show</a>
                            <a href="{{ route('mobils.edit', [$mobil->id]) }}" class="btn btn-primary">Edit</a>
                            {!! Form::open(['method' => 'DELETE','route' => ['mobils.destroy', $mobil->id]]) !!}
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
	@endif
	@endsection