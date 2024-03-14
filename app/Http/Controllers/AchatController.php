<?php

namespace App\Http\Controllers;

use App\Models\Achat;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AchatController extends Controller
{
    public function index()
    {

    
        $achats=Achat::all();
        return Inertia::render('Achat/All',[
            'achats' => $achats,
        ]);
    } 
    public function edit(): void
    {
       
    }

    public function update():void
    {
    }   
}