<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class DatabaseSeeder extends Seeder
{

    public function run(): void
    {
        $int= mt_rand(1262055681,1262055681);
        $int2= mt_rand(1262055681,1262055681);
        $string = date("Y-m-d",$int);
        $string2 = date("Y-m-d",$int2);
        DB::table('zadania')->insert([
            'nazwa_zadania' =>'Zadanie '.random_int(1,10),
            'czy_zakonczone'=> random_int(0,1),
            'data_dodania' => $string,
            'data_zakonczenia' => $string2,
            'opis_zadania' => Str::random(rand(1,35)).' '.Str::random(rand(1,35)).' '.Str::random(rand(1,35)).' '.Str::random(rand(1,35)).' '.Str::random(rand(1,35)).' '.Str::random(rand(1,35)).' '.Str::random(rand(1,35)).' '.Str::random(rand(1,35))
        ]);
    }
}
