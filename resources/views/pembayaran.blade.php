@extends('layouts1.app')

@section('contents')
<br>
<h1 align="center">Pembayaran</h1>
<br>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<style>
    /* CSS untuk membenarkan judul dan ikon pembayaran di tengah */
    .payment-section {
        display: flex;
        align-items: center;
    }
    .payment-section .payment-info {
        flex: 1;
        text-align: left;
        margin-left: 250px;
    }
    .payment-section .payment-info h5 {
        margin-bottom: 20px;
    }
    .payment-section .car-image {
        width: 1px; /* Ukuran gambar mobil yang lebih kecil */
        margin-left: 50px;
    }
    /* CSS untuk tombol dan penjelasan */
    .payment-button-container {
        text-align: center;
        margin-top: 20px;
    }
    .payment-explanation {
        text-align: center;
        margin-top: 10px;
    }
</style>

<div class="container">
<div class="row justify-content-center">
    <!-- Informasi Kontak dan Alamat -->
    <div class="col-md-12 mb-4">
        <div class="card border-primary">
            <div class="card-body">
                <div class="payment-section">
                    <!-- Gambar Mobil -->
                    <div class="car-image">
                        <img src="{{ asset('admin_assets\img\gateway.png') }}" width="200px">
                    </div>
                    <!-- Informasi Pembayaran -->
                    <div class="payment-info">
                        <h5 class="card-title">Metode Pembayaran</h5>
                        <hr>
                        <p> Transfer Bank: 1234578575</p>
                        <p> DANA: 085799352991</p>
                        <p> Gopay: 085799352991</p>
                        <p> Shopee Pay: 085799352991</p>
                       
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<!-- Tombol WhatsApp dan penjelasan -->
<div class="payment-button-container">
    <button class="btn btn-primary" onclick="sendWhatsAppMessage()">Kirim Bukti Pembayaran melalui WhatsApp</button>
</div>
<div class="payment-explanation">
    <p>Silakan melakukan pembayaran terlebih dahulu. Admin akan memverifikasi data Anda setelah pembayaran diterima.</p>
</div>

<!-- JavaScript untuk mengirim pesan WhatsApp -->
<script>
function sendWhatsAppMessage() {
    // Nomor WhatsApp tujuan
    var phoneNumber = '6285799352991';
    
    // Pesan yang akan dikirim
    var message = 'Ini adalah bukti pembayaran:';
    
    // Lampirkan URL bukti pembayaran (misalnya, gambar)
    var proofUrl = '{{ asset("path/to/proof.png") }}';
    
    // Buat URL WhatsApp dengan nomor tujuan dan pesan
    var url = 'https://api.whatsapp.com/send?phone=' + phoneNumber + '&text=' + encodeURIComponent(message) + '&source=&data=&document=' + encodeURIComponent(proofUrl);
    
    // Buka jendela WhatsApp dengan URL yang telah dibuat
    window.open(url, '_blank');
}
</script>

@endsection
