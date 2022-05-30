<?php require_once('contact.php'); ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Accueil</title>
        <link rel="stylesheet" href="assets\style.css">
    </head>

    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <body>

        <header class="header">Rechercher un contact</header>
        
        <div class="container">
            <div class="list-container">
                <!-- Afficher les contacts -->
                <div class="list-title">Recherche d'une fiche de contact</div>

                <div class="list-search-div">
                    <div class="list-search-content">
                        <label class="list-label">Renseigner un nom ou une dénomination</label>
                        <input type="search" class="list-search-bar" placeholder="Nom ou dénomination">
                        <div class="list-btn-search"><button class="btn-search">Rechercher</button></div>
                    </div>
                </div>
                
                <table>
                    <thead>
                        <tr>
                            <th></th>
                            <th>Nom</th>
                            <th>Adresse</th>
                            <th>Ville</th>
                            <th>Téléphone</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?/*php foreach($contacts as $contact): */?>
                            <tr>
                            <td><img src="assets\login-icon.png" alt="" class="login-icon"/></td>
                            <td><?/*= $contact->firstname */?></td>
                            <td><?/*= $contact->adress */?></td>
                            <td><?/*= $contact->city */?></td>
                            <td><?/*= $contact->tel */?></td>
                            <td>
                                <a href="show.php" class="table-btn"><i class="uil uil-search search-icon"></i>Voir</a>
                            </td>
                        </tr>
                        <?php /* endforeach; */?>
                    </tbody>
                </table>

            </div>
        </div>

    </body>
</html>