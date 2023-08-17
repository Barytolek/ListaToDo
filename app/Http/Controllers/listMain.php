<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Input\Input;
class listMain extends Controller
{
    public function getData(){

        $get = DB::table('zadania')->get();

        return view('index', ['data' => $get]);
    }
    public function deleteObject(Request $request){
        $id=$request->input('deleteButton');
        DB::table('zadania')->where('id_zadania',$id)->delete();
        return redirect("/usuwanie");
    }

    public function addObject(Request $request){
        $nazwa=$request->input('title');
        $tytul=$request->input('description');
        $deadline=$request->input('deadline');
        $data_dodania=date('Y-m-d');
        if(isset($nazwa) && isset($tytul) && isset($deadline) && isset($data_dodania)){
            DB::table('zadania')->insert(['nazwa_zadania'=>$nazwa,'opis_zadania'=>$tytul,'data_dodania'=>$data_dodania,'data_zakonczenia'=>$deadline,'czy_zakonczone'=>FALSE]);
        return redirect("/");
        }
        else
            return redirect('/formError');
    }
}
