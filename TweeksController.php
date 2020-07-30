<?php

namespace App\Http\Controllers;

use App\Tweek;
use Illuminate\Http\Request;

class TweeksController extends Controller
{
    public function index()
    {
        // $tweeks = Tweek::latest()->gets();

        return view('tweeks.index',[
            // 'tweeks'=> $tweeks
            'tweeks'=> auth()->user()->timeline()
        ]);
    }
    public function store()
    {
        $attributes = request()->validate(['body' => 'required|max:255']);
        Tweek::create([
            'user_id'=>auth()->id(),
            'body'=>$attributes['body']
        ]);

        return redirect('/home');
    }
}