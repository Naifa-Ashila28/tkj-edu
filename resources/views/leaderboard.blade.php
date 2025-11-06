<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leaderboard | TKJ RPL EDU</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700;900&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/leaderboard.css') }}">
</head>
<body class="bg-dark text-white">
    <div class="container py-5">
        <h1 class="text-center mb-4 fw-bold">🏆 Leaderboard</h1>

        <div class="card bg-light text-dark shadow-sm p-4">
            <table class="table table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>Peringkat</th>
                        <th>Nama</th>
                        <th>Jurusan</th>
                        <th>Nilai (%)</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($results as $index => $result)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $result->name }}</td>
                            <td>{{ strtoupper($result->jurusan ?? '-') }}</td>
                            <td>{{ $result->score }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center">Belum ada data leaderboard.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="text-center mt-4">
            <a href="{{ url('/') }}" class="btn btn-primary">⬅️ Kembali ke Home</a>
        </div>
    </div>

    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/leaderboard.js') }}"></script>
</body>
</html>
