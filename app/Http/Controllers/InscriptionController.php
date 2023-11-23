<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chambre;

class InscriptionController extends Controller
{
    
    public function form_ch()
    
    {
        return view('Inscription');
    }
    public function form_ch_traitement(Request $request)
    {
       $request->validate([
        'nom'=>'required',
        'description'=>'required',
        'nom_ch'=>'required',
        'prix'=>'required',
        'lits'=>'required',
        'adultes'=>'required',
        'enfants'=>'required',
        'attributs'=>'required',
        'statut'=>'required',
       ]);
       $chambre=new Chambre();
       $chambre->nom =$request->nom;
       $chambre->description =$request->prenom;
       $chambre->nom_ch =$request->ville;
       $chambre->prix =$request->ville;
       $chambre->lits =$request->role;
       $chambre->adultes =$request->role;
       $chambre->enfants =$request->role;
       $chambre->attributs =$request->role;
       $chambre->statuts =$request->role;
       $chambre->save();

       return redirect('Inscription')->with('sms', 'Tu es maintenant ajouter ' );
    }

}
