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
        <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
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
                <form action="action_page.php">
                    <label for="fname">Prénom</label>
                    <input type="text" id="fname" name="firstname">

                    <label for="lname">Nom</label>
                    <input type="text" id="lname" name="lastname">

                    <label for="country">Pays</label>
                    <select id="country" name="country">
                        <option value="australia">Australia</option>
                        <option value="canada">Canada</option>
                        <option value="usa">USA</option>
                    </select>

                    <input type="submit" value="Submit">
                </form>
            </section>
            <footer>

            </footer>
        </div>
    </body>
</html>
