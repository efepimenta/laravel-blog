<?php

namespace App\Http\Controllers;

use App\Http\Requests;

class BlogController extends Controller
{

    public function index()
    {
        return view('blog.index', ['posts' => $this->meusPosts()]);
    }

    private function meusPosts($id = null)
    {
        $posts = [
            0 => ['title' => 'Meu primeiro Post', 'content' => 'Aqui tem muito mais texto do que parece, muitas letras'],
            1 => ['title' => 'Como blogar um blog', 'content' => 'Primeiro crie um blog, em seguida escreva coisas úteis no seu blog, depois vai ver futebol'],
            2 => ['title' => 'Por que blogar?', 'content' => 'Siceramente, não sei...'],
            3 => ['title' => 'Parei de blogar!', 'content' => 'Agora eu só posto!']
        ];
        if (is_null($id)) {
            return $posts;
        }
        if ($id > count($posts) - 1) {
            return $posts[0];
        }
        return $posts[$id];
    }

    public function post($id)
    {
        return view('blog.post', ['post' => $this->meusPosts($id)]);
    }
}
