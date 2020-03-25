<?php

namespace App\Http\Controllers;

use App\Article;

use Illuminate\Http\Request;

class ArticlesController extends Controller
{

	public function index()
	{
        $article = Article::latest()->get();
		return view('articles.index', ['article' => $article ]);
	}

    public function show(Article $article)
    {
		// $article = Article::findOrFail($id);
		// return view('articles.show', ['article' => $article]);
		
		return view('articles.show', compact('article'));

    }

    public function create()
    {
    	return view('articles.create');
    }

    public function store()
    {
    	// $validatedAtributes = request()->validate([
    	// 	'title' => ['required', 'min:3'],
    	// 	'excerpt' => 'required',
    	// 	'body' => 'required'
    	// ]);

		// return $validatedAtributes;
    	// $article = new Article();

    	// $article->title = request('title');
    	// $article->excerpt = request('excerpt');
    	// $article->body = request('body');

		// $article->save();
		
		Article::create($this->validateArticle());

    	return redirect('/articles');
    }

    public function edit(Article $article)
    {
    	// $article = Article::findOrFail($id);
    	return view('articles.edit', compact('article'));
    }

    public function update(Article $article)
    {

    	// request()->validate([
    	// 	'title' => ['required', 'min:3'],
    	// 	'excerpt' => 'required',
    	// 	'body' => 'required'
    	// ]);

    	// $article = Article::find($id);

    	// $article->title = request('title');
    	// $article->excerpt = request('excerpt');
    	// $article->body = request('body');

		// $article->save();
		
		$article->update($this->validateArticle());

    	return redirect('/articles');
    }

    public function destroy()
    {

	}
	
	public function validateArticle()
	{
		return request()->validate([
			'title' => 'required',
			'excerpt' => 'required',
			'body' => 'required'
		]);
	}
}
