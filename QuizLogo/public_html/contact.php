<?php
/*
 * Projet       : Quiz logo
 * Auteurs      : Sulzbach Jessica, Marques Dilan
 * Description  :
 * Date         : 10.11.2016
 */

session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Contact</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/style2.css">
    </head>
    <body>
        <div id="Master">
            <header>
                <nav>
                    <ul>
                        <li><a href="accueil.php">Accueil</a></li>
                        <li><a href="quiz.php"> Quiz </a></li>
                        <li><a class="active" href="contact.php">Contact</a></li>
                    </ul>
                </nav>
            </header>
            <section id="contact-form">
                <form method="POST" action="./Fonction/updateImage.php" enctype="multipart/form-data">
                    <label for="mail"><b>Image à ajouté</b></label><br>
                    <label for="mail">Choisissez la catégorie de l'image:</label><br>
                    <input type='radio' name='cat' value="Sport">Sport
                    <input type='radio' name='cat' value="Mode">Mode
                    <input type='radio' name='cat' value="Electronique">Electronique
                    <input type='radio' name='cat' value="Voiture">Voiture
                    <input type='radio' name='cat' value="Nourriture">Nourriture<br>
                    <input type="text" name="recievedName" placeholder="Rentrez le nom correct de la marque..">
                    <input type="file" name="addedFile"><br>
                    <input type="submit" value="Submit">
                </form>
                
                <form action="./Fonction/deleteImage.php" method="get" enctype="multipart/form-data">
                    <br>
                    <label for="mail"><b>Image à supprimé</b></label><br>
                    <label for="mail">Choisissez la catégorie de l'image:</label><br>
                    <button name="TypeDel" value="Sport">Sport</button>
                    <button name="TypeDel" value="Mode">Mode</button>
                    <button name="TypeDel" value="Electronique">Electronique</button>
                    <button name="TypeDel" value="Voitures">Voiture</button>
                    <button name="TypeDel" value="Nourriture">Nourriture</button>
                </form>
            </section>
            <footer>

            </footer>
        </div>
    </body>
</html>
