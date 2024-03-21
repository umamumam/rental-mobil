@extends('layouts1.app')

@section('contents')
<br>
<h1 align="center">Edit Data Rental Mobil</h1>
<br>
	@if($errors->any())
		<div class="alert alert-danger">
			@foreach ($errors->all() as $error)
				{{ $error }} <br>
			@endforeach
		</div>
	@endif

	{{ Form::model($transaksi, array('route' => array('transaksis.update', $transaksi->id), 'method' => 'PUT')) }}

		<div class="mb-3">
			{{ Form::label('nama', 'Nama', ['class'=>'form-label']) }}
			{{ Form::text('nama', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('mobil', 'Mobil', ['class'=>'form-label']) }}
			{{ Form::text('mobil', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('plat', 'Plat', ['class'=>'form-label']) }}
			{{ Form::text('plat', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('tanggal_mulai', 'Tanggal_mulai', ['class'=>'form-label']) }}
			{{ Form::date('tanggal_mulai', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('tanggal_selesai', 'Tanggal_selesai', ['class'=>'form-label']) }}
			{{ Form::date('tanggal_selesai', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('waktu', 'Waktu', ['class'=>'form-label']) }}
			{{ Form::time('waktu', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('tarif', 'Tarif', ['class'=>'form-label']) }}
			{{ Form::text('tarif', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('status_mobil', 'Status_mobil', ['class'=>'form-label']) }}
			<select name="status_mobil" id="status_mobil" class="form-control" required>
                <option value="Tersedia"{{ $transaksi->status_mobil === 'Tersedia' ? 'selected' : '' }}>Tersedia</option>
                <option value="Sudah Disewa"{{ $transaksi->status_mobil === 'Sudah Disewa' ? 'selected' : '' }}>Sudah Disewa</option>
            </select>
		</div>
		<div class="mb-3">
			{{ Form::label('status_pembayaran', 'Status_pembayaran', ['class'=>'form-label']) }}
			<select name="status_pembayaran" id="status_pembayaran" class="form-control" required>
                <option value="Lunas"{{ $transaksi->status_pembayaran === 'Lunas' ? 'selected' : '' }}>Lunas</option>
                <option value="Belum Terbayar"{{ $transaksi->status_pembayaran === 'Belum Terbayar' ? 'selected' : '' }}>Belum Terbayar</option>
            </select>
		</div>

		{{ Form::submit('Edit', array('class' => 'btn btn-primary')) }}

	{{ Form::close() }}
	<br>
	@endsection
