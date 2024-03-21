@extends('layouts1.app')

@section('contents')
<br>
<h1 align="center">Edit Data Pengembalian Mobil</h1>
<br>	@if($errors->any())
		<div class="alert alert-danger">
			@foreach ($errors->all() as $error)
				{{ $error }} <br>
			@endforeach
		</div>
	@endif

	{{ Form::model($pengembalian, array('route' => array('pengembalians.update', $pengembalian->id), 'method' => 'PUT')) }}

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
			<select name="keterangan" id="keterangan" class="form-control" required>
                <option value="Tepat Waktu"{{ $pengembalian->keterangan === 'Tepat Waktu' ? 'selected' : '' }}>Tepat Waktu</option>
                <option value="Telat"{{ $pengembalian->keterangan === 'Telat' ? 'selected' : '' }}>Telat</option>
            </select>
		</div>

		{{ Form::submit('Edit', array('class' => 'btn btn-primary')) }}

	{{ Form::close() }}
<br>
@endsection
