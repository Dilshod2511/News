<?php

namespace App\Http\Controllers;

use App\Models\Dunyo;
use Illuminate\Http\Request;

class DunyoController extends Controller
{
    public function index()
    {
//        dd("aa");
//        $duny=Dunyo::all();
//   return view('news.index',compact('dunyos'));
    }
    public function store($id)
    {
        $users=Dunyo::find($id);

        $us=Dunyo::all();

                      $string=$users->description;
                      $des= str_ireplace(".",".<br><br>",$string);


        return view('news.show',compact('users','us'));
    }
}
