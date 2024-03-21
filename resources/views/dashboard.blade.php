@extends('layouts1.app')


@section('contents')
<style>
  .card:hover {
    transform: translateY(-5px); /* Menggeser card ke atas saat dihover */
    transition: transform 0.3s ease; /* Efek transisi dengan durasi 0.3 detik */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Menambahkan bayangan */
}
</style>
<h1 align="center"><b>SELAMAT DATANG DI APLIKASI RENTAL MOBIL</b></h1>
<br>
 
   <!-- Tentang Kami -->
   <div class="container">
    <div class="card border-danger mb-4">
        <div class="card-body">
            <h3 class="card-title text-center"><b>Tentang Kami</b></h3>
            <hr>
            <p class="card-text">Umam Pati Tours & Rental memberikan pelayanan terbaik, memuaskan beserta supir yang Ramah, Handal, mengerti jalan dan peraturan lalu lintas jalan raya di dalam maupun di luar kota. Kami siap mengantar anda kemana saja dan menjadi mitra anda untuk melakukan perjalanan di Seluruh wilayah Jawa.</p>
            <p class="card-text">Semua armada yang kami miliki selalu dilakukan perawatan berkala guna memastikan kondisi mobil yang Prima, Bersih dan Nyaman. Prinsip kami adalah memberikan Kenyamanan, Keamanan dan Pelayanan Terbaik untuk anda menjadi hal yang Utama bagi kami.</p>
            <p class="card-text">Harga yang kami berikan sangat kompetitif dan murah, dan dijamin tidak mengurangi kualitas pelayanan yang kami berikan, sesuai Prinsip kami yaitu memberikan Kenyamanan, Keamanan dan Pelayanan Terbaik.</p>
            <p class="card-text">Pelayanan yang kami sediakan adalah sewa mobil / rental mobil harian lepas kunci atau dengan driver dan kami juga menawarkan beberapa pilihan paket wisata murah Di Jawa Tengah.</p>
            <p class="card-text"><strong>Mengapa Sewa / Rental Mobil di Umam Pati Tours & Rental :</strong></p>
            <ul class="card-text">
                <li>Jaminan Mobil Terbaru, Bersih dan Terawat</li>
                <li>Terpercaya, Profesional, memberikan pelayanan Terbaik dan Harga Termurah</li>
                <li>Jaminan Driver Ramah, Sabar, Tepat waktu, Menguasai Skill Safety Driving, Mengerti jalan dan tempat wisata</li>
                <li>Fast Respon Customer Service Online melayani selama 24 Jam service call</li>
            </ul>
        </div>
    </div>
</div>

<!-- Card besar di luar container -->
<div class="card border-primary mb-3">
    <div class="card-body">
    <h2 class="text-center mb-4">Daftar Mobil Tersedia</h2>
        <hr>
        <div class="container">
    
    <div class="row">
        <!-- Mobil 1 -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{ asset('assets\img\5.jpg') }}" class="card-img-top" alt="Mobil 1">
                <div class="card-body">
                    <h5 class="card-title">Mobil 1</h5>
                    
                </div>
            </div>
        </div>
        <!-- Mobil 2 -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{ asset('assets\img\9.jpeg') }}" class="card-img-top" alt="Mobil 2">
                <div class="card-body">
                    <h5 class="card-title">Mobil 2</h5>
                    
                </div>
            </div>
        </div>
        <!-- Mobil 3 -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{ asset('assets\img\10.jpg') }}" class="card-img-top" alt="Mobil 3">
                <div class="card-body">
                    <h5 class="card-title">Mobil 3</h5>
                    
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{ asset('assets\img\8.jpg') }}" class="card-img-top" alt="Mobil 1">
                <div class="card-body">
                    <h5 class="card-title">Mobil 1</h5>
                    
                </div>
            </div>
        </div>
        <!-- Mobil 2 -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{ asset('assets\img\11.jpg') }}" class="card-img-top" alt="Mobil 2">
                <div class="card-body">
                    <h5 class="card-title">Mobil 2</h5>
                    
                </div>
            </div>
        </div>
        <!-- Mobil 3 -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{ asset('assets\img\12.jpg') }}" class="card-img-top" alt="Mobil 3">
                <div class="card-body">
                    <h5 class="card-title">Mobil 3</h5>
                    
                </div>
            </div>
        </div>
        <!-- Lanjutkan sampai mobil ke-15 -->
    </div>
    <!-- Tombol "Selengkapnya" -->
<div class="text-center">
    <a href="/data" class="btn btn-primary">Selengkapnya</a>
</div>
</div>
    </div>
</div>

<!-- Container untuk daftar mobil tersedia -->




<div class="container">
    <div class="card border-primary mb-3">
        <div class="card-body">
            <h3 class="card-title text-center"><b>Syarat dan Ketentuan</b></h3>
            <hr>
            <p class="card-text">Sebelum menyewa mobil, penting untuk memahami aturan sewa mobil dari kami agar tidak terjadi hal yang kurang menyenangkan di kemudian hari. Berikut ini merupakan aturan sewa mobil yang berlaku di tempat kami:</p>
            <ul class="card-text">
                <li>Bagi penyewa lepas kunci wajib memiliki SIM sesuai dengan mobil yang disewa (SIM A untuk mobil pribadi)</li>
                <li>Memiliki KTP yang akan disimpan oleh pemilik sewa selama masa penyewaan</li>
                <li>Biaya overtime per-jam berlaku 10% dari tarif sewa</li>
                <li>Fasilitas pengantaran mobil dan pickup mobil pada daerah-daerah tertentu</li>
                <li>Aturan wilayah pemakaian kendaraan sesuai perjanjian</li>
                <li>Pihak sewa mobil berhak menolak pelanggan jika terlihat mencurigakan</li>
                <li>Aturan tentang denda asuransi mobil jika terjadi kerusakan ringan atau berat</li>
                <li>Tidak diperkenankan untuk digunakan balapan resmi atau tidak resmi</li>
                <li>Durasi penyewaan dianggap digunakan secara penuh dan tidak bisa dipotong untuk digunakan di lain waktu</li>
                <li>Jika menyewa dengan sopir, harga sewa tidak termasuk harga bahan bakar, namun biasanya ada juga paket sewa dengan sopir dan BBM</li>
                <li>Kecelakaan yang disebabkan oleh sopir perusahaan sewa akan ditanggung oleh perusahaan sewa</li>
                <li>Kecelakaan yang disebabkan oleh pihak penyewa, biaya perbaikan akan ditanggung penyewa sepenuhnya</li>
                <li>Pembatalan sewa biasanya akan dikenakan denda sesuai dengan aturan masing-masing perusahaan sewa</li>
                <li>Jika mobil sewaan dilaporkan hilang, akan diproses hukum</li>
                <li>Harga tidak termasuk biaya tiket masuk obyek wisata</li>
                <li>Tidak termasuk: parkir, tol, makan untuk driver, penginapan, dll.</li>
            </ul>
            <p class="card-text">Jika Anda masih ragu atau bingung, segera hubungi kami untuk menanyakan kebijakan secara langsung.</p>
        </div>
    </div>
</div>
<br>
<div class="container">
<hr>
    <h3 class="text-center mb-4"><b>Layanan Kami</b></h3>
    <hr>
    <div class="row">
        <!-- Rental Mobil Harian -->
        <div class="col-md-4 mb-4">
            <div class="card text-center">
                <img src="{{ asset('assets\img\9.jpeg') }}" class="card-img-top mx-auto mt-4" alt="Rental Mobil Harian" style="max-width: 200px;">
                <hr>
                <div class="card-body" style="height: 200px;">
                    <h5 class="card-title">Rental Mobil Harian</h5>
                    <p class="card-text">Sewa mobil harian dengan berbagai pilihan kendaraan untuk kebutuhan perjalanan Anda.</p>
                    <a href="/rental-mobil-harian" class="btn btn-primary">Selengkapnya</a>
                </div>
            </div>
        </div>
        <!-- Tour & Travel -->
        <div class="col-md-4 mb-4">
            <div class="card text-center">
                <img src="{{ asset('assets\img\8.jpg') }}" class="card-img-top mx-auto mt-4" alt="Tour & Travel" style="max-width: 200px;">
                <hr>
                <div class="card-body" style="height: 200px;">
                    <h5 class="card-title">Tour & Travel</h5>
                    <p class="card-text">Nikmati paket wisata yang menarik dan profesional dengan layanan tour & travel kami.</p>
                    <a href="/tour-travel" class="btn btn-primary">Selengkapnya</a>
                </div>
            </div>
        </div>
        <!-- Sewa Mobil Mingguan -->
        <div class="col-md-4 mb-4">
            <div class="card text-center">
                <img src="{{ asset('assets\img\5.jpg') }}" class="card-img-top mx-auto mt-4" alt="Sewa Mobil Mingguan" style="max-width: 200px;">
                <hr><div class="card-body" style="height: 200px;">
                    <h5 class="card-title">Sewa Mobil Mingguan</h5>
                    <p class="card-text">Penawaran khusus untuk menyewa mobil secara mingguan dengan harga terbaik.</p>
                    <br>
                    <a href="/sewa-mobil-mingguan" class="btn btn-primary">Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>
</div>




    <!-- Include font awesome CSS -->
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



<div class="container">
    <div class="row justify-content-center">
        <!-- Informasi Kontak dan Alamat -->
        <div class="col-md-12 mb-4">
            <div class="card border-primary">
                <div class="card-body">
                    <div class="row">
                        <!-- Informasi Hubungi Kami -->
                        <div class="col-md-6">
                            <h5 class="card-title">Hubungi Kami</h5>
                            <p><i class="fas fa-phone-alt"></i> Telepon: 6287761688709</p>
                            <p><i class="fab fa-whatsapp"></i> WhatsApp: 6287761688709</p>
                            <p><i class="far fa-envelope"></i> Email: randybalitours@gmail.com</p>
                        </div>
                        <!-- Informasi Alamat Kami -->
                        <div class="col-md-6">
                            <h5 class="card-title">Alamat Kami</h5>
                            <p><i class="fas fa-map-marker-alt"></i> <strong>Head Office:</strong><br>
                            Jl. Raya Kampus Unud, No. 9<br>
                            Jimbaran, Badung – Bali<br>
                            Indonesia</p>
                        </div>
                    </div>
                    <!-- Kontak -->
                    
                </div>
            </div>
        </div>
    </div>
</div>




    
<script>
    // Ambil semua elemen card
    var cards = document.querySelectorAll('.card');

    // Iterasi semua card
    cards.forEach(function(card) {
        // Tambahkan event listener untuk event mouseenter
        card.addEventListener('mouseenter', function() {
            // Atur warna latar belakang saat dihover
            card.style.backgroundColor = '#f8f9fa'; // Ganti warna latar belakang
        });

        // Tambahkan event listener untuk event mouseleave
        card.addEventListener('mouseleave', function() {
            // Kembalikan warna latar belakang ke semula saat mouse meninggalkan card
            card.style.backgroundColor = '#ffffff'; // Warna latar belakang default
        });
    });
</script>

  
@endsection