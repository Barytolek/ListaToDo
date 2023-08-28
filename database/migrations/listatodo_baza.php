<?php
/*
 *nazwa bazy danych: listatodo
 * wywolanie: php artisan migrate
 * */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('zadania', function (Blueprint $table) {
            $table->id("id_zadania");
            $table->string("nazwa_zadania");
            $table->string("opis_zadania");
            $table->date("data_dodania");
            $table->date("data_zakonczenia");
            $table->boolean("czy_zakonczone");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('zadania');
    }
};
