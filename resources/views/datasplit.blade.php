@extends('default')

@section('content')
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
                        <button class="btn btn-primary" onclick="toggleCard(this)">Pesan Sekarang</button> <!-- Ganti "#" dengan URL tujuan Anda -->
                    </div>
                    <div class="card-input" style="display: none;">
                        <!-- Form input data -->
                        <form class="form-data">
                            <div class="mb-3">
                                <label for="nama">Nama Penyewa</label>
                                <input type="text" id="nama" name="nama" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="tanggal_mulai">Tanggal Mulai</label>
                                <input type="date" id="tanggal_mulai" name="tanggal_mulai" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="tanggal_selesai">Tanggal Selesai</label>
                                <input type="date" id="tanggal_selesai" name="tanggal_selesai" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="waktu">Waktu</label>
                                <input type="time" id="waktu" name="waktu" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="status_pembayaran">Status Pembayaran</label>
                                <select id="status_pembayaran" name="status_pembayaran" class="form-control">
                                    <option value="Lunas">Lunas</option>
                                    <option value="Belum Lunas">Belum Lunas</option>
                                </select>
                            </div>
                            <button type="button" class="btn btn-primary" onclick="submitForm(this)">Submit</button>
                        </form>
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
    function toggleCard(button) {
        $(button).closest('.card-body').find('.card-input').toggle();
    }

    function submitForm(button) {
        var formData = $(button).closest('.card-body').find('.form-data').serializeArray();
        
        $.ajax({
            url: "/transaksis",
            method: "POST",
            data: formData,
            success: function(response) {
                console.log("Data berhasil dikirim:", response);
            },
            error: function(xhr, status, error) {
                console.error("Terjadi kesalahan:", error);
            }
        });
    }
</script>
@stop
