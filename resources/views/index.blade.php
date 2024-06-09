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
        
        @if(auth()->check() && auth()->user()->droit == '1')
        <a href="/adminpanel"><li class="rougecolor" > Page Admin</li></a>
    @endif
    
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
          @foreach($evenements as $evenement)
              <div class="box"> 
                  <div class="porshe" style="background-image: url('{{ asset($evenement->image) }}')"></div>
                  <h3>{{ $evenement->nom }}</h3>
                  <p>{{ $evenement->description }}</p>
                  <h4></h4>
              </div>
          @endforeach
      </div>
    </section>
    <footer>
        <img src="{{asset('image/pngegg (1).png')}}" alt="" srcset="">
        <img src="{{asset('image/Paris2024_DoubleEmbleme_RVB_Poly_2021.png.png')}}" alt="" srcset="">
        <img src="{{asset('image/pngegg (1).png')}}" alt="" srcset="">
        
     
    </footer>
</body>
</html>
