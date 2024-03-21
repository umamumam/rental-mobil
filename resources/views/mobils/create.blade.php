@extends('layouts1.app')

@section('contents')
<br>
<h1 align="center">Tambah Data Mobil</h1>
<br>

@if($errors->any())
<div class="alert alert-danger">
    @foreach ($errors->all() as $error)
    <p>{{ $error }}</p>
    @endforeach
</div>
@endif

{!! Form::open(['route' => 'mobils.store', 'enctype' => 'multipart/form-data']) !!} <!-- Tambahkan enctype untuk mengizinkan unggahan file -->

<div class="mb-3">
    {{ Form::label('foto', 'Foto', ['class'=>'form-label']) }}
    {{ Form::file('foto', ['class' => 'form-control']) }}
</div>
<div class="mb-3">
    {{ Form::label('merek', 'Merek', ['class'=>'form-label']) }}
    {{ Form::text('merek', null, ['class' => 'form-control']) }}
</div>
<div class="mb-3">
    {{ Form::label('model', 'Model', ['class'=>'form-label']) }}
    {{ Form::text('model', null, ['class' => 'form-control']) }}
</div>
<div class="mb-3">
    {{ Form::label('no_plat', 'No_plat', ['class'=>'form-label']) }}
    {{ Form::text('no_plat', null, ['class' => 'form-control']) }}
</div>
<div class="mb-3">
    {{ Form::label('tarif', 'Tarif', ['class'=>'form-label']) }}
    {{ Form::text('tarif', null, ['class' => 'form-control']) }}
</div>
<div class="mb-3">
    {{ Form::label('kapasitas', 'Kapasitas', ['class'=>'form-label']) }}
    {{ Form::select('kapasitas', ['' => 'Pilih Kapasitas', 'Maksimal 5 orang dewasa' => 'Maksimal 5 orang dewasa', 'Maksimal 6 orang dewasa' => 'Maksimal 6 orang dewasa', 
        'Maksimal 8 orang dewasa' => 'Maksimal 8 orang dewasa', 'Maksimal 12 orang dewasa' => 'Maksimal 12 orang dewasa'], null, ['class' => 'form-select custom-select', 'required']) }}
</div>
<div class="mb-3">
    {{ Form::label('status', 'Status', ['class'=>'form-label']) }}
    {{ Form::select('status', ['' => 'Pilih Status', 'Tersedia' => 'Tersedia', 'Sudah Disewa' => 'Sudah Disewa'], null, ['class' => 'form-select custom-select', 'required']) }}
</div>
<div class="mb-3">
    {{ Form::label('keterangan', 'keterangan', ['class'=>'form-label']) }}
    {{ Form::select('keterangan', ['' => 'Pilih keterangan', '12 Jam Lepas Kunci' => '12 Jam Lepas Kunci', '12 Jam + Driver' => '12 Jam + Driver', '24 Jam Lepas Kunci' => '24 Jam Lepas Kunci', '24 Jam + Driver' => '24 Jam + Driver'], null, ['class' => 'form-select custom-select', 'required']) }}
</div>

{{ Form::submit('Create', ['class' => 'btn btn-primary']) }}

{!! Form::close() !!}
<br>
@endsection