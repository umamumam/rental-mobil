@extends('layouts1.app')

@section('contents')
<br>
<h1 align="center">Input Data Pengembalian Mobil</h1>
<br>
	@if($errors->any())
		<div class="alert alert-danger">
			@foreach ($errors->all() as $error)
				{{ $error }} <br>
			@endforeach
		</div>
	@endif

	{!! Form::open(['route' => 'pengembalians.store']) !!}

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
			{{ Form::label('jam', 'Jam', ['class'=>'form-label']) }}
			{{ Form::time('jam', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('keterangan', 'Keterangan', ['class'=>'form-label']) }}
			{{ Form::select('keterangan', ['' => 'keterangan', 'Tepat Waktu' => 'Tepat Waktu', 'Telat' => 'Telat'], null, ['class' => 'form-select custom-select', 'required']) }}
		</div>


		{{ Form::submit('Create', array('class' => 'btn btn-primary')) }}

	{{ Form::close() }}


<br>
@endsection