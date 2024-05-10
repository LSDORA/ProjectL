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
    <link rel="stylesheet" href="{{asset('css/5.css')}}">
    <link rel="stylesheet" href="{{asset('css/reset.css')}}">
</head>
<body>
  <section class="ok">
      <h3>Merci de vous etre inscrit! Votre formulaire a été soumis avec succès</h3>
  <h4>BIENVENUE {{ $prenom }} {{ $nom }} </h4>
  <div><img src="" alt="" srcset=""></div>
  <a href="/client"><h4>PAGE CONNEXION UTILISATEUR →</h4></a>
  </section>
</body>
</html>