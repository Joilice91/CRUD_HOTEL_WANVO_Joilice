<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">


        <title>Formulaire</title>
        <link rel="stylesheet" href="css\formulaire.css">

        
       
        
        
        
    </head>
    <body > 
        <h1>Hotel le Sage</h1>
        
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

       
        <form method="POST" action="">
            @csrf
         <div>
        <label for="nom"> Nom de l'hôtel</label><br>
         <input type="text" name="nom"><br><br>
        </div>
        <div>
        <label for="Description"> Description de l'hôtel</label><br>
         <input type="text" name="description"><br><br>
        </div>
        <div>
        <label for="nom_ch"> Nom de la chambre *</label><br>
         <input type="text" name="nom_ch"><br><br>
        </div>
        <div>
        <label for="prix"> Prix</label><br>
         <input type="text" name="prix"><br><br>
        </div>
        <div>
        <label for="lits">Nombre de lits</label><br>
         <input type="nombre" name="lits"><br><br>
        </div>
       
        <div>
        <label for="adulte">Max d’adultes</label><br>
         <input type="nombre" name="adultes"><br><br>
        </div>
        <div>
        <label for="enfants">Enfants maximum autorisé</label><br>
         <input type="nombre" name="enfants"><br><br>
        </div>
        
        <div>
        <label for="attribut">Attribut</label><br>
        <select name="attribut" id="">
          <option value=""></option>
          <option value="dejener"> Petit déjeuner</option>
          <option value="nettoyage"> Service de nettoyage</option>
          <option value="Tv">Télévision</option>
          <option value="réveil">Service de réveil</option>
        </select>
        </div><br>
        <div>
        <label for="statut">Statut</label><br>
        <select name="statut" id="">
          <option value=""></option>
          <option value="disponible">Disponible</option>
          <option value="non disponible">Non disponible</option>
        </select>
        </div>
        
        
        <div> 
            <button type=submit >Submit</button>
        </div><br><br>
       

        

        </form>
        
    </body>
</html>