<?php

require 'sources/managers/photos.php';

class PhotosManager {

    public static function getAllPhotos($id) 
    {
        $db = dbconnect();
        $query = $db->query('SELECT * FROM photos WHERE bien_id='.$id);
        $Photosbyid = $query->fetchAll(PDO::FETCH_CLASS, 'Photos');
        
        //echo '<pre>' , var_dump($Photosbyid) , '</pre>';  

        return $Photosbyid;
    }
}