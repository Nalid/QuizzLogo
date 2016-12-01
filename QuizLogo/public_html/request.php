<?php
require_once 'dbconnection.php';

function getAll()
{
    $db = connectDB();
    $sql = "SELECT * FROM marques";
    $request = $db->prepare($sql);
    $request->execute();
    return $request->fetchAll();
}

function getTypeQuiz($typequiz)
{
    $db = connectDB();
    $sql = "SELECT NomMarques, Image FROM marques NATURAL JOIN appartenir NATURAL JOIN typequiz WHERE typequiz.NomTypeQuiz = ?;";
    $request = $db->prepare($sql);
    $request->execute(array($typequiz));
    return $request->fetchAll();
}

function getElement($marque)
{
    $db = connectDB();
    $sql = "SELECT Image FROM marques WHERE NomMarques = ?";
    $request = $db->prepare($sql);
    $request->execute(array($marque));
    return $request->fetchAll();
}

function arrayElement($marque)
{
    $element = getElement($marque);
    $elementreturn = array();
    for ($i = 0; $i < 6; $i++)
    {
        $random = rand(0, count($element) - 1);
        $elementreturn[$i] = $element[$random];
        unset($element[$random]);
    }
    return $elementreturn;
}