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
     <li class="end"><form action="{{ route('connexion.deconnexion') }}" method="POST">
      @csrf <!-- Ajoutez ceci pour protéger votre formulaire contre les attaques CSRF -->
      <button type="submit" class="button-51 mzero rouge">DECONNEXION</button>
  </form>
  </li>
  </ul></nav>

  <section class="headbanner">
     <div class="head">

      <input type="search" placeholder="Liste des membres inscrit" name="" id=""><input type="button" class="button-51" value="Rechercher">
    </div>

     <div class="main">
      <table>

          <thead>
            <tr>
              <th scope="col"> NOM</th>
              <th scope="col"> PRENOM</th>
              <th scope="col"> AGE</th>
              <th scope="col"> MAIL</th>
              <th scope="col"> VILLE</th>
              <th scope="col"> PHOTO</th>
              <th scope="col"> EDIT</th>
              <th scope="col"> DELETE </th>
       
            </tr>
          </thead>
          <tbody>
              <tr>
                <th scope="row">Middelton</th>
                <td>Khris</td>
                <td>32</td>
                <td>Cmiddelton@gmail.com</td>
                <td>Milwakee</td>
                <td><img src="https://cdn.nba.com/headshots/nba/latest/1040x760/203114.png" height="50rem" alt="image de profil"></td>
                <td class="grey"><i class="fa-solid fa-pen" style="color: #ffffff;"></i></td>
                <td class="rouge"><i class="fa-solid fa-xmark" style="color: #ffffff;"></i></td>
              </tr>
              <tr>
                <th scope="row">James</th>
                <td>LeBron</td>
                <td>37</td>
                <td>lebron.james@nba.com</td>
                <td>Los Angeles Lakers</td>
                <td><img src="https://cdn.nba.com/headshots/nba/latest/1040x760/2544.png" height="50rem" alt="LeBron James"></td>
                <td class="grey"><i class="fa-solid fa-pen" style="color: #ffffff;"></i></td>
                <td class="rouge"><i class="fa-solid fa-xmark" style="color: #ffffff;"></i></td>
              </tr>
              <!-- Ajoutez ici d'autres joueurs selon le même modèle -->
              <tr>
                <th scope="row">Curry</th>
                <td>Stephen</td>
                <td>34</td>
                <td>scurry30@warriors.com</td>
                <td>Golden State Warriors</td>
                <td><img src="https://cdn.nba.com/headshots/nba/latest/1040x760/201939.png" height="50rem" alt="Stephen Curry"></td>
                <td class="grey"><i class="fa-solid fa-pen" style="color: #ffffff;"></i></td>
                <td class="rouge"><i class="fa-solid fa-xmark" style="color: #ffffff;"></i></td>
              </tr>
              <tr>
                <th scope="row">Durant</th>
                <td>Kevin</td>
                <td>33</td>
                <td>kd35@nets.com</td>
                <td>Brooklyn Nets</td>
                <td><img src="https://cdn.nba.com/headshots/nba/latest/1040x760/201142.png" height="50rem" alt="Kevin Durant"></td>
                <td class="grey"><i class="fa-solid fa-pen" style="color: #ffffff;"></i></td>
                <td class="rouge"><i class="fa-solid fa-xmark" style="color: #ffffff;"></i></td>
              </tr>
              <tr>
                <th scope="row">Antetokounmpo</th>
                <td>Greek</td>
                <td>28</td>
                <td>greekfreak@bucks.com</td>
                <td>Milwaukee Bucks</td>
                <td><img src="https://cdn.nba.com/headshots/nba/latest/1040x760/203507.png" height="50rem" alt="Giannis Antetokounmpo"></td>
                <td class="grey"><i class="fa-solid fa-pen" style="color: #ffffff;"></i></td>
                <td class="rouge"><i class="fa-solid fa-xmark" style="color: #ffffff;"></i></td>
              </tr>
              <tr>
                <th scope="row">Embiid</th>
                <td>Joel</td>
                <td>28</td>
                <td>joelembiid@sixers.com</td>
                <td>Philadelphia 76ers</td>
                <td><img src="https://cdn.nba.com/headshots/nba/latest/1040x760/203954.png" height="50rem" alt="Joel Embiid"></td>
                <td class="grey"><i class="fa-solid fa-pen" style="color: #ffffff;"></i></td>
                <td class="rouge"><i class="fa-solid fa-xmark" style="color: #ffffff;"></i></td>
              </tr>
              <tr>
                <th scope="row">Lillard</th>
                <td>Damian</td>
                <td>32</td>
                <td>dlillard@blazers.com</td>
                <td>Portland Trail Blazers</td>
                <td><img src="https://cdn.nba.com/headshots/nba/latest/1040x760/203081.png" height="50rem" alt="Damian Lillard"></td>
                <td class="grey"><i class="fa-solid fa-pen" style="color: #ffffff;"></i></td>
                <td class="rouge"><i class="fa-solid fa-xmark" style="color: #ffffff;"></i></td>
              </tr>
              <tr>
                <th scope="row">Harden</th>
                <td>James</td>
                <td>33</td>
                <td>jamesharden@nets.com</td>
                <td>Brooklyn Nets</td>
                <td><img src="https://cdn.nba.com/headshots/nba/latest/1040x760/201935.png" height="50rem" alt="James Harden"></td>
                <td class="grey"><i class="fa-solid fa-pen" style="color: #ffffff;"></i></td>
                <td class="rouge"><i class="fa-solid fa-xmark" style="color: #ffffff;"></i></td>
              </tr>
              <tr>
                <th scope="row">Doncic</th>
                <td>Luka</td>
                <td>24</td>
                <td>lukadoncic@mavs.com</td>
                <td>Dallas Mavericks</td>
                <td><img src="https://cdn.nba.com/headshots/nba/latest/1040x760/1629029.png" height="50rem" alt="Luka Doncic"></td>
                <td class="grey"><i class="fa-solid fa-pen" style="color: #ffffff;"></i></td>
                <td class="rouge"><i class="fa-solid fa-xmark" style="color: #ffffff;"></i></td>
              </tr>
              <tr>
                <th scope="row">Leonard</th>
                <td>Kawhi</td>
                <td>31</td>
                <td>kawhileonard@clippers.com</td>
                <td>LA Clippers</td>
                <td><img src="https://cdn.nba.com/headshots/nba/latest/1040x760/202695.png" height="50rem" alt="Kawhi Leonard"></td>
                <td class="grey"><i class="fa-solid fa-pen" style="color: #ffffff;"></i></td>
                <td class="rouge"><i class="fa-solid fa-xmark" style="color: #ffffff;"></i></td>
              </tr>
              <tr>
                <th scope="row">Jokic</th>
                <td>Nikola</td>
                <td>28</td>
                <td>jokic@nuggets.com</td>
                <td>Denver Nuggets</td>
                <td><img src="https://cdn.nba.com/headshots/nba/latest/1040x760/203999.png" height="50rem" alt="Nikola Jokic"></td>
                <td class="grey"><i class="fa-solid fa-pen" style="color: #ffffff;"></i></td>
                <td class="rouge"><i class="fa-solid fa-xmark" style="color: #ffffff;"></i></td>
              </tr>
              <tr>
                <th scope="row">Davis</th>
                <td>Anthony</td>
                <td>30</td>
                <td>antdavis@lakers.com</td>
                <td>Los Angeles Lakers</td>
                <td><img src="https://cdn.nba.com/headshots/nba/latest/1040x760/203076.png" height="50rem" alt="Anthony Davis"></td>
                <td class="grey"><i class="fa-solid fa-pen" style="color: #ffffff;"></i></td>
                <td class="rouge"><i class="fa-solid fa-xmark" style="color: #ffffff;"></i></td>
              </tr>
              <tr>
                <th scope="row">Tatum</th>
                <td>Jayson</td>
                <td>24</td>
                <td>jaytatum@celtics.com</td>
                <td>Boston Celtics</td>
                <td><img src="https://cdn.nba.com/headshots/nba/latest/1040x760/1628369.png" height="50rem" alt="Jayson Tatum"></td>
                <td class="grey"><i class="fa-solid fa-pen" style="color: #ffffff;"></i></td>
                <td class="rouge"><i class="fa-solid fa-xmark" style="color: #ffffff;"></i></td>
              </tr>
              <tr>
                <th scope="row">Simmons</th>
                <td>Ben</td>
                <td>25</td>
                <td>bsimmons@sixers.com</td>
                <td>Philadelphia 76ers</td>
                <td><img src="https://cdn.nba.com/headshots/nba/latest/1040x760/1627732.png" height="50rem" alt="Ben Simmons"></td>
                <td class="grey"><i class="fa-solid fa-pen" style="color: #ffffff;"></i></td>
                <td class="rouge"><i class="fa-solid fa-xmark" style="color: #ffffff;"></i></td>
              </tr>
              <tr>
                <th scope="row">Irving</th>
                <td>Kyrie</td>
                <td>30</td>
                <td>kyrie@nets.com</td>
                <td>Brooklyn Nets</td>
                <td><img src="https://cdn.nba.com/headshots/nba/latest/1040x760/202681.png" height="50rem" alt="Kyrie Irving"></td>
                <td class="grey"><i class="fa-solid fa-pen" style="color: #ffffff;"></i></td>
                <td class="rouge"><i class="fa-solid fa-xmark" style="color: #ffffff;"></i></td>
              </tr>
            </tbody>
        </table>
        
     </div>
  </section>



</body>
</html>