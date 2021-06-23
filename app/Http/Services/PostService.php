<?php 

namespace App\Http\Services; 

use App\Http\Requests\StorePostRequest;
use Illuminate\Support\Facades\Auth;

use App\Post;

class PostService {

    public function storePost( StorePostRequest $request )
    {
        $validated = $request->validated();

        $validated['user_id'] = auth::User()->id;

        return Post::create($validated);
    }

    public function updatePost( Post $post , StorePostRequest $request ) 
    {
       
       $post->update($request->all());

    }
}