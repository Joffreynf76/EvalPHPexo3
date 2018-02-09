<?php
echo "<a href=index.php?page=ajoutFilm>Ajouter un film</a>";

$db=connectionPDO('localhost' , 'exercice_3' , 'root' , '');
$requete = "SELECT * FROM movies";
$result=$db->query($requete);
echo "<table>";
while ($donnees = $result->fetch()){
    $idFilm=$donnees['id_movies'];
    echo ("<tr><td>".$donnees['title']."</td>"."<td>".$donnees['director']."</td>"."<td>".$donnees['year_of_prod']."</td>"
          ."<td><a href=\"index.php?page=afficheFilm&amp;id=$idFilm\">Plus d'infos</a></td>");
}
unset($db);
echo "</table>";