<?php

class EtudiantAlertable extends Etudiant implements Alertable {
    public function __construct($nom, $prenom, $identifiant, $dateInscription, $niveauEtude) {
        parent::__construct($nom, $prenom, $identifiant, $dateInscription, $niveauEtude);
    }
// function de d'aunnualtion avec le echo pour afficher le messag !
    public function alerterAnnulation($cours) {
        echo "L'�tudiant " . $this->getNom() . " " . $this->getPrenom() . " a �t� alert� de l'annulation du cours " . $cours->getTitre() . "<br>";
    }
}
?>