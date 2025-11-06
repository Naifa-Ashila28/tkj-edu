const questions = [
  {
    q: "Kalau anak RPL (atau PPLG), mereka belajar apa?",
    options: [
      "Belajar cara merawat dan nyambungin komputer.",
      "Belajar cara merancang dan membuat aplikasi, website, atau game.",
      "Belajar tentang perasaan orang waktu pakai aplikasi.",
      "Belajar cara melindungi komputer dari hacker."
    ],
    correct: 1
  },
  {
    q: "Apa tujuan utama masuk jurusan RPL?",
    options: [
      "Jadi ahli yang mengurus penyimpanan data di internet.",
      "Biar gampang kirim data dan ngobrol.",
      "Supaya siswa bisa bikin aplikasi atau game yang berguna.",
      "Melindungi komputer dari serangan hacker."
    ],
    correct: 2
  },
  {
    q: "Di presentasi, apa itu 'UI' (User Interface)?",
    options: [
      "Perasaan orang waktu pakai aplikasi (gampang atau susah).",
      "Tampilan aplikasi yang kita lihat, misalnya tombol, gambar, dan warnanya.",
      "Kode untuk mengatur warna dan tulisan di website.",
      "Cara membuat aplikasi dari awal sampai jadi."
    ],
    correct: 1
  },
  {
    q: "Lalu, apa itu 'UX' (User Experience)?",
    options: [
      "Tampilan aplikasi (tombol, warna, gambar).",
      "Kode khusus untuk bikin game.",
      "Perasaan orang waktu pakai aplikasi (apakah gampang dipakai dan tidak bikin bingung).",
      "Sistem untuk menjaga keamanan data kita."
    ],
    correct: 2
  },
  {
    q: "Apa gunanya CSS?",
    options: [
      "Melindungi website dari hacker.",
      "Menyimpan data di internet.",
      "Membuat isi tulisan di website.",
      "Mengatur tampilan website (warna, ukuran tulisan, dan letak gambar)."
    ],
    correct: 3
  }
];

let current = 0;
let score = 0;

function showQuestion() {
  const q = questions[current];
  const container = document.getElementById("question-container");
  container.innerHTML = `
    <div class="question">${current + 1}. ${q.q}</div>
    ${q.options.map((opt, i) => `
      <div class="option" onclick="selectAnswer(${i})">${opt}</div>
    `).join('')}
    <div class="mt-3 text-muted">Soal ${current + 1} dari ${questions.length}</div>
  `;
  document.getElementById("next-btn").style.display = "none";
}

function selectAnswer(selected) {
  const correct = questions[current].correct;
  const options = document.querySelectorAll('.option');

  options.forEach((opt, i) => {
    opt.style.pointerEvents = "none";
    if (i === correct) opt.style.backgroundColor = "#9ef01a"; // benar
    else if (i === selected) opt.style.backgroundColor = "#ff595e"; // salah
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
  const resultSection = document.getElementById("result-section");
  resultSection.style.display = "block";

  const percent = Math.round((score / questions.length) * 100);
  document.getElementById("score-input").value = percent;

  document.getElementById("result").innerHTML = `Nilai Kamu: ${percent}%`;
  document.getElementById("message").innerHTML =
    percent >= 60
      ? "🎉 Hebat! Kamu jago coding!"
      : "😅 Coba lagi yuk, biar makin paham RPL!";

  // tampilkan tombol submit
  document.getElementById("submit-btn").style.display = "inline-block";
}

window.onload = showQuestion;
