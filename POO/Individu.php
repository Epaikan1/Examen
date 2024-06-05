<?php
abstract class Individu {
    private $nom;
    private $prenom;
    private $identifiant;

    public function __construct($nom, $prenom, $identifiant) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->identifiant = $identifiant;
    }

    public function getNom() {
        return $this->nom;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function getPrenom() {
        return $this->prenom;
    }

    public function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    public function getIdentifiant() {
        return $this->identifiant;
    }

    public function setIdentifiant($identifiant) {
        $this->identifiant = $identifiant;
    }

    abstract public function montrerDetails();
}
?>
