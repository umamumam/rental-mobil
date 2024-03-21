@extends('layouts1.app')

@section('contents')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Split</title>
    <style>
        /* Style untuk mengatur layout halaman */
        .container {
            display: flex;
            justify-content: space-between;
            width: 100%;
            height: 100vh;
        }
        .iframe-container {
            width: 49%; /* Ukuran iframe */
            height: 100%;
        }
        iframe {
            width: 100%;
            height: 100%;
            border: none; /* Hapus border bawaan iframe */
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Iframe untuk halaman kiri -->
        <div class="iframe-container">
            <iframe id="datasplitFrame" src="/datasplit"></iframe>
        </div>
        <!-- Iframe untuk halaman kanan -->
        <div class="iframe-container">
            <iframe id="inputFrame" src="/input"></iframe>
        </div>
    </div>

    <script>
        // Fungsi untuk mendeteksi perubahan pada URL iframe
        function checkURL() {
            // Ambil URL dari iframe input
            var inputURL = document.getElementById('inputFrame').contentWindow.location.href;

            // Jika URL mengarah ke halaman /pembayaran
            if (inputURL.includes('/pembayaran')) {
                // Redirect pengguna ke halaman /pembayaran
                window.location.href = '/pembayaran';
            }
        }

        // Jalankan fungsi checkURL setiap detik
        setInterval(checkURL, 1000);
    </script>
</body>
</html>
@endsection
