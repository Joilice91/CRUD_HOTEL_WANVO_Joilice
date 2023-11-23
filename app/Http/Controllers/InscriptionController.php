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
       $chambre->description =$request->description;
       $chambre->nom_ch =$request->nom_ch;
       $chambre->prix =$request->prix;
       $chambre->lits =$request->lits;
       $chambre->adultes =$request->adultes;
       $chambre->enfants =$request->enfants;
       $chambre->attributs =$request->attributs;
       $chambre->statut =$request->statut;
       $chambre->save();

       return redirect('Inscription')->with('sms', 'Tu es maintenant ajouter ' );
    }
     
    public function list_ch()
    
    {   $list = Chambre::all();
        return view("Liste", compact("list"));
    }
    public function update_ch($id){
        $list=Chambre::find($id);
        return view ("update", compact('list'));
    }
    public function update_ch_traitement(Request $request){
        $request->validate([
            'nom'=>'required',
            'description'=>'required',
            'nom_ch'=>'required',
            'prix'=>'required',
            'attributs'=>'required',
            'statut'=>'required',
           ]); 
             $chambre= utilisateur::find($request->id);
             $chambre->nom =$request->nom;
             $chambre->description =$request->description;
             $chambre->nom_ch =$request->nom_ch;
             $chambre->prix =$request->prix;
             $chambre->attributs =$request->attributs;
             $chambre->statut =$request->statut;
             $utilisateur->update();

             return redirect('/Liste')->with('sms', 'modification faite  ' );
    }

}
