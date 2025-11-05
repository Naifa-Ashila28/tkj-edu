<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TKJ RPL EDU - Belajar Seru Dunia Teknologi!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700;900&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #74b9ff, #a29bfe);
            color: #2d3436;
            overflow-x: hidden;
        }

        nav {
            background: rgba(255,255,255,0.2);
            backdrop-filter: blur(10px);
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
        }

    .logo {
    height: 60px;                 /* ukuran logo */
    width: 60px;
    }

        .hero {
            text-align: center;
            padding: 100px 20px;
            color: white;
        }

        .hero h1 {
            font-weight: 900;
            font-size: 3rem;
            animation: fadeInDown 1s ease-in-out;
        }

        .hero p {
            animation: fadeInUp 1s ease-in-out;
        }

        .card {
            border: none;
            border-radius: 20px;
            transition: 0.3s;
        }

        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 20px rgba(0,0,0,0.2);
        }

        footer {
            text-align: center;
            padding: 20px;
            color: #fff;
            font-size: 0.9rem;
        }

        /* Tombol Kuis Animasi */
        .btn-quiz {
            font-size: 1.2rem;
            font-weight: 600;
            border-radius: 50px;
            padding: 12px 28px;
            transition: all 0.3s ease-in-out;
        }

        .btn-tkj {
            background-color: #0984e3;
            color: #fff;
        }

        .btn-tkj:hover {
            background-color: #74b9ff;
            transform: translateY(-3px);
        }

        .btn-rpl {
            background-color: #d63031;
            color: #fff;
        }

        .btn-rpl:hover {
            background-color: #ff7675;
            transform: translateY(-3px);
        }

        /* Animasi */
        @keyframes fadeInDown {
            0% { opacity: 0; transform: translateY(-20px); }
            100% { opacity: 1; transform: translateY(0); }
        }

        @keyframes fadeInUp {
            0% { opacity: 0; transform: translateY(20px); }
            100% { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-light px-4">
        <div class="d-flex align-items-center">
            <img src="{{ asset('images/logo-sekolah.png') }}" class="logo" alt="Logo Sekolah">
            <h4 class="text-white fw-bold">TKJ RPL EDU</h4>
        </div>
    </nav>

    <section class="hero">
        <h1>Belajar Teknologi Jaringan & Coding Jadi Seru!</h1>
        <p class="lead">Ayo jelajahi uji pengetahuanmu lewat kuis interaktif 🔥</p>
    </section>

    <!-- Bagian Kuis -->
    <div class="container py-5" id="kuis-section">
        <h2 class="text-center text-white fw-bold mb-4">Pilih Kuis Kamu 🎯</h2>
        <div class="row g-4 justify-content-center">
            <div class="col-md-5">
                <div class="card p-4 text-center bg-light shadow-sm">
                    <h3 class="fw-bold text-primary">💻 Jurusan TKJ</h3>
                    <p>Pelajari dunia jaringan komputer — dari kabel LAN hingga konfigurasi router!</p>
                    <a href="{{ route('quiz.show', 1) }}" class="btn btn-primary">Mulai Kuis TKJ</a>
                </div>
            </div>
            <div class="col-md-5">
                <div class="card p-4 text-center bg-light shadow-sm">
                    <h3 class="fw-bold text-danger">👨‍💻 Jurusan RPL</h3>
                    <p>Kenali dunia coding dan pembuatan aplikasi yang seru dan kreatif!</p>
                    <a href="{{ route('quiz.show', 2) }}" class="btn btn-success">Mulai Kuis RPL</a>
                </div>
            </div>
        </div>
    </div>

    <footer>
        © {{ date('Y') }} TKJ RPL EDU | Belajar Menyenangkan 
    </footer>
</body>
</html>
