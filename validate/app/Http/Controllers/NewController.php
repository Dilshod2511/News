<?php

namespace App\Http\Controllers;

use App\Models\Dunyo;
use App\Models\Sport;
use Illuminate\Http\Request;

class NewController extends Controller
{
    public function index()
    {
        $dunyos=Dunyo::orderByDesc('created_at')->get();
        $sports=Sport::orderByDesc('created_at')->get();
        return view('news.index',compact('sports','dunyos'));
    }
}
