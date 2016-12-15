<?php
/*
 * Projet       : Quiz logo
 * Auteurs      : Sulzbach Jessica, Marques Dilan
 * Description  :
 * Date         : 15.12.2016
 */

$selectedRadio=$_POST['cat'];
$recievedName=$_POST['recievedName'];

require_once './request.php';

if (isset($_FILES) && is_array($_FILES)) {
insertImage($_FILES['addedFile'], $selectedRadio, $recievedName);
}

header('location:accueil.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Accueil</title>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" type="text/css" href="css/style2.css" />
    </head>
    <body>
        <div id="Master">
            <header>
                <nav>
                    <ul>
                        <li><a class="active" href="accueil.php">Accueil</a></li>
                        <li><a href="quiz.php">Quiz</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </nav>
            </header>
            <section>
                 
                
            </section>
            <footer>
                
            </footer>
        </div>
    </body>
</html>
