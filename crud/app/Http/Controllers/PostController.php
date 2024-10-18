<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $post = Post::all();
 
        return $post;
    }

    /**
     * Show the form for creating a new resource.
     */

    public function create()
    {
        //No  futuro vai apenas realizar a leitura dos dados.

        $new_post = [
            'tittle' => 'Meu primeiro Post',
            'content'=> 'Conteúdo qualquer',
            'author' => 'Alessandro'
        ];

        // Forma mais convecional de criar um reguitro no banco

        $post = new Post($new_post);
        $post -> save();

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // No futuro, receberá um post com um novo recurso. 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //

        $post = new Post();

        $post = $post->find($id);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //

        $posts = Post::find($id)-> update([
            'author' => 'Desconhecido'
        ]);
        return $posts;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //

        $post = Post::find($id)-> delete();

        return $post;
    }
}
