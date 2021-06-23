<?php

namespace App\Http\Controllers;

use App\Post;
//FormRequest
use App\User;
//Servicios
use App\Company;
//Models 
use Illuminate\Http\Request;
use App\Http\Services\PostService;
use App\Http\Requests\StorePostRequest;

class PostController extends Controller
{

    public function wallPost() {

        $post = Post::all()->load('postable');
        
        return response()->json([
            'data' => $post,
        ],200);
    }

    public function read() {
        
        $post = Post::all()->load('user.personal');

        return response()->json([
            'status' => 'ok',
            'data' => $post,
        ],200);
    }
    
    public function store( PostService $service , StorePostRequest $request ) {
        
        $post = $service->storePost($request);

        return response()->json([
            'message' => 'El post a sido creado correctamente',
            'data' => $post,
        ],200);
    }

    
    public function update(PostService $service , Post $post , StorePostRequest $request ) 
    {
        $service->updatePost($post , $request);

        return response()->json([
            'message' => 'El post a sido actualizado correctamente',
            'post' => $post,
        ],200);
    }

    public function delete(Post $post) {

        $post->delete();

        return response()->json([
            'message' => 'El post a sido borrado correctamente',
        ]);        
    }

    public function profilePost(Post $post) {

        $post = $post->load('user');

        return response()->json([
            'post' => $post, 
        ]);

    }

    public function postMorph(Request $request,User $user)
    {
        $user->posts()->create($request->all());
    }

    
}
