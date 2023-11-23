<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">


        <title>Modifier</title>
        <link rel="stylesheet" href="">

        
       
        
        
        
    </head>
    <body > 
        <h1>Modifier une chambre</h1>

        @if(session('sms'))
          <div    class="alert alert-success"> 
          {{session('sms')}}
          </div> 
        @endif

        <ul>
        @foreach ($errors->all() as $error)
             <li class="alert alert-danger">{{$error}}</li>
        @endforeach
        </ul>

       
        <form method="POST" action="/update/traitement">
            @csrf
            <var>
            
            <input type="text"  name="id" style="display: none;" value="{{$list->id}}">

           
         <div>
        <label for="nom">Nom</label><br>
         <input type="text" name="nom" id="nom" value="{{$list->nom}}" ><br><br>
        </div>
        <div>
        <label for="description"> Description</label><br>
         <input type="text" name="description"  id="description" value="{{$list->description}}"><br><br>
        </div>
        <div>
        <label for="nom_ch">Nom de la chambre</label><br>
         <input type="text" name="nom_ch"  id="nom_ch" value="{{$list->nom_ch}}"><br><br>
        </div>

        <div>
        <label for="prix">Prix</label><br>
         <input type="number" name="prix"  id="prix" value="{{$list->prix}}"><br><br>
        </div>
      
        <div>
        <label for="attributs">Attribut</label><br>
        <select name="attributs" id="attributs"  value="{{$list->attribut}}">
          <option value=""></option>
          <option value="dejener"> Petit déjeuner</option>
          <option value="nettoyage"> Service de nettoyage</option>
          <option value="Tv">Télévision</option>
          <option value="réveil">Service de réveil</option>
        </select>
        </div><br>
        <div>
        <label for="statut">Statut *</label><br>
        <select name="statut" id="statut" value="{{$list->statut}}">
          <option value=""></option>
          <option value="disponible">Disponible</option>
          <option value="non disponible">Non disponible</option>
        </select>
        </div>
        <div> 
            <button type=submit >Modifier</button>
        </div><br><br>
        <div>
        <a href="/Liste"  class="btn1 btn-danger">Revenir à la liste</a>
        </div>

        

        </form>
        
    </body>
</html>
