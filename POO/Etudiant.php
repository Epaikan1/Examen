<?php
include_once 'Individu.php';

class Etudiant extends Individu {
    private $dateInscription;
    private $niveauEtude;

    public function __construct($nom, $prenom, $identifiant, $dateInscription, $niveauEtude) {
        parent::__construct($nom, $prenom, $identifiant);
        $this->dateInscription = $dateInscription;
        $this->niveauEtude = $niveauEtude;
    }

    public function getDateInscription() {
        return $this->dateInscription;
    }

    public function setDateInscription($dateInscription) {
        $this->dateInscription = $dateInscription;
    }

    public function getNiveauEtude() {
        return $this->niveauEtude;
    }

    public function setNiveauEtude($niveauEtude) {
        $this->niveauEtude = $niveauEtude;
    }
    public function participer($cours) {
        if ($cours->getPlacesRestantes() > 0) {
            $cours->setPlacesRestantes($cours->getPlacesRestantes() - 1);
        } else {
            echo "Plus de places disponibles pour le cours " . $cours->getTitre() . "<br>";
        }
    }

    public function montrerDetails() {
        echo "Etudiant: " . $this->getNom() . " " . $this->getPrenom() . ", Niveau: " . $this->niveauEtude . "<br>";
    }
}
?>
