<!DOCTYPE html>
@php
 const tittle = "CONNEXION ADMIN";

@endphp
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ tittle}}</title>
      <link rel="stylesheet" href="{{asset('css/reset.css')}}">
      <link rel="stylesheet" href="{{asset('css/3.css')}}">
</head>
<body>
  <nav><ul>
      <a href="/index"><li>HOME</li></a>
      <a href="/client"><li>CLIENT </li></a>
      <a><li> MAISON DES LIGUES</li></a>
      
  </ul></nav>


 <section class="admin">

  <section class="ok" >
    <form action="{{ route('connexion.traiter') }}" method="POST">
        @csrf
      

          <fieldset>
              <legend>CONNEXION ADMIN</legend>
              <div class="info">
                <label for="login">Username :</label>
                <input type="text" name="login" id="login"> 
                <label for="password">Password :</label>
                <input type="password" name="password" id="password"> 
            </div>
         <!-- Afficher un message d'erreur si la variable $error est définie -->
@if(session('error'))
<h4 style="color: red; text-align:center">{{ session('error') }}</h4>
@endif

              <input class="button-50 mzero left2" type="submit" value="Connexion"/>
          </fieldset>
        
      </form>
 
  

  </section>
 </section>

</body>

  </html>