<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class listMain extends Controller
{
    public function getData(){

        $get = DB::table('zadania')->get();

        return view('index', ['data' => $get]);
    }
}
