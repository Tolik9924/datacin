<?php

namespace App\Http\Controllers;
use App;
use App\Category;
use App\Film;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(Request $request){
        //dd($request->all());
        $filmsQuery = Film::query();
        
    foreach(['new', 'hit', 'recommend'] as $field){
        if($request->has($field)){
             $filmsQuery->where($field,1);
        }
    }
        $films = Film::paginate(12);
    	return view('index', compact('films'));
    }

     public function categories(){
     	$categories = Category::get();
    	return view('categories',compact('categories'));
    }

     public function category($code){
     		$category = Category::where('code',$code)->first();
     		return view('category', compact('category'));
     }

     public function film($film = null,$code){
        $filmObject = Film::where('code',$code)->first();
    	return view('film', ['film' => $film], compact('filmObject'));
    }

    public function changeLocale($locale){
        $availableLocales = ['ukr', 'en'];
        if(!in_array($locale, $availableLocales)){
            $locale = config('app.locale');
        }

        session(['locale' => $locale]);
        App::setLocale($locale);
        return redirect()->back();
    }
}
