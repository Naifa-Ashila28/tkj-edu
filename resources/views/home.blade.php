<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TKJ RPL EDU - Belajar Seru Dunia Teknologi!</title>

    <!-- Bootstrap & Font -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700;900&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg px-4">
        <div class="container-fluid d-flex align-items-center justify-content-start">
            <img src="{{ asset('images/logo-sekolah.png') }}" class="logo me-3" alt="Logo Sekolah">
            <h4 class="fw-bold text-white mb-0">TKJ RPL EDU</h4>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <h1>Belajar Teknologi Jaringan & Coding Jadi Seru!</h1>
        <p class="lead">Ayo jelajahi uji pengetahuanmu lewat kuis interaktif 🔥</p>
    </section>

    <!-- Section Pilihan Kuis -->
    <div class="container py-5">
        <h2 class="text-center fw-bold text-white mb-5">Pilih Kuis Kamu 🎯</h2>

        <div class="row justify-content-center g-4">
            <!-- Kuis TKJ -->
            <div class="col-md-5">
                <div class="card text-center p-4 shadow">
                    <h3 class="fw-bold text-primary">💻 Jurusan TKJ</h3>
                    <p>Pelajari dunia jaringan komputer — dari kabel LAN hingga konfigurasi router!</p>
                    <a href="{{ route('quiz.show', 1) }}" class="btn btn-quiz btn-tkj mt-2">Mulai Kuis TKJ</a>
                </div>
            </div>

            <!-- Kuis RPL -->
            <div class="col-md-5">
                <div class="card text-center p-4 shadow">
                    <h3 class="fw-bold text-danger">👨‍💻 Jurusan RPL</h3>
                    <p>Kenali dunia coding dan pembuatan aplikasi yang seru dan kreatif!</p>
                    <a href="{{ route('quiz.show', 2) }}" class="btn btn-quiz btn-rpl mt-2">Mulai Kuis RPL</a>
                </div>
            </div>
        </div>

        <!-- Tombol Leaderboard -->
        <div class="text-center mt-5">
            <a href="{{ route('leaderboard.index') }}" class="btn btn-warning btn-lg fw-bold shadow-sm">

                🏆 Lihat Leaderboard
            </a>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        © {{ date('Y') }} TKJ RPL EDU | Belajar Menyenangkan
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
