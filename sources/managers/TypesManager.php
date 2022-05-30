<?php

require 'sources/managers/types.php';

class TypesManager {

    public static function getAllTypes($id) 
    {
        $db = dbconnect();
        $query = $db->query('SELECT nom FROM Type');
        $Types = $query->fetchAll(PDO::FETCH_CLASS, 'Types');
        //echo '<pre>' , var_dump($Types) , '</pre>';
        return $Types;
    }
}