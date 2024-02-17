<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticlesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        /*$articles = DB::table('articles')
                    ->select('articles.*')
                    ->orderBy('id','ASC')
                    ->get();*/
        $articles = Article::all();
        return view('articles')->with('articles',$articles);
    }
    
    public function index2()
    {
        return view('createarticles');
    }
    
    public function create(Request $request)
    {
        $request->validate([
            'title' => 'string|min:5',
            'content' => 'string|min:10',
            'author' => 'string|min:5',
            'category' => 'string|min:3'
        ]);

        $article = new Article();
        $article->title = $request-> title;
        $article->content = $request-> content;
        $article->author = $request->author; 
        $article->category = $request->category;   
        $article->save();


        return redirect()->route('articles')->with($message='Mensaje','El registro ha sido ingresado de forma exitosa.');
    }

    public function edit($id)
    {
        $article = Article::find($id);
        return view('editarticles')->with('articles',$article);
    }

    public function update(Request $request, $id)
    {
        $article = Article::find($id);
        $request->validate([
            'title' => 'string|min:5',
            'content' => 'string|min:10',
            'author' => 'string|min:5',
            'category' => 'string|min:3'
        ]);

        $article->title = $request-> title;
        $article->content = $request-> content;
        $article->author = $request->author; 
        $article->category = $request->category;  
        $article->save();

        return redirect()->route('articles')->with($message='Mensaje','El registro ha sido actualizado de forma exitosa.');
    }

    public function delete($id)
    {
        //$article = Article::find($id);
        Article::destroy($id);
        return redirect()->route('articles');
    }
}


