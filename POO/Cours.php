<?php
include_once 'Participable.php';

class Cours implements Participable {
    private $titre;
    private $formateur;
    private $duree;
    private $placesRestantes;

    public function __construct($titre, $formateur, $duree, $placesRestantes) {
        $this->titre = $titre;
        $this->formateur = $formateur;
        $this->duree = $duree;
        $this->placesRestantes = $placesRestantes;
    }

    public function getTitre() {
        return $this->titre;
    }

    public function setTitre($titre) {
        $this->titre = $titre;
    }

    public function getFormateur() {
        return $this->formateur;
    }

    public function setFormateur($formateur) {
        $this->formateur = $formateur;
    }

    public function getDuree() {
        return $this->duree;
    }

    public function setDuree($duree) {
        $this->duree = $duree;
    }

    public function getPlacesRestantes() {
        return $this->placesRestantes;
    }

    public function setPlacesRestantes($placesRestantes) {
        $this->placesRestantes = $placesRestantes;
    }

    public function montrerDetails() {
        echo "Cours: " . $this->titre . " par " . $this->formateur . ", Durée: " . $this->duree . " heures, Places restantes: " . $this->placesRestantes . "<br>";
    }

    public function participer() {
    }

    public function quitter() {
    }
}
?>
