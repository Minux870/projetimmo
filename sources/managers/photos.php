<?php

class Photos {

// Propriétés de l'objet
private string $src;
private string $bien_id;


// Les accesseurs
// Afin de pouvoir lire la valeur d'une propriété ' private' en dehors de sa class, il faut définir un acceseeur pour la propriété :
public function getSrc(){
    return $this->src;
}
public function getBien_id(){
    return $this->bien_id;
}

// Les mutateurs ou setters
// Il prendront toujours au moins un parametre qui servira de nouvelle valeur à la propriété visée :
public function setSrc($src){
    $this->titre = $src;
}
/*public function __toString(){
    return $this->titre;
}*/
public function setBien_id($bien_id){
    $this->prix = $bien_id;
}

}