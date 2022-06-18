<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index(User $user){
        return view('user.profile.index', [
            'title' => $user->username,
            'user' => $user
        ]);
    }

    public function userArticles(User $user){
        return view('user.profile.index', [
            'title' => $user->username . ' Articles',
            'user' => $user,
            'articles' => $user->article,
        ]);
    }

    public function userVotes(User $user){
        return view('user.profile.index', [
            'title' => 'Votes',
            'user' => $user
        ]);
    }

    public function update(User $user){
        if(auth()->user()->username == $user->username){
            return "Edit Profile";
        } else {
            return abort(403, 'Forbidden: You cannot edit other profile!');
        }
        
    }
}
