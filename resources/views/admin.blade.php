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
      <form action="">
          <fieldset>
              <legend>CONNEXION ADMIN</legend>
              <div class="info">  
                  <label for="username">Username :</label>
                  <input type="text" name="" id="">  
                  <label for="password">Password :</label>  
                  <input type="text" name="" id="">  
                  </div>
                  <a href="adminpanel.html">
              <input class="button-50 mzero left2" type="button" value="Connexion"/></a>
          </fieldset>
        
      </form>
      
  </section>
 </section>

</body>

  </html>