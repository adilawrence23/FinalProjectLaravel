<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class FollowsController extends Controller
{
    public function store(User $user)
    {
        
        //have the auth'd user follow teh given user
        if(auth()->user()->following($user)){
            auth()
            ->user()
            ->unfollow($user);
        }else{
            auth()
            ->user()
            ->follow($user);
        }
        

        return back();
    }
}
