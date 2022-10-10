<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Commentaires;
use App\Models\Articles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticlesController extends Controller
{
    public function getArticles(Request $request){
        $articles = Articles::where('actif', '=', 1);
        $q = request()->input('q');
        if ($request->filled('categories')) {
            $categories = $request->categories;
            $articles->whereHas('categories', function ($q) use ($categories) {

                $q->where('categories_id', '=', $categories);
            });
        }
        $actu = Articles::where('actu', '=', 1)->get();
        $categories = Categories::all();
        return view('index', [
            'articles' => $articles->paginate(8),  //a la place d'un get me demande pas pourquoi!
            'categories' => $categories,
            'q' => $q,
            'actu' => $actu
        ]);
    }
    static public function getCountArt(){    
   $articles = Articles::all();
   $ArtCount= count($articles);
   $categories = Categories::all();
   $catCount= count($categories);
   $commentaires = Commentaires::where('valid','0')->get();
    $comCount= count($commentaires);
   return(compact('artCount','comCount','catCount'));
    }
    


    
        
       
        


    public function getOneDetails($id){
        $article = Articles::find($id);
       $articles = Articles::where('actif', '=', 1)->inRandomOrder()->limit(3)->get();
     
        $comments = Commentaires::where('product_id', $id)->where('valid','1')->inRandomOrder()->limit(2)->get();
        return view('detail', [
            'article' => $article,
            'articles' => $articles,
            'comments' => $comments,
        ]);
    }

    public function addComm(Request $request, $id)
    {
        $this->validate($request, [
            'contenu' => 'required|min:5|',
        ]);

        $comments = new Commentaires();
        
        $article = Articles::where('id', '=', $id)->get();
        $article = Articles::find($id);
        $comments->content = $request->contenu;
        $comments->user_id = Auth::user()->id;
        $comments->article_id = $id;
        $comments->save();
        $article->update();
        return redirect()->route('getDetails', ['id' => $id]);
    }
}  
