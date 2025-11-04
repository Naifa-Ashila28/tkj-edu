<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TKJ EDU - Belajar Asik Dunia Jaringan!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #007bff 0%, #00c9a7 100%);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: white;
            font-family: "Poppins", sans-serif;
        }
        .navbar {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
        }
        .card {
            background: rgba(255, 255, 255, 0.1);
            border: none;
            border-radius: 20px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s;
        }
        .card:hover {
            transform: scale(1.05);
        }
        .btn-custom {
            border-radius: 30px;
            padding: 12px 30px;
            font-weight: bold;
            transition: all 0.3s;
        }
        .btn-custom:hover {
            transform: scale(1.1);
        }
        footer {
            margin-top: 50px;
            font-size: 14px;
            color: rgba(255, 255, 255, 0.8);
        }
        .logo {
            height: 60px;
            border-radius: 50%;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark w-100 py-3">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center">
                <!-- 🏫 Logo Sekolah (ganti src setelah kamu punya logonya) -->
                <img src="/images/logo.png" alt="Logo Sekolah" class="logo me-3">
                <h3 class="fw-bold text-white mb-0">TKJ EDU</h3>
            </div>
            <div>
                <a href="/materi" class="btn btn-light btn-sm me-2">Materi</a>
                <a href="/kuis" class="btn btn-warning btn-sm">Kuis</a>
            </div>
        </div>
    </nav>

    <!-- Konten utama -->
    <div class="text-center container mt-5">
        <div class="card p-5 text-dark">
            <h1 class="fw-bold text-primary">🌐 Selamat Datang di TKJ EDU!</h1>
            <p class="lead mt-3">
                Belajar jaringan komputer, hardware, dan software dengan cara yang menyenangkan!  
                Cocok banget untuk siswa <strong>Teknik Komputer dan Jaringan</strong> SMP & SMK.
            </p>

            <div class="d-flex justify-content-center mt-4 gap-3">
                <a href="/materi" class="btn btn-success btn-custom">📘 Mulai Belajar</a>
                <a href="/kuis" class="btn btn-warning btn-custom">🧠 Uji Pengetahuan</a>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="text-center mt-5">
        <p>© 2025 SMK TELKOM PURWOKERTO</p>
    </footer>
</body>
</html>
