<?php
/*
 * Projet       : Quiz logo
 * Auteurs      : Sulzbach Jessica, Marques Dilan
 * Description  :
 * Date         : 10.11.2016
 */
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Contact</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/style1.css">
    </head>
    <body>
        <div id="Master">
            <header>
                <nav>
                    <ul>
                        <li><a href="accueil.php">Accueil</a></li>
                        <li><a href="quiz.php"> Quiz </a></li>
                        <li><a class="active" href="contact.php">Contact</a></li>
                        <li style="float:right"><a href="login.php">Login</a></li>
                    </ul>
                </nav>
            </header>
            <section id="contact-form">
                <form action="">
                    <label for="fname"><b>Prénom</b></label>
                    <input type="text" id="fname" name="firstname" placeholder="Entrez votre nom">

                    <label for="lname"><b>Nom</b></label>
                    <input type="text" id="lname" name="lastname" placeholder="Entrez votre prénom">

                    <input type="radio" name="gender" value="male" checked> Male
                    <input type="radio" name="gender" value="female"> Female<br>
                    
                    <label for="country"><b>Pays</b></label>
                    <select id="country" name="country">
                        <option value="Albanie">Albanie</option>
                        <option value="Allemagne">Allemagne</option>
                        <option value="Australie">Australie</option>
                        <option value="Autriche">Autriche</option>
                        <option value="Belgique">Belgique</option>
                        <option value="Bosnie">Bosnie</option>
                        <option value="Bulgarie">Bulgarie</option>    
                        <option value="canada">Canada</option>
                        <option value="Croatie">Croatie</option>
                        <option value="EUA">Danemark</option>
                        <option value="Espagne">Espagne</option>
                        <option value="Estonie">Estonie</option>
                        <option value="EUA">EUA</option>
                        <option value="France">France</option>
                        <option value="Grèce">Grèce</option>
                        <option value="Hongrie">Hongrie</option>
                        <option value="Island">Island</option>
                        <option value="Italie">Italie</option>
                        <option value="Lettonie">Lettonie</option>
                        <option value="Lituanie">Lituanie</option>
                        <option value="Macédonie">Macédonie</option>
                        <option value="Monténégro">Monténégro</option>
                        <option value="Norvège">Norvège</option>
                        <option value="Pays-Bas">Pays-Bas</option>
                        <option value="Portugal">Portugal</option>
                        <option value="Royaume-Uni">Royaume-Uni</option>
                        <option value="Suisse">Suisse</option>
                        <option value="Turquie">Turquie</option>
                    </select>

                    <label for="mail"><b>Mail</b></label>
                    <input type="text" id="mail" name="mail" placeholder="Entrez votre adresse mail">
                    
                    <label for="mail"><b>Image</b></label><br>
                    <input type="file" name="addedFile"><br>
                    
                    <textarea placeholder="Écrivez votre message ici.."></textarea>

                    <input type="submit" value="Submit">
                </form>
            </section>
            <footer>

            </footer>
        </div>
    </body>
</html>
