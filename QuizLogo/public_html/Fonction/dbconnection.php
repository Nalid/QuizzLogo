<?php

function connectDb()
{
    $serveur = "127.0.0.1";
    $pseudo = "root";
    $pwd = "";
    $dbname = "dblogo";
    
    static $db = null;
    
    if ($db === null)
    {
        $db = new PDO("mysql:host=$serveur;dbname=$dbname", $pseudo, $pwd);
        $db->exec('SET CHARACTER SET utf8');
    }
    
    return $db;
}