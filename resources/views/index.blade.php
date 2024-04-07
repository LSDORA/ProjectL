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
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/reset.css')}}">
</head>
<body>
    <nav><ul>
        <a href="/client"><li>CONNEXION</li></a>
        <a href="/inscription"><li>INSCRITION</li></a>
        <li class="end">
        MAISON DES LIGUES</li>
    </ul></nav>

    <section class="headbanner">
          <h1>PARIS 2024</h1>
          <h2>jeux olympiques</h2>
    </section>
    <section class="main">
         <h1>MAISON DES LIGUES</h1>
         
         <div class="publication">
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
          
         </div>
    </section>
    <footer>
        <img src="{{asset('image/pngegg (1).png')}}" alt="" srcset="">
        <img src="{{asset('image/Paris2024_DoubleEmbleme_RVB_Poly_2021.png.png')}}" alt="" srcset="">
        <img src="{{asset('image/pngegg (1).png')}}" alt="" srcset="">
        
     
    </footer>
</body>
</html>