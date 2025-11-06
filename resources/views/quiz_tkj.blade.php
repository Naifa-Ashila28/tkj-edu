<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Kuis TKJ</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="{{ asset('css/quiz_tkj.css') }}">
</head>
<body>
  <div class="container text-center">
    <div class="quiz-container mx-auto col-md-8">
      <h2 class="text-primary fw-bold mb-4">💻 Kuis Jurusan TKJ</h2>

      <!-- 🧩 FORM MULAI DI SINI -->
      {{-- langsung simpan ke leaderboard tanpa quiz_result --}}
      <form action="{{ route('quiz.saveResult', $quiz->id) }}" method="POST" id="quiz-form" onsubmit="return goToLeaderboard(event)">
        @csrf

        <div id="quiz-section">
          <div id="question-container"></div>
          <button id="next-btn" class="btn btn-primary mt-3" type="button" onclick="nextQuestion()" style="display:none;">
            ➡️ Soal Selanjutnya
          </button>
        </div>

        <div id="result-section" style="display:none;" class="mt-4">
          <h3 id="result"></h3>
          <p id="message"></p>

          <!-- input tersembunyi untuk nilai -->
          <input type="hidden" name="score" id="score-input">

          <!-- input tersembunyi untuk quiz id -->
          <input type="hidden" name="quiz_id" value="{{ $quiz->id }}">

          <!-- 🧍 input nama -->
          <div class="mt-3">
            <label for="name" class="form-label fw-semibold">Masukkan Nama Kamu:</label>
            <input type="text" name="name" id="name" class="form-control text-center" placeholder="Nama kamu..." required>
          </div>

          <!-- tombol kirim hasil -->
          <button type="submit" id="submit-btn" class="btn btn-success mt-3" style="display:none;">
            💾 Simpan ke Leaderboard
          </button>

          <a href="/" class="btn btn-warning mt-3">🏠 Kembali ke Home</a>
        </div>
      </form>
      <!-- 🧩 FORM SELESAI -->
    </div>
  </div>

  <!-- Custom JS -->
  <script src="{{ asset('js/quiz_tkj.js') }}"></script>
</body>
</html>
