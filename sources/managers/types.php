<?php

class Types {

// Propriétés de l'objet
private string $id;
private string $nom;

// Les accesseurs
// Afin de pouvoir lire la valeur d'une propriété ' private' en dehors de sa class, il faut définir un acceseeur pour la propriété :
public function getId(){
    return $this->id;
}
public function getNom(){
    return $this->nom;
}

// Les mutateurs ou setters
// Il prendront toujours au moins un parametre qui servira de nouvelle valeur à la propriété visée :
public function setNom($nom){
    $this->titre = $nom;
}
}