<?php

namespace App\Http\Controllers\Admin;

use App\Film;
use App\Category;
use App\Http\Requests\FilmRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $films = Film::paginate(6);
        return view('auth.films.index', compact('films'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $categories = Category::get(); 
         return view('auth.films.form', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FilmRequest $request)
    {
        $params = $request->all();

        foreach(['new', 'hit', 'recommend'] as $fieldName){
            if(isset($params[$fieldName])){
                $params[$fieldName] = 1;
            }
        }


        Film::create($params);
        return redirect()->route('films.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function show(Film $film)
    {
        return view('auth.films.show', compact('film'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function edit(Film $film)
    {
         $categories = Category::get(); 
         return view('auth.films.form', compact( 'film' ,'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function update(FilmRequest $request, Film $film)
    {
         $params = $request->all();

        foreach(['new', 'hit', 'recommend'] as $fieldName){
            if(isset($params[$fieldName])){
                $params[$fieldName] = 1;
            }else{
                 $params[$fieldName] = 0;
            }
        }

        $film->update($params);
        return redirect()->route('films.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function destroy(Film $film)
    {
        $film->delete();
        return redirect()->route('films.index');
    }
}
