<?php

namespace App\Http\Controllers\Application;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\User\RegisterRequest;
use App\Http\Requests\User\LoginRequest;
use App\Http\Requests\AddmovieRequest;
use App\Models\User;
use App\Models\Movie;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class FormController extends Controller
{
    public function registerCheck(RegisterRequest $request){
        
        $data = $request->validated();
        $data['password'] = Hash::make($data['password']);
        User::create($data);
        return redirect()->route('login');
       
        
    }
    public function loginCheck(LoginRequest $request){
        Auth::attempt($request->validated());
        return redirect()->route('home');
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('home');
    }
    public function addmovieCheck(AddmovieRequest $request){
        $data=$request->validated();
        
        Movie::create($request->validated());
        return redirect()->route('home');
    }
    public function rating(Request $request){
        $movieId=$request->movieId;
        $newrating=$request->rating;
        $movie=Movie::find($movieId);
        $rating=$movie->rating;

        if(!empty( $rating)){
            $rating = round(($rating+$newrating)/2,1);
        }else{
            $rating = $newrating;
        }
        $movie->rating = $rating;
        $movie->save();
       
       
        return redirect()->route('home');
    }
}
        
    
        
    
        
