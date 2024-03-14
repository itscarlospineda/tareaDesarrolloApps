<?php
/*CARLOS ANDRES PINEDA (3210359) - TAREA 6: CREACION DE MIDDLEWARE*/
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticlesApiController extends Controller
{
    public function index()
    {
        return response()->json([
            'success' => true,
            'data' => Article::All(),
        ]);
    }

    public function show($id)
    {
        $article = Article::find($id);

        if ($article) {

            return response()->json([
            
                'success' => true,
                'data' => $article,
            ]);
        }
        else{

            return response()->json([
                'success' => false,
                'message' => 'Article not found in database.',
            ], 422);
        }
        
    }


    public function store(Request $request)
    {
        $request->validate([
            'title' =>    'string|min:8',
            'content' =>  'string|min:10',
            'author' =>   'string|min:5',
            'category' => 'string|min:5'
        ]);

        $article = new Article();
        $article->title = $request-> title;
        $article->content = $request-> content;
        $article->author = $request->author; 
        $article->category = $request->category;  
        $article->save();

        return response()->json([
            'success' => true,
            'message' => 'Article saved correctly.',
        ]);
    }


    public function destroy($id)
    {
        $article = Article::find($id);

        if ($article) {

            $article->delete();

            return response()->json([
                'success' => true,
                'message' => 'Article deleted successfully.',
            ]);

        }
        else{

            return response()->json([
                'success' => false,
                'message' => 'Article not found in database.',
            ], 422);
        }
    }


    public function edit(Request $request)
    {
        $article = Article::find($request->id);

        $request->validate([
            'title' =>    'string|min:8',
            'content' =>  'string|min:10',
            'author' =>   'string|min:5',
            'category' => 'string|min:5'
        ]);

        $article->title = $request-> title;
        $article->content = $request-> content;
        $article->author = $request->author; 
        $article->category = $request->category;  
        $article->save();

        return response()->json([
            'success' => true,
            'message' => 'Article updated correctly.',
        ]);
    }
}