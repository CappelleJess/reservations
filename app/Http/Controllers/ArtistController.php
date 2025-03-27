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
}
