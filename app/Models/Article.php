<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
namespace App;

class Article extends Model
{
    use HasFactory;

    public function newArticle(){
    	$newArticle = new Article();
    	$newArticle->name="stylo";
    	$newArticle->description="stylo à bille de haute qualité....";
    	$newArticle->save();
    } 

    public function listArticles(){
    	
    	$articles = Article::all();
        print_r($articles);
    } 

}

