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
            'description' => 'Uji pemahaman dasar tentang jaringan komputer',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('questions')->insert([
            [
                'quiz_id' => $tkjId,
                'question_text' => 'Apa kepanjangan dari TKJ?',
                'option_a' => 'Teknik Komputer Jaringan',
                'option_b' => 'Teknik Kendaraan Jaringan',
                'option_c' => 'Teknologi Komunikasi Jaringan',
                'option_d' => 'Teknik Komunikasi Jaringan',
                'correct_answer' => 'A',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'quiz_id' => $tkjId,
                'question_text' => 'Perangkat yang berfungsi menghubungkan dua jaringan disebut?',
                'option_a' => 'Router',
                'option_b' => 'Switch',
                'option_c' => 'Hub',
                'option_d' => 'Repeater',
                'correct_answer' => 'A',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'quiz_id' => $tkjId,
                'question_text' => 'Kabel UTP memiliki berapa pasang kabel?',
                'option_a' => '2',
                'option_b' => '4',
                'option_c' => '6',
                'option_d' => '8',
                'correct_answer' => 'B',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'quiz_id' => $tkjId,
                'question_text' => 'Protokol yang digunakan untuk mengirim email adalah?',
                'option_a' => 'HTTP',
                'option_b' => 'SMTP',
                'option_c' => 'FTP',
                'option_d' => 'DNS',
                'correct_answer' => 'B',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'quiz_id' => $tkjId,
                'question_text' => 'Alamat IP versi 4 memiliki panjang?',
                'option_a' => '8 bit',
                'option_b' => '16 bit',
                'option_c' => '32 bit',
                'option_d' => '64 bit',
                'correct_answer' => 'C',
                'created_at' => now(),
                'updated_at' => now(),
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
                'question_text' => 'Apa kepanjangan dari RPL?',
                'option_a' => 'Rekayasa Perangkat Lunak',
                'option_b' => 'Rancang Perangkat Lunak',
                'option_c' => 'Rekayasa Program Lanjutan',
                'option_d' => 'Rancang Program Lanjutan',
                'correct_answer' => 'A',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'quiz_id' => $rplId,
                'question_text' => 'Bahasa pemrograman yang digunakan untuk membuat website adalah?',
                'option_a' => 'Python',
                'option_b' => 'C++',
                'option_c' => 'PHP',
                'option_d' => 'Java',
                'correct_answer' => 'C',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'quiz_id' => $rplId,
                'question_text' => 'IDE yang sering digunakan untuk coding PHP adalah?',
                'option_a' => 'NetBeans',
                'option_b' => 'Eclipse',
                'option_c' => 'Visual Studio Code',
                'option_d' => 'Dev C++',
                'correct_answer' => 'C',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'quiz_id' => $rplId,
                'question_text' => 'Framework PHP yang populer digunakan adalah?',
                'option_a' => 'Laravel',
                'option_b' => 'Django',
                'option_c' => 'React',
                'option_d' => 'Spring Boot',
                'correct_answer' => 'A',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'quiz_id' => $rplId,
                'question_text' => 'Database yang sering digunakan dalam pengembangan web?',
                'option_a' => 'MySQL',
                'option_b' => 'Photoshop',
                'option_c' => 'Unity',
                'option_d' => 'Excel',
                'correct_answer' => 'A',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
