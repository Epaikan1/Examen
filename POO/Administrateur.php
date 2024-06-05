<?php
include_once 'Enseignant.php';
include_once 'Alertable.php';

class Administrateur extends Enseignant implements Alertable {
    public function __construct($nom, $prenom, $identifiant, $specialisation, $salaireMensuel) {
        parent::__construct($nom, $prenom, $identifiant, $specialisation, $salaireMensuel);
    }

    public function alerterAnnulation($cours) {
        echo "L'administrateur " . $this->getNom() . " " . $this->getPrenom() . " a été alerté de l'annulation du cours " . $cours->getTitre() . "<br>";
    }
}
?>