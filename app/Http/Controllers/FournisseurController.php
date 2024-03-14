<?php

namespace App\Http\Controllers;

use App\Models\Fournisseur;
use GuzzleHttp\Psr7\Response;
use Illuminate\Auth\Access\Response as AccessResponse;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response as InertiaResponse;
use Inertia\Ssr\Response as SsrResponse;


class FournisseurController extends Controller
 
{
    public function index()
    {

    
        $fournisseurs=Fournisseur::all();
        return Inertia::render('Fournisseur/All',[
            'fournisseurs' => $fournisseurs
        ]);
    } 
    public function edit(Fournisseur $fournisseur): InertiaResponse
    {
       return Inertia::render('Fournisseur/Edit',[
            'fournisseur'=> $fournisseur
       ]);
    }

    public function update(Fournisseur $fournisseur, Request $request):void
    {
        $fournisseur->update([
            'nom'=>$request->nom,
            'email'=>$request->email,
            'telephone'=>$request->telephone,
        ]);
    }

}
