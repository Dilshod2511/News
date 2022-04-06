<?php

namespace App\Http\Controllers;

use App\Models\Sport;
use Illuminate\Http\Request;

class SportController extends Controller
{
    public function index()
    {
       $sports=Sport::orderByDesc('created_at')->get();
       return view('news.sport',compact('sports'));
    }

    public  function store($id)
    {
       $users=Sport::find($id);
        $us=Sport::all();
       return view('news.show',compact('users','us'));
    }
}
