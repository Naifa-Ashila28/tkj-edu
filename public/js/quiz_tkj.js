const questions = [
  {
    q: "TKJ itu belajar apa sih?",
    options: [
      "Belajar bikin aplikasi dan game.",
      "Belajar cara nyambungin komputer biar bisa kirim data.",
      "Belajar melindungi komputer dari serangan hacker.",
      "Belajar tentang cara simpan data di internet."
    ],
    correct: 1
  },
  {
    q: "Apa yang dimaksud dengan Cloud Computing?",
    options: [
      "Jaringan yang nyambungin semua komputer di dunia.",
      "Cara melindungi komputer dari virus dan hacker.",
      "Menyimpan dan memakai data atau aplikasi lewat internet (bukan di komputer sendiri).",
      "Tampilan aplikasi atau website yang kita lihat."
    ],
    correct: 2
  },
  {
    q: "Apa tujuan utama dari Cyber Security?",
    options: [
      "Biar gampang kirim-kirim data antar komputer.",
      "Bikin tempat penyimpanan data di internet.",
      "Melindungi data kita biar aman dan tidak diintip atau diubah orang lain.",
      "Mengatur warna dan tulisan di website."
    ],
    correct: 2
  },
  {
    q: "Di presentasi, ada 3 bidang yang dipelajari di TKJ. Yang mana yang BUKAN termasuk?",
    options: [
      "Cloud Computing",
      "Cyber Security",
      "Networking (Jaringan)",
      "Bikin Game"
    ],
    correct: 3
  },
  {
    q: "Apa gunanya 'Network' (Jaringan) yang paling utama?",
    options: [
      "Menghubungkan komputer di seluruh dunia biar bisa cari info dan ngobrol.",
      "Melindungi data dari hacker.",
      "Mengatur tampilan aplikasi.",
      "Bikin aplikasi yang berguna buat manusia."
    ],
    correct: 0
  }
];

let current = 0;
let score = 0;

// Ambil ID quiz dari input hidden di Blade
const quizId = document.querySelector('input[name="quiz_id"]').value;

function showQuestion() {
  const q = questions[current];
  const container = document.getElementById("question-container");
  container.innerHTML = `
    <div class="question">${current + 1}. ${q.q}</div>
    ${q.options.map((opt, i) => `<div class="option" onclick="selectAnswer(${i})">${opt}</div>`).join('')}
    <div class="mt-3 text-muted">Soal ${current + 1} dari ${questions.length}</div>
  `;
  document.getElementById("next-btn").style.display = "none";
}

function selectAnswer(selected) {
  const correct = questions[current].correct;
  const options = document.querySelectorAll('.option');

  options.forEach((opt, i) => {
    opt.style.pointerEvents = "none";
    if (i === correct) opt.style.backgroundColor = "#9ef01a"; // hijau
    else if (i === selected) opt.style.backgroundColor = "#ff595e"; // merah
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

  resultSection.innerHTML = `
    <h3>Nilai Kamu: ${percent}%</h3>
    <p>${percent >= 60 ? "🎉 Keren banget! Kamu paham dasar TKJ!" : "😅 Coba lagi yuk, biar makin jago TKJ!"}</p>

    <form id="saveForm">
      <input type="hidden" name="_token" value="${document.querySelector('meta[name=csrf-token]').content}">
      <input type="hidden" name="quiz_id" value="${quizId}">
      <input type="hidden" name="score" value="${percent}">
      <div class="mt-3">
        <label>Masukkan Nama Kamu:</label>
        <input type="text" name="name" required placeholder="Nama kamu..." class="form-control">
      </div>
      <button type="submit" class="btn btn-success mt-3">💾 Simpan ke Leaderboard</button>
    </form>

    <a href="/" class="btn btn-warning mt-3">🏠 Kembali ke Home</a>
  `;

  // Tambahkan listener setelah HTML muncul
  document.getElementById("saveForm").addEventListener("submit", saveToLeaderboard);
}

// Simpan hasil langsung via fetch dan redirect ke leaderboard
async function saveToLeaderboard(e) {
  e.preventDefault();
  const form = e.target;
  const data = new FormData(form);

  try {
    const response = await fetch("/quiz/save-result", {
      method: "POST",
      body: data
    });

    if (response.ok) {
      window.location.href = "/leaderboard";
    } else {
      alert("❌ Gagal menyimpan hasil, coba lagi nanti.");
    }
  } catch (error) {
    alert("⚠️ Terjadi kesalahan koneksi.");
  }
}

window.onload = showQuestion;
