<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuizSeeder extends Seeder
{
    public function run(): void
    {
        // --- Kuis TKJ ---
        $tkjId = DB::table('quizzes')->insertGetId([
            'title' => 'Kuis TKJ',
            'description' => 'Uji pemahaman tentang Teknik Komputer dan Jaringan',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('questions')->insert([
            [
                'quiz_id' => $tkjId,
                'jurusan' => 'TKJ',
                'question_text' => 'TKJ itu belajar apa sih?',
                'option_a' => 'Belajar bikin aplikasi dan game.',
                'option_b' => 'Belajar cara nyambungin komputer biar bisa kirim data.',
                'option_c' => 'Belajar melindungi komputer dari serangan hacker.',
                'option_d' => 'Belajar tentang cara simpan data di internet.',
                'correct_answer' => 'B',
            ],
            [
                'quiz_id' => $tkjId,
                'jurusan' => 'TKJ',
                'question_text' => 'Apa yang dimaksud dengan Cloud Computing?',
                'option_a' => 'Jaringan yang nyambungin semua komputer di dunia.',
                'option_b' => 'Cara melindungi komputer dari virus dan hacker.',
                'option_c' => 'Menyimpan dan memakai data atau aplikasi lewat internet (bukan di komputer sendiri).',
                'option_d' => 'Tampilan aplikasi atau website yang kita lihat.',
                'correct_answer' => 'C',
            ],
            [
                'quiz_id' => $tkjId,
                'jurusan' => 'TKJ',
                'question_text' => 'Apa tujuan utama dari Cyber Security?',
                'option_a' => 'Biar gampang kirim-kirim data antar komputer.',
                'option_b' => 'Bikin tempat penyimpanan data di internet.',
                'option_c' => 'Melindungi data kita biar aman dan tidak diintip atau diubah orang lain.',
                'option_d' => 'Mengatur warna dan tulisan di website.',
                'correct_answer' => 'C',
            ],
            [
                'quiz_id' => $tkjId,
                'jurusan' => 'TKJ',
                'question_text' => 'Di presentasi, ada 3 bidang yang dipelajari di TKJ. Yang mana yang BUKAN termasuk?',
                'option_a' => 'Cloud Computing',
                'option_b' => 'Cyber Security',
                'option_c' => 'Networking (Jaringan)',
                'option_d' => 'Bikin Game',
                'correct_answer' => 'D',
            ],
            [
                'quiz_id' => $tkjId,
                'jurusan' => 'TKJ',
                'question_text' => "Apa gunanya 'Network' (Jaringan) yang paling utama?",
                'option_a' => 'Menghubungkan komputer di seluruh dunia biar bisa cari info dan ngobrol.',
                'option_b' => 'Melindungi data dari hacker.',
                'option_c' => 'Mengatur tampilan aplikasi.',
                'option_d' => 'Bikin aplikasi yang berguna buat manusia.',
                'correct_answer' => 'A',
            ],
        ]);

        // --- Kuis RPL ---
        $rplId = DB::table('quizzes')->insertGetId([
            'title' => 'Kuis RPL',
            'description' => 'Tes pengetahuan dasar Rekayasa Perangkat Lunak',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('questions')->insert([
            [
                'quiz_id' => $rplId,
                'jurusan' => 'RPL',
                'question_text' => 'Kalau anak RPL (atau PPLG), mereka belajar apa?',
                'option_a' => 'Belajar cara merawat dan nyambungin komputer.',
                'option_b' => 'Belajar cara merancang dan membuat aplikasi, website, atau game.',
                'option_c' => 'Belajar tentang perasaan orang waktu pakai aplikasi.',
                'option_d' => 'Belajar cara melindungi komputer dari hacker.',
                'correct_answer' => 'B',
            ],
            [
                'quiz_id' => $rplId,
                'jurusan' => 'RPL',
                'question_text' => 'Apa tujuan utama masuk jurusan RPL?',
                'option_a' => 'Jadi ahli yang mengurus penyimpanan data di internet.',
                'option_b' => 'Biar gampang kirim data dan ngobrol.',
                'option_c' => 'Supaya siswa bisa bikin aplikasi atau game yang berguna.',
                'option_d' => 'Melindungi komputer dari serangan hacker.',
                'correct_answer' => 'C',
            ],
            [
                'quiz_id' => $rplId,
                'jurusan' => 'RPL',
                'question_text' => "Di presentasi, apa itu 'UI' (User Interface)?",
                'option_a' => 'Perasaan orang waktu pakai aplikasi (gampang atau susah).',
                'option_b' => 'Tampilan aplikasi yang kita lihat, misalnya tombol, gambar, dan warnanya.',
                'option_c' => 'Kode untuk mengatur warna dan tulisan di website.',
                'option_d' => 'Cara membuat aplikasi dari awal sampai jadi.',
                'correct_answer' => 'B',
            ],
            [
                'quiz_id' => $rplId,
                'jurusan' => 'RPL',
                'question_text' => "Lalu, apa itu 'UX' (User Experience)?",
                'option_a' => 'Tampilan aplikasi (tombol, warna, gambar).',
                'option_b' => 'Kode khusus untuk bikin game.',
                'option_c' => 'Perasaan orang waktu pakai aplikasi (apakah gampang dipakai dan tidak bikin bingung).',
                'option_d' => 'Sistem untuk menjaga keamanan data kita.',
                'correct_answer' => 'C',
            ],
            [
                'quiz_id' => $rplId,
                'jurusan' => 'RPL',
                'question_text' => 'Apa gunanya CSS (yang dibahas di halaman 13)?',
                'option_a' => 'Melindungi website dari hacker.',
                'option_b' => 'Menyimpan data di internet.',
                'option_c' => 'Membuat isi tulisan di website.',
                'option_d' => 'Mengatur tampilan website (seperti warna, ukuran tulisan, dan letak gambar).',
                'correct_answer' => 'D',
            ],
        ]);
    }
}
