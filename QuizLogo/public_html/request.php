<?php
require_once 'dbconnection.php';

//Récuperer tout les élément
function getAll()
{
    $db = connectDB();
    $sql = "SELECT * FROM marques";
    $request = $db->prepare($sql);
    $request->execute();
    return $request->fetchAll();
}

//Récuperer tout les élément d'un seul type de quiz
function getTypeQuiz($typequiz)
{
    $db = connectDB();
    $sql = "SELECT NomMarques, Image FROM marques NATURAL JOIN appartenir NATURAL JOIN typequiz WHERE typequiz.NomTypeQuiz = ?;";
    $request = $db->prepare($sql);
    $request->execute(array($typequiz));
    return $request->fetchAll();
}

//Récuperer la bonne réponse
function getElement($marque)
{
    $db = connectDB();
    $sql = "SELECT Image FROM marques WHERE NomMarques = ?";
    $request = $db->prepare($sql);
    $request->execute(array($marque));
    return $request->fetchAll();
}


//    for ($i = 0; $i < 6-1; $i++)
//    {
//        $random = rand(0, count($element) - 1);
//        echo $element[$random]["Image"];
//        echo " / ";
//    }