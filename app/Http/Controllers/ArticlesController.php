<?php

namespace App\Http\Controllers;

use App\Article;
use Carbon\Carbon;
use App\Http\Requests\ArticleRequest;
use App\Http\Controllers\Controller;

class ArticlesController extends Controller
{
    public function index()
    {
        // Recupera todos os artigos e joga na variável.
        $articles = Article::latest('published_at')->published()->get();

        return view('articles.index', compact('articles'));
    }

    public function show($id)
    {
        // Recupera o artigo referente ao id passado e joga para a view.
        $article = Article::findOrFail($id);

        return view('articles.show', compact('article'));
    }

    public function create()
    {
        // Exibe a pagina de criaçao de artigo.
        return view('articles.create');
    }

    public function store(ArticleRequest $request)
    {
        // Recebe os dados do formulario e tenta fazer a inclusao no banco de dados, se passar pelas validaçoes.
        Article::create($request->all());
        // Retorna para a pagina inicial de artigos.
        return redirect('articles');
    }

    public function edit($id)
    {
        // Faz a busca pelo id do artigo passado e armazena o resultado na variavel.
        $article = Article::findOrFail($id);
        // Retorna a view, passando como parametro o artigo encontrado para ediçao.
        return view('articles.edit', compact('article'));
    }

    public function update($id, ArticleRequest $request)
    {
        $article = Article::findOrFail($id);
        $article->update($request->all());
        return redirect('articles');
    }
}
