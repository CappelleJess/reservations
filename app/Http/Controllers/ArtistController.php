<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use Illuminate\Http\Request;

class ArtistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        $artists = Artist::all();

        //dd($artists);

        return view('artist.index', [
            'artists' => $artists,
        ]);
    }
    /*
    * Show the form for creating a new ressource.
    */ 
    public function create()
    {
        //
    }

    public function show(string $id)
        {
            //Récupérer les données depuis le modèle (database)
            $artist = Artist::find($id);
            
            //Envoyer les données à la vue (template)
            return view('artist.show', [
                'artists'=> $artist,
            ]);
        }

}

