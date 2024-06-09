<!DOCTYPE html>
@php
const tittle = "MAISON DES LIGUES";
@endphp
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ tittle }}</title>
    <link rel="stylesheet" href="{{asset('css/4.css')}}">
    <link rel="stylesheet" href="{{asset('css/reset.css')}}">
    <script src="https://kit.fontawesome.com/17ef388729.js" crossorigin="anonymous"></script>
</head>
<body>
  <nav>
    <ul>
        <a href="/"><li>GET BACK HOME</li></a>
        <a href="/inscription"><li>MAISON DES LIGUES</li></a>
        <li class="end">
            <form action="{{ route('connexion.deconnexion') }}" method="POST">
                @csrf
                <button type="submit" class="button-51 mzero rouge rougee">DECONNEXION</button>
            </form>
        </li>
    </ul>
  </nav>

  <section class="headbanner">
    <div class="head">
        <div class="tittle">Liste des membres inscrit</div>
    </div>
    <div class="main">
        <table>
            <thead>
                <tr>
                    <th scope="col">NOM</th>
                    <th scope="col">PRENOM</th>
                    <th scope="col">AGE</th>
                    <th scope="col">MAIL</th>
                    <th scope="col">VILLE</th>
                    <th scope="col">PHOTO</th>
                    <th scope="col">EDIT</th>
                    <th scope="col">DELETE</th>
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

  <!-- Formulaire d'édition -->
  <div id="edit-confirm" class="edit-confirm">
    <div class="custom-confirm-content">
        <p>Entrez les informations que vous voulez modifier :</p>
        <form id="editForm" class="btn-group" method="POST">
            @csrf
            <input type="hidden" name="user_id" id="editUserId">
            <input type="text" name="nom" id="editNom" placeholder="Nom"><br>
            <input type="text" name="prenom" id="editPrenom" placeholder="Prénom"><br>
            <input type="email" name="email" id="editEmail" placeholder="Email"><br>
            <input type="text" name="date_naissance" id="editDateNaissance" placeholder="Date de naissance"><br>
            <input type="text" name="ville" id="editVille" placeholder="Ville"><br>
            <input type="password" name="mot_de_passe" id="editMotDePasse" placeholder="Mot de passe"><br>
            <div class="btn-group">
                <button type="submit" id="edit-yes">Éditer</button>
                <button type="button" id="edit-no">Annuler</button>
            </div>
        </form>
    </div>
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Gestion de la suppression des utilisateurs
        var deleteButtons = document.querySelectorAll('.rouge');
        var customConfirm = document.getElementById('custom-confirm');
        var confirmYes = document.getElementById('confirm-yes');
        var confirmNo = document.getElementById('confirm-no');
        var userIdToDelete = null;

        deleteButtons.forEach(function(button) {
            button.addEventListener('click', function() {
                userIdToDelete = this.closest('tr').getAttribute('data-id');
                customConfirm.style.display = 'block';
            });
        });

        confirmYes.addEventListener('click', function() {
            if (userIdToDelete) {
                fetch('/delete/user/' + userIdToDelete, {
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
            }
            customConfirm.style.display = 'none';
        });

        confirmNo.addEventListener('click', function() {
            customConfirm.style.display = 'none';
            userIdToDelete = null;
        });

        // Gestion de l'édition des utilisateurs
        var editIcons = document.querySelectorAll('.grey');
        var editForm = document.getElementById('edit-confirm');
        var editUserId = document.getElementById('editUserId');
       

        editIcons.forEach(function(icon) {
            icon.addEventListener('click', function() {
                var row = this.closest('tr');
                var userId = row.getAttribute('data-id');
                var userNom = row.querySelector('th').textContent;
                var userPrenom = row.querySelector('td:nth-child(2)').textContent;
                var userEmail = row.querySelector('td:nth-child(4)').textContent;
                var userVille = row.querySelector('td:nth-child(5)').textContent;

                editUserId.value = userId;

                editForm.action = '/edit/user/' + userId;
              
                editForm.style.display = 'block';
            });
        });

        document.getElementById('editForm').addEventListener('submit', function(event) {
            event.preventDefault();
            var formData = new FormData(this);
            var userId = editUserId.value;

            fetch('/edit/user/' + userId, {
                method: 'POST',
                body: formData,
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                }
            })
            .then(response => {
                if (response.ok) {
                    window.location.reload();
                } else {
                    console.error('Erreur lors de l\'édition de l\'utilisateur');
                }
            })
            .then(data => {
            showNotification('Utilisateur mis à jour avec succès');
            setTimeout(function() {
                window.location.reload();
            }, 3000);  
        })
            .catch(error => {
                console.error('Erreur lors de l\'édition de l\'utilisateur :', error);
            });

            editForm.style.display = 'none';
        });

        document.getElementById('edit-no').addEventListener('click', function() {
            editForm.style.display = 'none';
        });
    });
  </script>
</body>
</html>
