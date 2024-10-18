<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create(Request $resquest){
        $new_post = [
            'tittle' => 'Meu primeiro Post',
            'content'=> 'Conteúdo qualquer',
            'author' => 'Alessandro'
        ];

        // Forma mais convecional de criar um reguitro no banco

        $post = new Post($new_post);
        $post -> save();
        dd($post);

    }

    public function read(Request $r) {

        $post = new Post();

        $posts = $post->all();

        dd($posts);

    }
}
