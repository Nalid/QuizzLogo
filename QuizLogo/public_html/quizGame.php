<?php
/*
 * Projet       : Quiz logo
 * Auteurs      : Sulzbach Jessica, Marques Dilan
 * Description  :
 * Date         : 10.11.2016
 */
require_once 'request.php';

$type;

if(isset($_GET["Sport"]))
{
    $element = getTypeQuiz("Sport");
    $type = "Sport";
} 
else if (isset($_GET["Mode"]))
{
    $element = getTypeQuiz("Mode");
    $type = "Mode";
}
else if (isset($_GET["Voiture"]))
{
    $element = getTypeQuiz("Voitures");
    $type = "Voiture";
}
else if(isset($_GET["Nourriture"]))
{
    $element = getTypeQuiz("Nourriture");
    $type = "Nourriture";
}
else if (isset($_GET["Tout"]))
{
    $element = getAll();
}
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
                    </ul>
                </nav>
            </header>
            <section>
                <?php
                $element = getTypeQuiz("Mode");
                for ($i = 0; $i < 5 ; $i++) {
                    $random = rand(0, count($element) - 1);
                    
                    <article class="floating-box">
                        <img src="Image/Mode/<?php echo $element[$random]["Image"]; ?>" width="200px" height="200px"/>
                    </article>
                    <article class="floating-box">
                        <img src="Image/<?php echo $element[$random]["NomMarques"]; ?>" width="200px" height="200px"/>
                    </article>
                    
                <?php } ?>
            </section>
            <footer>

            </footer>
        </div>
    </body>
</html>
