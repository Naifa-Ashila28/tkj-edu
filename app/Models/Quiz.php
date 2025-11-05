<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;

    // tambahkan kolom 'jurusan' agar bisa disimpan dan diambil
    protected $fillable = ['title', 'description', 'jurusan'];

    public function questions()
    {
        return $this->hasMany(Question::class);
    }
}
