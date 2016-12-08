<?php
/*
 * Projet       : Quiz logo
 * Auteurs      : Sulzbach Jessica, Marques Dilan
 * Description  :
 * Date         : 10.11.2016
 */
require_once 'request.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Quiz</title>
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
                        <li><a href="quiz.php">Quiz</a></li>
                        <li><a href="contact.php">Contact</a></li>
                        <li style="float:right"><a href="login.php">Login</a></li>
                    </ul>
                </nav>
            </header>
            <section>
                <article class="floating-box">
                    <?php
                    //En construction
                    $element = getTypeQuiz("Mode");
                    for ($i = 0; $i < 6-1; $i++)
                    {
                        $random = rand(0, count($element) - 1);
                        echo $element[$random]["NomMarques"];
                        echo " / ";
                    }
                    ?>
                </article>
                <article class="floating-box">2</article>
                <article class="floating-box">3</article>
                <article class="floating-box">4</article>
                <article class="floating-box">5</article>
                <article class="floating-box">6</article>
            </section>
            <footer>

            </footer>
        </div>
    </body>
</html>
