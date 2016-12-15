<?php
/*
 * Projet       : Quiz logo
 * Auteurs      : Sulzbach Jessica, Marques Dilan
 * Description  :
 * Date         : 10.11.2016
 */

session_start();

if(isset($_SESSION["Reponse"]))
{
    //$_POST[""] = ;
}

require_once 'request.php';

$type;

if(isset($_GET["Sport"]))
{
    $type = "Sport";
    $element = getTypeQuiz("Sport");
    
} 
else if (isset($_GET["Mode"]))
{
    $element = getTypeQuiz("Mode");
    $type = "Mode";
}
else if (isset($_GET["Voiture"]))
{
    $element = getTypeQuiz("Voitures");
    $type = "Voitures";
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

$random1 = rand(0, count($element) - 1);
$nomReponse = $element[$random1]['NomMarques'];

$_SESSION["Reponse"] = $nomReponse;
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
                        <li><a href="quiz.php">Quiz</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </nav>
            </header>
            <section>
                <h1>Trouvez le logo de: <?php echo $nomReponse; ?></h1>
                <?php
                for ($i = 0; $i < 5 ; $i++) {
                    $random = rand(0, count($element) - 1);
                    ?>
                    <article class="floating-box">
                        <form action="#" method="get">
                            <button name="<?php echo $element[$random]['NomMarques']; ?>">
                                <img src="Image/<?php echo $type; ?>/<?php echo $element[$random]["Image"]; ?>" width="200px" height="200px"/>
                            </button>
                            <!--<input type="hidden" name="nomImage" value="<?php echo  $element[$random]["NomMarques"] ?>" />-->
                        </form>
                    </article>   
                <?php } ?>
                <article class="floating-box">
                    <form action="quizGame.php" method="post">
                        <button name="<?php echo $element[$random1]['NomMarques']; ?>">
                            <img src="Image/<?php echo $type; ?>/<?php echo $element[$random1]['Image']; ?>" width="200px" height="200px"/>
                        </button>    
                    </form>
                </article>
            </section>
            <footer>

            </footer>
        </div>
    </body>
</html>
