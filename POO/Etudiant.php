<?php
include_once 'Individu.php';

class Etudiant extends Individu {
    private $dateInscription;
    private $niveauEtude;
    private $coursParticipes;

    public function __construct($nom, $prenom, $identifiant, $dateInscription, $niveauEtude) {
        parent::__construct($nom, $prenom, $identifiant);
        $this->dateInscription = $dateInscription;
        $this->niveauEtude = $niveauEtude;
        $this->coursParticipes = [];
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
            $this->coursParticipes[] = $cours;
            $cours->setPlacesRestantes($cours->getPlacesRestantes() - 1);
        } else {
            echo "Plus de places disponibles pour le cours " . $cours->getTitre() . "<br>";
        }
    }

    public function quitter($cours) {
        if (($key = array_search($cours, $this->coursParticipes)) !== false) {
            unset($this->coursParticipes[$key]);
            $cours->setPlacesRestantes($cours->getPlacesRestantes() + 1);
        } else {
            echo "L'étudiant n'est pas inscrit à ce cours<br>";
        }
    }

    public function montrerDetails() {
        echo "Etudiant: " . $this->getNom() . " " . $this->getPrenom() . ", Niveau: " . $this->niveauEtude . "<br>";
    }
}
?>
