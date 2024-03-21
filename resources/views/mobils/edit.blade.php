@extends('layouts1.app')

@section('contents')
<br>
<h1 align="center">Edit Data Mobil</h1>
<br>
	@if($errors->any())
		<div class="alert alert-danger">
			@foreach ($errors->all() as $error)
				{{ $error }} <br>
			@endforeach
		</div>
	@endif

	{{ Form::model($mobil, array('route' => array('mobils.update', $mobil->id), 'method' => 'PUT', 'enctype' => 'multipart/form-data')) }}

		<div class="mb-3">
			{{ Form::label('foto', 'Foto', ['class'=>'form-label']) }}
			{{ Form::file('foto', array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('merek', 'Merek', ['class'=>'form-label']) }}
			{{ Form::text('merek', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('model', 'Model', ['class'=>'form-label']) }}
			{{ Form::text('model', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('no_plat', 'No_plat', ['class'=>'form-label']) }}
			{{ Form::text('no_plat', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('tarif', 'Tarif', ['class'=>'form-label']) }}
			{{ Form::text('tarif', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('kapasitas', 'Kapasitas', ['class'=>'form-label']) }}
			<select name="kapasitas" id="kapasitas" class="form-control" required>
                <option value="Maksimal 5 orang dewasa"{{ $mobil->kapasitas === 'Maksimal 5 orang dewasa' ? 'selected' : '' }}>Maksimal 5 orang dewasa</option>
                <option value="Maksimal 6 orang dewasa"{{ $mobil->kapasitas === 'Maksimal 6 orang dewasa' ? 'selected' : '' }}>Maksimal 6 orang dewasa</option>
                <option value="Maksimal 8 orang dewasa"{{ $mobil->kapasitas === 'Maksimal 8 orang dewasa' ? 'selected' : '' }}>Maksimal 8 orang dewasa</option>
                <option value="Maksimal 12 orang dewasa"{{ $mobil->kapasitas === 'Maksimal 12 orang dewasa' ? 'selected' : '' }}>Maksimal 12 orang dewasa</option>
            </select>
		</div>
		<div class="mb-3">
			{{ Form::label('status', 'Status', ['class'=>'form-label']) }}
			<select name="status" id="status" class="form-control" required>
                <option value="Tersedia"{{ $mobil->status === 'Tersedia' ? 'selected' : '' }}>Tersedia</option>
                <option value="Sudah Disewa"{{ $mobil->status === 'Sudah Disewa' ? 'selected' : '' }}>Sudah Disewa</option>
            </select>
		</div>
		<div class="mb-3">
			{{ Form::label('keterangan', 'keterangan', ['class'=>'form-label']) }}
			<select name="keterangan" id="keterangan" class="form-control" required>
                <option value="12 Jam Lepas Kunci"{{ $mobil->keterangan === '12 Jam Lepas Kunci' ? 'selected' : '' }}>12 Jam Lepas Kunci</option>
                <option value="12 Jam + Driver"{{ $mobil->keterangan === '12 Jam + Driver' ? 'selected' : '' }}>12 Jam + Driver</option>
                <option value="24 Jam Lepas Kunci"{{ $mobil->keterangan === '24 Jam Lepas Kunci' ? 'selected' : '' }}>24 Jam Lepas Kunci</option>
                <option value="24 Jam + Driver"{{ $mobil->keterangan === '24 Jam + Driver' ? 'selected' : '' }}>24 Jam + Driver</option>
            </select>
		</div>

		{{ Form::submit('Edit', array('class' => 'btn btn-primary')) }}

	{{ Form::close() }}
	@endsection
	<br>