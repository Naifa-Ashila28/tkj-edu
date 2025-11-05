<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kuis TKJ</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(135deg, #c2e9fb, #a1c4fd);
      font-family: 'Poppins', sans-serif;
    }
    .quiz-container {
      background: #fff;
      border-radius: 20px;
      box-shadow: 0 4px 20px rgba(0,0,0,0.1);
      padding: 30px;
      margin-top: 50px;
    }
    .question {
      font-size: 1.3rem;
      font-weight: 600;
    }
    .option {
      background: #f5f5f5;
      border-radius: 12px;
      padding: 10px 20px;
      margin-bottom: 10px;
      cursor: pointer;
      transition: 0.2s;
    }
    .option:hover {
      background: #b3e5fc;
    }
    #result {
      font-size: 1.4rem;
      font-weight: bold;
      color: #2b9348;
    }
  </style>
</head>
<body>
  <div class="container text-center">
    <div class="quiz-container mx-auto col-md-8">
      <h2 class="text-primary fw-bold mb-4">💻 Kuis Jurusan TKJ</h2>

      <div id="quiz-section">
        <div id="question-container"></div>
        <button id="next-btn" class="btn btn-primary mt-3" onclick="nextQuestion()" style="display:none;">➡️ Soal Selanjutnya</button>
      </div>

      <div id="result-section" style="display:none;" class="mt-4">
        <h3 id="result"></h3>
        <p id="message"></p>
        <a href="/" class="btn btn-warning mt-2">🏠 Kembali ke Home</a>
      </div>
    </div>
  </div>

  <script>
    const questions = [
      {q: "Apa kepanjangan dari TKJ?", options: ["Teknik Komputer Jaringan", "Teknik Kendaraan Jaringan", "Teknologi Komunikasi Jaringan", "Teknik Komunikasi Jaringan"], correct: 0},
      {q: "Perangkat yang berfungsi menghubungkan dua jaringan disebut?", options: ["Router", "Switch", "Hub", "Repeater"], correct: 0},
      {q: "Kabel UTP memiliki berapa pasang kabel?", options: ["2", "4", "6", "8"], correct: 1},
      {q: "Protokol yang digunakan untuk mengirim email adalah?", options: ["HTTP", "SMTP", "FTP", "DNS"], correct: 1},
      {q: "Alamat IP versi 4 memiliki panjang?", options: ["8 bit", "16 bit", "32 bit", "64 bit"], correct: 2}
    ];

    let current = 0;
    let score = 0;

    function showQuestion() {
      const q = questions[current];
      const container = document.getElementById("question-container");
      container.innerHTML = `
        <div class="question">${current+1}. ${q.q}</div>
        ${q.options.map((opt, i) => `<div class="option" onclick="selectAnswer(${i})">${opt}</div>`).join('')}
        <div class="mt-3 text-muted">Soal ${current+1} dari ${questions.length}</div>
      `;
      document.getElementById("next-btn").style.display = "none";
    }

    function selectAnswer(selected) {
      const correct = questions[current].correct;
      const options = document.querySelectorAll('.option');
      options.forEach((opt, i) => {
        opt.style.pointerEvents = "none";
        if (i === correct) opt.style.backgroundColor = "#9ef01a";
        else if (i === selected) opt.style.backgroundColor = "#ff595e";
      });
      if (selected === correct) score++;
      document.getElementById("next-btn").style.display = "inline-block";
    }

    function nextQuestion() {
      current++;
      if (current < questions.length) {
        showQuestion();
      } else {
        showResult();
      }
    }

    function showResult() {
      document.getElementById("quiz-section").style.display = "none";
      document.getElementById("result-section").style.display = "block";
      const percent = Math.round((score / questions.length) * 100);
      document.getElementById("result").innerText = `Nilai Kamu: ${percent}`;
      document.getElementById("message").innerText = percent >= 60 ? "🎉 Keren banget! Kamu paham dasar TKJ!" : "😅 Coba lagi yuk, biar makin jago!";
    }

    window.onload = showQuestion;
  </script>
</body>
</html>
