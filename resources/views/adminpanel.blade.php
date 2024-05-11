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

      <input type="search" placeholder="Liste des membres inscrit" name="" id="">
      <!--<input type="button" class="button-51" value="Rechercher">-->
    </div>
<script>
  
</script>
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
@foreach($utilisateurs as $utilisateur)
<tr data-id="{{ $utilisateur->id }}">
    <th scope="row">{{ $utilisateur->nom }}</th>
    <td>{{ $utilisateur->prenom }}</td>
    <td>{{ $utilisateur->calculerAge() }}</td>
    <td>{{ $utilisateur->email }}</td>
    <td>{{ $utilisateur->ville }}</td>
    <td><img src="{{ asset($utilisateur->photo) }}" height="50rem" alt="Photo de profil"></td>
    <td class="grey"><i class="fa-solid fa-pen" style="color: #ffffff;"></i></td>
    <td class="rouge"><i class="fa-solid fa-xmark" style="color: #ffffff;"></i></td>
</tr>
@endforeach
            </tbody>
            <script>
              document.addEventListener('DOMContentLoaded', function() {
    var deleteButtons = document.querySelectorAll('.rouge');
    var customConfirm = document.getElementById('custom-confirm');
    var confirmYes = document.getElementById('confirm-yes');
    var confirmNo = document.getElementById('confirm-no');
    
    deleteButtons.forEach(function(button) {
        button.addEventListener('click', function() {
            var userId = this.closest('tr').getAttribute('data-id');
            customConfirm.style.display = 'block';
            
            confirmYes.addEventListener('click', function() {
                // Envoyer une requête AJAX de suppression
                fetch('/delete/user/' + userId, {
                    method: 'DELETE',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    }
                })
                .then(response => {
                    if (response.ok) {
                        window.location.reload();
                    } else {
                        console.error('Erreur lors de la suppression de l\'utilisateur');
                    }
                })
                .catch(error => {
                    console.error('Erreur lors de la suppression de l\'utilisateur :', error);
                });
                
                customConfirm.style.display = 'none';
            });
            
            confirmNo.addEventListener('click', function() {
                customConfirm.style.display = 'none';
            });
        });
    });
});

          </script>
          
        </table>
        
     </div>
  </section>


  <div id="custom-confirm" class="custom-confirm">
    <div class="custom-confirm-content">
        <p>Voulez-vous vraiment supprimer cet utilisateur ?</p>
        <div class="btn-group">
            <button id="confirm-yes">Oui</button>
            <button id="confirm-no">Non</button>
        </div>
    </div>
</div>




</body>
</html>