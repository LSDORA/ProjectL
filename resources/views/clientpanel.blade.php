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
        <a href="/index"><li>GET BACK HOME</li></a>
        <a href="/inscription"><li>MAISON DES LIGUES</li></a>
        <a href="/client"><li class="end"><input class="button-51 mzero rouge" type="button" value="DECONNEXION"></li></a>
    </ul></nav>

    <section class="headbanner">
       <div class="head">
            <ul>
              <li><img src="https://cdn.nba.com/headshots/nba/latest/1040x760/1629029.png" height="50rem" alt="Luka Doncic"></li>
              <li>DONCIC</li>
              <li>Luka</li>
              <li>Dallas, United State, 12:30</li>
              <li></li>
              
            </ul>
        
      </div>

      <div class="angry-grid">
        <div id="item-0"> 
          <div class="porshe"></div>
        <h3>SUPER BOWL 2021</h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam corrupti a neque suscipit possimus perferendis, repellat doloremque ad illum, voluptate dolorem incidunt dicta deserunt animi praesentium! Quaerat voluptatem iure explicabo.</p>
    </div>
        <div id="item-1"> <div class="porshe1"></div>
          <h3>EPREUVE DE NATATION DANS LA SEINE</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam corrupti a neque suscipit possimus perferendis, repellat doloremque ad illum, voluptate dolorem incidunt dicta deserunt animi praesentium! Quaerat voluptatem iure explicabo.</p>
      </div>
        <div id="item-2"> <div class="porshe2">.</div>
          <h3>SUPER BOWL 2021</h3>
        <p>Lorem ipsum dolor sit &nbsp;amet consectetur adipisicing elit. Aliquam corrupti a neque suscipit possimus perferendis, repellat doloremque ad illum, voluptate dolorem incidunt dicta deserunt animi praesentium! Quaerat voluptatem iure explicabo.</p>
      </div>
        <div class="no" id="item-3"><input class="button-51" type="button" value="+"></div>
        <div class="no" id="item-4"><img src="/image/no-pictures.png" alt=""></div>
        <div class="no" id="item-6"><img src="/image/no-pictures.png" alt=""></div>
        <div class="no" id="item-7"><img src="/image/no-pictures.png" alt=""></div>
        <div class="no" id="item-5"><img src="/image/no-pictures.png" alt=""></div>
      </div>
      
    
    </section>



</body>
</html>