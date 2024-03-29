<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFilmRequest;
use App\Http\Requests\SearchFilmRequest;
use App\Http\Requests\UpdateFilmRequest;
use Illuminate\Http\Request;
use App\Models\Film;
use Illuminate\Support\Facades\Auth;


class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $films = Film::all();

        return view('films.index')->with('films', $films)->with('likes', Auth::user()->films);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFilmRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Film $film)
    {
        return view ('film.show')->with('film', $film);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Film $film)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFilmRequest $request, Film $film)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Film $film)
    {
        //
    }

    public function putFav($filmid) {

        Auth::user()->films()->attach($filmid);

        return back();
    }

    public function favourite() {
        $user = session()->get('user');

        $favoruiteFilms = Auth::user()->films;

        return view('films.favourite')->with('favouriteFilms', $favoruiteFilms);
    }


    public function search(SearchFilmRequest $request) {
        $wereWeComeFrom =  url()->previous();

        if (str_contains($wereWeComeFrom, "favourite")) {
            $search = $request->input('search');

            $resultados = Auth::user()->films()->where('title', 'like', '%' . $search . '%')->get();

            if (count($resultados) == 1) {
                return view ('films.show')->with('film', $resultados[0]); //Primera posicion por que no sera una coleccion
            };

            return view('films.favourite')->with('favouriteFilms', $resultados);;
        } else {

            $search = $request->input('search');

            $resultados = Film::where('title', 'like', '%' . $search . '%')->get();

            if (count($resultados) == 1) {
                return view ('films.show')->with('film', $resultados[0]); //Primera posicion por que no sera una coleccion
            };

            return view('films.index')->with('films', $resultados)->with('likes', Auth::user()->films);
        }

    }
}
