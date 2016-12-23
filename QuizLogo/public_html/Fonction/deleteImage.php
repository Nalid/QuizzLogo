<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php 
session_start();
require_once './request.php';
if(isset($_GET["TypeDel"]))
{
    $images = getImage($_GET["TypeDel"]);
}
?>
<html>
    <head>
        <title>Supprimer une Image</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div>
            <h1>Sélectionner une image a supprimer</h1>
            <?php
            foreach ($images as $image)
            {
                ?>
                <div>
                    <img src="Image/<?php $image['NomTypeQuiz']?>/<?php echo $image['Image'];?>" width="200px" height="200px"/><br>
                    id image : <?php echo $image['idMarque'] ?> </br>
                    nom image : <?php echo $image['NomMarques']; ?>
                </div>
            <div>
                <form action="./delete.php" method="get">
                    <input type="hidden" name="idMarque" value ="<?php echo $image['idMarque']?>"/>
                    <input type="submit" value="Supprimer"/>
                </form>
            </div>
                <?php
            }
            ?>
        </div>
    </body>
</html>
