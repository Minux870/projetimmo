<?php

require 'sources/connexion.php';
require 'sources/managers/BiensManager.php';
require 'sources/managers/TypesManager.php';
require 'sources/managers/PhotosManager.php';

$id = $_GET['id'];

$biensingle = BiensManager::getBiensManagerbyId($id);
$typebyid = TypesManager::getAllTypes($id);
$Photosbyid = PhotosManager::getAllPhotos($id);

require 'views/singleView.php';