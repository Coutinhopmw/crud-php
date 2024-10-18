<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

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

        $post = $post->find(1);

        dd($post);

    }

    public function all(Request $r){
        $posts = Post::all();

        return $posts;
    }

    public function update(Request $request){
        
        // Atualização de dados de um registro específico
        // $post = Post::find(1);
        // $post->tittle = 'Meu segundo post';
        // $post->save();

        // Atualização de vários registros ao mesmo tempo 
        $posts = Post::where('id','>',0)-> update([
            'author' => 'Desconhecido'
        ]);
        return $posts;
    }

    public function delete(Request $request){
        
        $post = Post::find(2);

        if ($post) {
            return $post-> delete();
        }

        return 'Não existe post com esse id';
    }


}
