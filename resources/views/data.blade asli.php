@extends('layouts1.app')

@section('contents')
<div class="container">
    <h1 class="text-center mb-4">Data Mobil Tersedia</h1>

    <div class="row row-cols-1 row-cols-md-3">
        @foreach($mobils as $mobil)
        <div class="col mb-4">
            <div class="card shadow-blue"> <!-- Menggunakan kelas 'shadow-blue' -->
                <img src="{{ asset('storage/photos/' . $mobil->foto) }}" class="card-img-top img-fluid" alt="Foto Mobil">
                <hr>
                <div class="card-body">
                    <h5 class="card-title"><b class="text-orange">{{ $mobil->merek }}</b></h5>
                    <p class="card-text">Model:<span class="text-orange">{{ $mobil->model }}</span> </p>
                    <p class="card-text">Plat:{{ $mobil->no_plat }} </p>
                    <p class="card-text">Tarif: <span class="text-orange">{{ $mobil->tarif }}</span></p>
                    <p class="card-text">Kapasitas: {{ $mobil->kapasitas }}</p>
                    <p class="card-text">Status: <span class="@if($mobil->status == 'Tersedia') text-success @elseif($mobil->status == 'Sudah Disewa') text-danger @endif">{{ $mobil->status }}</span></p>
                    <p class="card-text">Keterangan: {{ $mobil->keterangan }}</p>
                    <hr> <!-- Garis pemisah -->
                    <div class="text-center">
                        <a href="#" class="btn btn-primary">Pesan Sekarang</a> <!-- Ganti "#" dengan URL tujuan Anda -->
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<!-- CSS -->
<style>
    .card {
        max-width: 400px;
        margin: auto;
        transition: transform 0.3s; /* Smooth transition */
    }

    .card:hover {
        transform: translateY(-5px); /* Lift card slightly on hover */
    }

    .card-body {
        text-align: left; /* Text alignment */
    }

    .text-success {
        color: green; /* Warna untuk status Tersedia */
    }

    .text-danger {
        color: red; /* Warna untuk status Sudah Disewa */
    }

    .text-orange {
        color: orange; /* Warna untuk harga, merek, dan model */
    }

    .card-body hr {
        margin: 10px 0; /* Spasi di antara garis pemisah */
    }

    /* Menambahkan bayangan biru dengan opacity yang lebih tinggi */
    .shadow-blue {
        box-shadow: 0 16px 16px rgba(0, 0, 255, 0.5); /* Bayangan biru dengan opacity 0.5 */
    }
</style>

<!-- JavaScript (jQuery) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('.card').on('click', function() {
            window.location.href = $(this).find('a').attr('href');
        });
    });
</script>
@endsection
