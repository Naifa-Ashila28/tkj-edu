<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('quiz_results', function (Blueprint $table) {
            if (!Schema::hasColumn('quiz_results', 'name')) {
                $table->string('name')->nullable();
            }
            if (!Schema::hasColumn('quiz_results', 'quiz_id')) {
                $table->unsignedBigInteger('quiz_id')->nullable();
            }
            if (!Schema::hasColumn('quiz_results', 'jurusan')) {
                $table->string('jurusan')->nullable();
            }
            if (!Schema::hasColumn('quiz_results', 'score')) {
                $table->integer('score')->nullable();
            }
        });
    }

    public function down()
    {
        Schema::table('quiz_results', function (Blueprint $table) {
            $table->dropColumn(['name', 'quiz_id', 'jurusan', 'score']);
        });
    }
};
