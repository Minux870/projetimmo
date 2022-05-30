<?php 

require 'sources/connexion.php';
require 'sources/managers/BiensManager.php';
//require 'sources/managers/PhotosManager.php';
require 'sources/managers/TypesManager.php';



$Biens_list = BiensManager::getAllBiens();
//$Types_list = TypesManager::getAllTypes($id);
//$Photos_list = PhotosManager::getAllPhotos();

require 'views/IndexView.php';