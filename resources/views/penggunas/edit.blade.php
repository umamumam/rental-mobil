@extends('layouts1.app')

@section('contents')
<br>
<h1 align="center">Edit Data Pengguna Aplikasi</h1>
<br>
	@if($errors->any())
		<div class="alert alert-danger">
			@foreach ($errors->all() as $error)
				{{ $error }} <br>
			@endforeach
		</div>
	@endif

	{{ Form::model($pengguna, array('route' => array('penggunas.update', $pengguna->id), 'method' => 'PUT')) }}

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
			{{ Form::label('nomor_sim', 'Nomor_sim', ['class'=>'form-label']) }}
			{{ Form::text('nomor_sim', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('jenis_pengguna', 'Jenis_pengguna', ['class'=>'form-label']) }}
			<select name="jenis_pengguna" id="jenis_pengguna" class="form-control" required>
                <option value="Admin"{{ $pengguna->jenis_pengguna === 'Admin' ? 'selected' : '' }}>Admin</option>
                <option value="Driver"{{ $pengguna->jenis_pengguna === 'Driver' ? 'selected' : '' }}>Driver</option>
                <option value="Customer"{{ $pengguna->jenis_pengguna === 'Customer' ? 'selected' : '' }}>Customer</option>
            </select>
		</div>

		{{ Form::submit('Simpan', array('class' => 'btn btn-primary')) }}

	{{ Form::close() }}
	<br>
	@endsection