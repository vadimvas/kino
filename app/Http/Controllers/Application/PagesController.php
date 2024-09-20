<?php

namespace App\Http\Controllers\Application;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\Categorie;

class PagesController extends Controller
{
    public function home(){
        $movies=Movie::all();
        $categories=Categorie::all();
        return view('pages.home',['movies'=>$movies ,'categories'=>$categories]);
    }
    public function best(){
        $movies=Movie::where('rating','>',8)->orderBy('rating','desc')->get();
       
        $categories=Categorie::all();
        return view('pages.list',['movies'=>$movies,'categories'=>$categories]);
    }
    public function horrors(){
        $movies=Movie::where('category_id',1)->get(); 
        $categories=Categorie::all();
        return view('pages.list',['movies'=>$movies,'categories'=>$categories]);
    }
    public function fighters(){
        $movies=Movie::where('category_id',2)->get(); 
        $categories=Categorie::all();
        return view('pages.list',['movies'=>$movies,'categories'=>$categories]);
    }
    public function comedies(){
        $movies=Movie::where('category_id',3)->get(); 
        $categories=Categorie::all();
        return view('pages.list',['movies'=>$movies,'categories'=>$categories]);
    }
    public function fantastica(){
        $movies=Movie::where('category_id',4)->get(); 
        $categories=Categorie::all();
        return view('pages.list',['movies'=>$movies,'categories'=>$categories]);
    }
    public function thriller(){
        $movies=Movie::where('category_id',5)->get(); 
        $categories=Categorie::all();
        return view('pages.list',['movies'=>$movies,'categories'=>$categories]);
    }
    public function drama(){
        $movies=Movie::where('category_id',6)->get(); 
        $categories=Categorie::all();
        return view('pages.list',['movies'=>$movies,'categories'=>$categories]);
    }
    public function adventures(){
        $movies=Movie::where('category_id',7)->get(); 
        $categories=Categorie::all();
        return view('pages.list',['movies'=>$movies,'categories'=>$categories]);
    }
    public function crime(){
        $movies=Movie::where('category_id',8)->get(); 
        $categories=Categorie::all();
        return view('pages.list',['movies'=>$movies,'categories'=>$categories]);
    }
    public function fantasy(){
        $movies=Movie::where('category_id',9)->get(); 
        $categories=Categorie::all();
        return view('pages.list',['movies'=>$movies,'categories'=>$categories]);
    }
    public function military(){
        $movies=Movie::where('category_id',10)->get(); 
        $categories=Categorie::all();
        return view('pages.list',['movies'=>$movies,'categories'=>$categories]);
    }
    
      


       

    public function showMovie($id){
        $movie=Movie::find($id);
        $categories=Categorie::all();
       
        
        return view('pages.movieID',['movie'=>$movie,'categories'=>$categories]);
    }
    public function register(){
        $categories=Categorie::all();
        return view('pages.register',['categories'=>$categories]);
    }
    public function login(){
        $categories=Categorie::all();
        return view('pages.login',['categories'=>$categories]);
    }
    public function addmovie(){
        $categories=Categorie::all();
        return view('pages.addmovie',['categories'=>$categories]);
    }
}
