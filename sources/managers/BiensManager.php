<?php

require 'sources/managers/biens.php';

class BiensManager {

    public static function getAllBiens() 
    {
        $db = dbconnect();
        $query = $db->query('SELECT Bien.id, titre, prix, surface, nbdepiece, adresse, description, thumbnail, nom FROM Bien LEFT JOIN Type ON Type.id = Bien.type_id');
        $biens = $query->fetchAll(PDO::FETCH_CLASS, 'Bien');
        return $biens;
    }

    public static function getBiensManagerbyId($id){
        $db=dbconnect();
        $bien=$db->query('SELECT Bien.id, titre, prix, surface, nbdepiece, adresse, description, thumbnail, nom FROM Bien LEFT JOIN Type ON Type.id = Bien.type_id WHERE Bien.id='.$id);
        $bien->setFetchMode(PDO::FETCH_CLASS, 'Bien');
        $bienbyid=$bien->fetch();
        //echo '<pre>' , var_dump($bienbyid) , '</pre>';
        return $bienbyid;
    }
}