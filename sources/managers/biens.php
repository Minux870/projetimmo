<?php

class Bien {

// Propriétés de l'objet
private string $id;
private string $titre;
private float $prix;
private int $surface;
private string $nbdepiece;
private string $adresse;
private string $description;
private string $type_id;

// Les accesseurs
// Afin de pouvoir lire la valeur d'une propriété ' private' en dehors de sa class, il faut définir un accesseur pour la propriété :
public function getId(){
    return $this->id;
}
public function getTitre(){
    return $this->titre;
}
public function getPrix(){
    return $this->prix;
}
public function getSurface(){
    return $this->surface;
}
public function getNbdepiece(){
    return $this->nbdepiece;
}
public function getAdresse(){
    return $this->adresse;
}
public function getDescription(){
    return $this->description;
}
public function getType_id(){
    return $this->type_id;
}
// Les mutateurs ou setters pour modifier une valeur
// Il prendront toujours au moins un parametre qui servira de nouvelle valeur à la propriété visée :
public function setTitre($titre){
    $this->titre = $titre;
}
/*public function __toString(){
    return $this->titre;
}*/
public function setPrix($prix){
    $this->prix = $prix;
}
public function setSurface($surface){
    $this->surface = $surface;
}
public function setNbdepiece($nbdepiece){
    $this->nbdepiece = $nbdepiece;
}
public function setAdresse($adresse){
    $this->adresse = $adresse;
}
public function setDescription($description){
    $this->description = $description;
}
}