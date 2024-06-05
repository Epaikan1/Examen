<?php
include_once 'Individu.php';

class Enseignant extends Individu {
    private $specialisation;
    private $salaireMensuel;

    public function __construct($nom, $prenom, $identifiant, $specialisation, $salaireMensuel) {
        parent::__construct($nom, $prenom, $identifiant);
        $this->specialisation = $specialisation;
        $this->salaireMensuel = $salaireMensuel;
    }

    public function getSpecialisation() {
        return $this->specialisation;
    }

    public function setSpecialisation($specialisation) {
        $this->specialisation = $specialisation;
    }

    public function getSalaireMensuel() {
        return $this->salaireMensuel;
    }

    public function setSalaireMensuel($salaireMensuel) {
        $this->salaireMensuel = $salaireMensuel;
    }

    public function montrerDetails() {
        echo "Enseignant: " . $this->getNom() . " " . $this->getPrenom() . ", Spécialisation: " . $this->specialisation . ", Salaire: " . $this->salaireMensuel . "<br>";
    }
}
?>
