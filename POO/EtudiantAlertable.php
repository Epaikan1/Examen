<?php

class EtudiantAlertable extends Etudiant implements Alertable {
    public function __construct($nom, $prenom, $identifiant, $dateInscription, $niveauEtude) {
        parent::__construct($nom, $prenom, $identifiant, $dateInscription, $niveauEtude);
    }
// function de d'aunnualtion avec le echo pour afficher le messag !
    public function alerterAnnulation($cours) {
        echo "L'étudiant " . $this->getNom() . " " . $this->getPrenom() . " a été alerté de l'annulation du cours " . $cours->getTitre() . "<br>";
    }
}
?>