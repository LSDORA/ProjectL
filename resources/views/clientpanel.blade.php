<!DOCTYPE html>
@php
 const tittle = "MAISON DES LIGUES";
@endphp
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ tittle}}</title>
    <link rel="stylesheet" href="{{asset('css/4.css')}}">
    <link rel="stylesheet" href="{{asset('css/reset.css')}}">
    <script src="https://kit.fontawesome.com/17ef388729.js" crossorigin="anonymous"></script>
</head>
<body>
    <nav><ul>
       <!-- <a href="/index"><li>GET BACK HOME</li></a> -->
        <a href="/inscription"><li>MAISON DES LIGUES</li></a>
        <a href="/client"><li class="end"><form action="{{ route('connexion.deconnexion') }}" method="POST">
          @csrf <!-- Ajoutez ceci pour protéger votre formulaire contre les attaques CSRF -->
          <button type="submit" class="button-51 mzero rouge rougee">DECONNEXION</button>
      </form></li></a>
    </ul></nav>

    <section class="headbanner">
       <div class="head">
            <ul>
              <li><img src="{{ asset($photo) }}" height="50rem" alt="Luka Doncic"></li>
              <li style="text-transformation: uppercase">{{$nom}}</li>
              <li>{{$prenom}}</li>
              <li>{{$ville}}</li>
              <li>{{$mail}}</li>
              
            </ul>
        
      </div>

      <div class="cree">
        <h2>CREER VOTRE EVENEMENT</h2>
        <form action="{{ route('events.create') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="creein">
            <h3>Nom de l'evenement</h3>
            <div class="cre">
              <input type="text" name="nom" id="titre" required>
              <div class="file-input-container">
                <input type="file" name="image" id="file-input" class="file-input" required>
                <label for="file-input" class="file-input-label">Choisir une image</label>
              </div>
            </div>
            <h3>Description</h3>
            <textarea name="description" id="description" cols="30" rows="10" required></textarea>
          </div>
          <div>
            <div class="image"></div>
            <button class="event" type="submit">Poster l'evenement</button>
          </div>
        </form>
      </div>
      
      
    
    </section>



</body>
</html>