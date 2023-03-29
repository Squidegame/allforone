<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class ArticleController extends Controller
{
    public function articles(){
    	echo"affichage des articles"; 
    }
    public function article($id){
    	echo"affichage de l'article ".$id; 
    }   
    use App\Article;
    public function newArticle(){
            $newArticle = new Article();
            $newArticle->name="stylo";
            $newArticle->description="stylo à bille de haute qualité....";
            $newArticle->save();
        } 
    
        public function listArticles(){
    	
            $articles = Article::all();
            //print_r($articles);
            return view('articles', ['articles'=>$articles]);
        } 
        public function create(){
            return view('article.create');
        }
        public function store(Request $request){
            $article = new Article();
            $article->name = $request->input('nom');
            $article->description = $request->input('description');
            $article->save();
            return redirect('articles');

        }
        public function index(){
            $listArticle = Article::all();
            return view('article.index', ['articles' => $listArticle]);
        }
        public function edit($id){
            $article = Article::find($id);
            return view('article.edit', ['article'=>$article]);
        }
        public function update(Request $request, $id){
            $article = Article::find($id);
            $article->name = $request->input('nom');
            $article->description = $request->input('description');
            $article->save();
            return redirect('articles');    	
        }
    
    
    
}
