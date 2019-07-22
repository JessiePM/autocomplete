<?php
// connexion à la base de données
$db = new PDO('mysql:host=localhost;charset=utf8;dbname=Test', 'Test', 'Test', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
$term = $_GET['term'];

$requete = $db->prepare('SELECT userName FROM salaries WHERE userName LIKE :term'); // requête SQL grâce au mot-clé LIKE
$requete->execute(array('term' => '%'.$term.'%')); // correspond à la saisie dans le input

$array = array(); // création d'un tableau

while($donnee = $requete->fetch()) // boucle pour obtenir les données
{
    array_push($array, $donnee['userName']); // ajout au tableau
}
echo json_encode($array); // conversion en JSON
?>
