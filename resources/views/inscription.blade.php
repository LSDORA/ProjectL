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
    <link rel="stylesheet" href="{{asset('css/2.css')}}">
    <link rel="stylesheet" href="{{asset('css/reset.css')}}">
</head>
<body>
  <nav><ul>
      <a href="/client"><li>CONNEXION</li></a>
      <a href="/index"><li>ACCEUIL</li></a>
      <li class="end">
          MAISON DES LIGUES
</li>
  </ul></nav>

  <section class="headbanner2">
      <h1>MAISON DES LIGUES</h1>
   <form class="bloc" action="">
      <h3>Prêt(e) à la compétition? Inscrivez vous !</h3>
      <div class="button-50" id="button-50">INSCRIPTION →</div>
      <h4>Tous les mois profitez de toutes les nouveautés et opportunités. A partir du mois prochain on vous propose toutes les séance de sport sur vos support préférés</h4>
   </form>
   <form class="bloc2 disabled action="">
      <div class="button-51 left mzero" id="button-51" >X</div>
      <div class="info">
          <label for="nom">Nom :</label>
          <input type="text" name="" id="">
          <label for="nom">Prénom :</label>
          <input type="text" name="" id="">
          <label for="date">Date de Naissance :</label>
          <input type="date" name="" id="">
          <label for="mail">Mail :</label>
          <input type="email" name="" id="">
          <label for="mail">Password :</label>
          <input type="password" name="" id="">
          <label for="ville">Ville de résidence :</label>
          <input type="text" name="" id="">
          <label for="photo">Photo de profile <i class="fa-solid fa-arrow-up-from-bracket" style="color: #000000;"></i>
                  <input type="file" id="photo" name="photo" accept="image/*" required aria-required="true">
          </label>
          
          
      </div>
      <a href="/confirm">
      <input class="button-50 mzero" type="button" value="INSCRIPTION →" id="send"/></a>
   </form>
  </section>
  <script>
      document.getElementById('button-50').addEventListener('click', function() {
          var bloc = document.querySelector('.bloc');
          var bloc2 = document.querySelector('.bloc2');
          
          bloc2.classList.remove('disabled');
      });

      document.getElementById('button-51').addEventListener('click', function() {
          var bloc = document.querySelector('.bloc');
          var bloc2 = document.querySelector('.bloc2');
          
          bloc2.classList.add('disabled');
      });
  </script>
</body>
</html>