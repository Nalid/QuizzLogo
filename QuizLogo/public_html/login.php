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
        <title>Login</title>
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
                        <li style="float:right" class="active"><a href="login.php">Login</a></li>
                    </ul>
                </nav>
            </header>
            <section>
                <form action="action_page.php">
                    <div class="container">
                        <label><b>Username</b></label>
                        <input type="text" placeholder="Entrez votre pseudo" name="uname" required>

                        <label><b>Password</b></label>
                        <input type="password" placeholder="Entrez votre mote de passe" name="psw" required>

                        <button type="submit">Login</button>
                        <input type="checkbox" checked="checked"> Remember me
                    </div>

                    <div class="container" style="background-color:#f1f1f1">
                        <button type="button" class="cancelbtn">Cancel</button>
                        <span class="psw">Forgot <a href="#">password?</a></span>
                    </div>
                </form>
            </section>
            <footer>

            </footer>
        </div>
    </body>
</html>
