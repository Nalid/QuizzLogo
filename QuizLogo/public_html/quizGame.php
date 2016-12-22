<?php
/*
 * Projet       : Quiz logo
 * Auteurs      : Sulzbach Jessica, Marques Dilan
 * Description  :
 * Date         : 10.11.2016
 */

session_start();

require_once 'request.php';

$type;

if (isset($_GET["Type"]))
{
    switch ($_GET["Type"])
    {
        case "Sport":
            $_SESSION["type"] = "Sport";
            $_SESSION["element"] = getTypeQuiz("Sport");
            break;
    
        case "Mode":
            $_SESSION["type"] = "Mode";
            $_SESSION["element"] = getTypeQuiz("Mode");
            break;
    
        case "Voiture":
            $_SESSION["type"] = "Voitures";
            $_SESSION["element"] = getTypeQuiz("Voitures");
            break;
    
        case "Nourriture":
            $_SESSION["type"] = "Nourriture";
            $_SESSION["element"] = getTypeQuiz("Nourriture");
            break;
    
        case "Electronique":
            $_SESSION["type"] = "Electronique";
            $_SESSION["element"] = getTypeQuiz("Electronique");
            break;
    
        case "Tout":
            $_SESSION["element"] = getAll();
            break;
    }
}

$element = $_SESSION["element"];
$type = $_SESSION["type"];

$random1 = rand(0, count($element) - 1);
$nomReponse = $element[$random1]['NomMarques'];

$_SESSION["Reponse"] = $nomReponse;

if(isset($_GET["1"]))
{
    $_SESSION["point"] += 2;
}
else if (isset($_GET["0"]))
{
    $_SESSION["point"] -= 1;
}

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
                <?php
                if ($_SESSION["point"] < 0 || $_SESSION["point"] >= 10)
                {
                    if ($_SESSION["point"] >= 10)
                    {
                        ?>
                        <h1>Victoire</h1>
                        <?php
                    }
                    else
                    {
                        ?>
                        <h1>Game Over</h1>
                        <?php
                    }
                }
                else
                {
                ?>
                <h1>Trouvez le logo de: <?php echo $nomReponse; ?></h1>
                <h1><?php echo $_SESSION["point"];?></h1>
                <form action="#" method="get">
                    <?php
                    for ($i = 0; $i < 5 ; $i++) {
                        $random = rand(0, count($element) - 1);
                    ?>
                    <article class="floating-box">
                        
                        <button name="0" value="<?php echo $element[$random]['NomMarques']; ?>">
                            <img src="Image/<?php echo $type; ?>/<?php echo $element[$random]["Image"]; ?>" width="200px" height="200px"/>
                        </button>
                        <!--<input type="hidden" name="nomImage" value="<?php echo  $element[$random]["NomMarques"] ?>" />-->
                    </article>   
                    <?php } ?>
                    <article class="floating-box">
                        <button name="1" value="<?php echo $element[$random1]['NomMarques']; ?>">
                            <img src="Image/<?php echo $type; ?>/<?php echo $element[$random1]['Image']; ?>" width="200px" height="200px"/>
                        </button>    
                    </article>
                </form>
                <?php
                }
                ?>
            </section>
            <footer>

            </footer>
        </div>
    </body>
</html>
