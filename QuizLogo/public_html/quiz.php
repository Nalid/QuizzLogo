<?php
/*
 * Projet       : Quiz logo
 * Auteurs      : Sulzbach Jessica, Marques Dilan
 * Description  :
 * Date         : 10.11.2016
 */

session_start();

$_SESSION["point"] = 0;

require_once './Fonction/dbconnection.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Quiz</title>
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
                        <li><a class="active" href="quiz.php">Quiz</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </nav>
            </header>
            <section>
                <div>
                    <form action="quizGame.php" method="get">
                        <button class="buttons" name="Type" value="Tout">TOUTES les marques</button>
                        <button class="buttons" name="Type" value="Sport">Les marques de SPORT</button>
                        <button class="buttons" name="Type" value="Mode">Les marques de MODE</button>
                        <button class="buttons" name="Type" value="Voiture">Les marques de VOITURES</button>
                        <button class="buttons" name="Type" value="Nourriture">Les marques de NOURRITURE</button>
                        <button class="buttons" name="Type" value="Electronique">Les marques d'ELECTRONIQUE</button>
                    </form>
                </div>
            </section>
            <footer>

            </footer>
        </div>
    </body>
</html>
