@extends('layouts1.app')

@section('contents')
<br>
<h1 align="center">Input Data Rental Mobil</h1>
<br>
@if($errors->any())
    <div class="alert alert-danger">
        @foreach ($errors->all() as $error)
            {{ $error }} <br>
        @endforeach
    </div>
@endif

{!! Form::open(['route' => 'transaksis.store']) !!}

<div class="mb-3">
    {{ Form::label('nama', 'Nama Anda', ['class'=>'form-label']) }}
    {{ Form::text('nama', null, array('class' => 'form-control')) }}
</div>
<div class="mb-3">
    {{ Form::label('mobil', 'Mobil Yang Disewa', ['class'=>'form-label']) }}
    {{ Form::text('mobil', null, array('class' => 'form-control', 'id' => 'mobil')) }} <!-- Tambahkan id untuk input mobil -->
    <div id="mobil-list"></div> <!-- Ini adalah div untuk menampilkan daftar mobil -->
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
    {{ Form::label('waktu', 'Waktu Sewa', ['class'=>'form-label']) }}
    {{ Form::time('waktu', null, array('class' => 'form-control', 'id' => 'waktu')) }}
</div>
<div class="mb-3">
    {{ Form::label('tarif', 'Tarif', ['class'=>'form-label']) }}
	{{ Form::number('tarif', null, array('class' => 'form-control', 'placeholder' => 'Masukkan tarif sesuai harga yang tertera')) }}
</div>
<div class="mb-3">
    {{ Form::label('status_mobil', 'Status_mobil', ['class'=>'form-label']) }}
    {{ Form::select('status_mobil', ['' => 'Pilih status_mobil', 'Tersedia' => 'Tersedia', 'Sudah Disewa' => 'Sudah Disewa'], null, ['class' => 'form-select custom-select', 'required']) }}
</div>
<div class="mb-3">
    {{ Form::label('status_pembayaran', 'Status_pembayaran', ['class'=>'form-label']) }}
    @if(Auth::user()->role == 'penyewa' && $status_pembayaran_belum_terbayar)
        {{ Form::select('status_pembayaran', ['Belum Terbayar' => 'Belum Terbayar'], 'Belum Terbayar', ['class' => 'form-select custom-select', 'required']) }}
    @else
        {{ Form::select('status_pembayaran', ['' => 'Pilih status_pembayaran', 'Lunas' => 'Lunas', 'Belum Terbayar' => 'Belum Terbayar'], null, ['class' => 'form-select custom-select', 'required']) }}
    @endif
</div>

{{ Form::submit('Create', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

<!-- JavaScript untuk mengambil data mobil secara real-time -->
<script>
    $(document).ready(function () {
		$('#mobil').keyup(function () {
    var query = $(this).val();
    if (query != '') {
        $.ajax({
            url: "{{ route('mobil.search') }}",
            method: "GET",
            data: { query: query },
            success: function (data) {
                $('#mobil-list').fadeIn();
                $('#mobil-list').html(data);
            }
        });
    } else {
        $('#mobil-list').fadeOut();
    }
});
        $(document).on('click', 'li', function () {
            $('#mobil').val($(this).text());
            $('#mobil-list').fadeOut();
        });
		
		$('#waktu').change(function() {
            startTimer();
        });
		
		function startTimer() {
            const waktuInput = document.getElementById('waktu').value;
            const [hours, minutes] = waktuInput.split(':');
            const timeInSeconds = (parseInt(hours) * 3600) + (parseInt(minutes) * 60);

            let timerInterval;
            timerInterval = setInterval(() => {
                const hours = Math.floor(timeInSeconds / 3600);
                const minutes = Math.floor((timeInSeconds % 3600) / 60);
                const seconds = timeInSeconds % 60;

                console.log(`${hours.toString().padStart(2, '0')}:${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`);

                if (timeInSeconds <= 0) {
                    clearInterval(timerInterval);
                } else {
                    timeInSeconds--;
                }
            }, 1000);
        }
    });
</script>
<br>
@endsection
