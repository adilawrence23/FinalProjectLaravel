<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getAvatarAttribute()
    {
        return "https://i.pravatar.cc/40?u=" . $this->email;
    }

    public function timeline()
    {
        //include all of the users tweeks
        //as well as the tweeks of everyone
        //he/she follows...in descending order by date


        $friends = $this->follows()->pluck('id');
        // $ids->push($this->id);

        return Tweek::whereIn('user_id',$friends)->orWhere('user_id',$this->id)->latest()->get();
        // return Tweek::where('user_id',$this->id)->latest()->get();
        // return Tweek::latest()->get();
    }
    public function follow(User $user)
    {
        return $this->follows()->save($user);
    }

    public function tweeks()
    {
        return $this->hasMany(Tweek::class);
    }

    public function follows()
    {
        return $this->belongsToMany(User::class,'follows','user_id','following_user_id');
    }
}
