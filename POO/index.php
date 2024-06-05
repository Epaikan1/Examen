<?php
include_once 'Individu.php';
include_once 'Etudiant.php';
include_once 'Enseignant.php';
include_once 'Cours.php';
include_once 'Administrateur.php';
include_once 'EtudiantAlertable.php';

$individus = [];
$individus[] = new Etudiant("Dupont", "Jean", 1, date("Y-m-d"), "Licence");
$individus[] = new Enseignant("Martin", "Pierre", 2, "Math�matiques", 2500.00);

foreach ($individus as $individu) {
    $individu->montrerDetails();
}
// Exemple de doneées cours
$cours1 = new Cours("Informatique", "Dr. Smith", 40, 30);
$cours1 = new Cours("Informatique", "Dr. Smith", 40, 30);
$cours1 = new Cours("Informatique", "Dr. Smith", 40, 30);
$cours1 = new Cours("Informatique", "Dr. Smith", 40, 30);
$etudiant = $individus[0];
$etudiant->participer($cours1);
$cours1->montrerDetails();
$etudiant->quitter($cours1);
$cours1->montrerDetails();
// Exemple de doneées Administrateur dont prof
$admin = new Administrateur("Admin", "Admin", 3, "Gestion", 3000.00);
// Exemple de doneées Etudiant

$etudiantAlertable = new EtudiantAlertable("Dupont", "Jean", 1, date("Y-m-d"), "Licence");

$admin->alerterAnnulation($cours1);
$etudiantAlertable->alerterAnnulation($cours1);
?>
