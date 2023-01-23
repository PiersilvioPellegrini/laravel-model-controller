<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// importo il modello che voglio usare per restituire i dati all'interno del database
use App\Models\Movie;

class IndexController extends Controller{
    
    function index(){
        // assegno alla variabile il contenuto della request al database
        $movies= Movie::all();
       
        return view('index',[
            // la chiave movies contine il contenuto della request
            // utilizzo movies per fare il foreach
                         "movies"=> $movies
        ]);
    }
}
