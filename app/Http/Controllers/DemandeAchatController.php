<?php

namespace App\Http\Controllers;

use App\Models\DemandeAchat;
use App\Models\Fournisseur;
use GuzzleHttp\Psr7\Response;
use Illuminate\Auth\Access\Response as AccessResponse;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response as InertiaResponse;
use Inertia\Ssr\Response as SsrResponse;

class DemandeAchatController extends Controller
{
    //
    public function index()
    {

    
        $demandeachats=DemandeAchat::all();
        return Inertia::render('DemandeAchat/All',[
            'demandeachats' => $demandeachats,
        ]);
    } 
    public function edit(DemandeAchat $demandeachat): InertiaResponse
    {
       return Inertia::render('DemandeAchat/Edit',[
            'demandeachat'=> $demandeachat
       ]);
    }

    public function update():void
    {
    }   
}
