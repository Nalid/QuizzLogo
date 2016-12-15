<?php

require_once 'dbconnection.php';

//Récuperer tout les élément
function getAll() {
    $db = connectDB();
    $sql = "SELECT * FROM marques";
    $request = $db->prepare($sql);
    $request->execute();
    return $request->fetchAll();
}

//Récuperer tout les élément d'un seul type de quiz
function getTypeQuiz($typequiz) {
    $db = connectDB();
    $sql = "SELECT NomMarques, Image FROM marques NATURAL JOIN appartenir NATURAL JOIN typequiz WHERE typequiz.NomTypeQuiz = ?;";
    $request = $db->prepare($sql);
    $request->execute(array($typequiz));
    return $request->fetchAll();
}

//Récuperer la bonne réponse
function getElement($marque) {
    $db = connectDB();
    $sql = "SELECT Image FROM marques WHERE NomMarques = ?";
    $request = $db->prepare($sql);
    $request->execute(array($marque));
    return $request->fetchAll();
}

function insertImage($received, $recievedCat, $recievedName) {
    $db = connectDb();
//    if ($received['error'] != 0) {
//        echo "Erreur durant le transfert du fichier";
//        return false;
//    }
//    // Le fichier est de type image
//    $validType = array('image/jpeg', 'image/jpg', 'image/gif', 'image/png');
//    if (!in_array($received['type'], $validType)) {
//        echo "Format non supporté !";
//        return false;
//    }
//    // Vérifier la taille du fichier
//    if ($received['size'] > 5000000) {
//        echo "Désolé, le fichier est trop gros !";
//        return false;
//    }
    if (move_uploaded_file(
                    $_FILES['addedFile']['tmp_name'], realpath('.') . "/Image/" . $recievedCat . $received['name'])) {
        echo "Le fichier a été correctement traité (fichier)";

        $sql = "INSERT INTO marques(Image,NomMarques) VALUES (?,?)";
        $request = $db->prepare($sql);
        $request->execute(array('Image' => $received['name'], $recievedName));
        $lastID = $db->lastInsertID();

        switch ($recievedCat) {
            case "Sport":
                $cat = 4;
                break;
            case "Mode":
                $cat = 2;
                break;
            case "Voitures":
                $cat = 5;
                break;
            case "Nourriture":
                $cat = 3;
                break;
            case "Electronique":
                $cat = 1;
                break;
        }

        $sqlCat = "INSERT INTO appartenir(idMarque, idTypeQuiz) VALUES (?,?)";
        $requestCat = $db->prepare($sqlCat);
        $requestCat->execute(array($lastID, $cat));
    }
}
