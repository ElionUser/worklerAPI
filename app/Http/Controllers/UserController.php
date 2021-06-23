<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Models
use App\User;
use App\Formation;

class UserController extends Controller
{
    public function index(User $user) 
    {
        

        // return Formation::find(1)->load('languages','experiences.company');
    }

    public function profileUser(User $user) 
    {
        $userData = $user->load(
            'formations.languages',
            'formations.experiences',
            'formations.experiences.company',
            'posts'
        );

        response()->json([
            'data' => $userData,
        ],200);
    }

    public function edit(User $user) 
    {

        

        $userData = $user->load(
            'formations.languages',
            'formations.experiences',
            'formations.experiences.company',
            'posts'
        );

        response()->json([
            'data' => $userData,
        ],200);
    }
}
