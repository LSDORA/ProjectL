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
    <link rel="stylesheet" href="{{asset('css/3.css')}}">
    <link rel="stylesheet" href="{{asset('css/reset.css')}}">
</head>
<body>
  <nav><ul>
      <a href="/index"><li>HOME</li></a>
      <a href="/admin"><li>ADMIN</li></a>
      <a><li> MAISON DES LIGUES</li></a>
 
  </ul></nav>

<section class="client">
  <section class="ok" >
      <form action="">
          <fieldset>
              <legend>CONNEXION CLIENT</legend>
              <div class="info">  
                  <label for="username">Mail :</label>
                  <input type="text" name="" id="">  
                  <label for="password">Password :</label>  
                  <input type="text" name="" id="">  
                  </div>
                  <a href="/clientpanel">
              <input class="button-50 mzero left2" type="button" value="Connexion"/></a>
          </fieldset>
        
      </form>
      
  </section>


</section>



</body>
</html>