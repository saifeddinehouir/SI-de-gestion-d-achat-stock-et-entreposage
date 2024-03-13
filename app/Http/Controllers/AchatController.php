<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class AchatController extends Controller
{
    public function index(){
        // Retrieve all records from the Achat model
        /*$achats = Achat::all();
        
        // Render an Inertia.js component named 'Achats/All'
        // and pass the retrieved 'achats' data to the component
        return Inertia::render(component: 'Achats/All', [
            'achats'=> $achats
        ]);*/
    }
}