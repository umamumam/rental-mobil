@extends('layouts1.app')

@section('contents')
<br>
<h1 align="center">Input Data Pengguna Aplikasi</h1>
<br>
	@if($errors->any())
		<div class="alert alert-danger">
			@foreach ($errors->all() as $error)
				{{ $error }} <br>
			@endforeach
		</div>
	@endif

	{!! Form::open(['route' => 'penggunas.store']) !!}

		<div class="mb-3">
			{{ Form::label('nama', 'Nama', ['class'=>'form-label']) }}
			{{ Form::text('nama', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('email', 'Email', ['class'=>'form-label']) }}
			{{ Form::text('email', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('alamat', 'Alamat', ['class'=>'form-label']) }}
			{{ Form::text('alamat', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('telepon', 'Telepon', ['class'=>'form-label']) }}
			{{ Form::text('telepon', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('nomor_sim', 'Nomor Sim', ['class'=>'form-label']) }}
			{{ Form::text('nomor_sim', null, array('class' => 'form-control', 'placeholder' => 'Jika Sebagai Driver')) }}
		</div>

		<div class="mb-3">
			{{ Form::label('jenis_pengguna', 'Jenis Pengguna', ['class'=>'form-label']) }}
			{{ Form::select('jenis_pengguna', ['' => 'Jenis Pengguna', 'Admin' => 'Admin', 'Driver' => 'Driver', 'Customer' => 'Customer'], null, ['class' => 'form-select custom-select', 'required']) }}
		</div>


		{{ Form::submit('Simpan', array('class' => 'btn btn-primary')) }}
		<a href="{{ url('/split') }}" class="btn btn-success">Sewa Mobil</a>

	{{ Form::close() }}
<br>

@endsection