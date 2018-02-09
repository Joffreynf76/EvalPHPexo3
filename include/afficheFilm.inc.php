<?php
$db=connectionPDO('localhost' , 'exercice_3' , 'root' , '');
$id = $_GET['id'];
$requete = "SELECT * FROM movies WHERE id_movies= $id";
$result = $db ->query($requete);
$donnees=$result->fetch();
$count = $result ->rowCount();
$lien=$donnees['video'];

if($count=0){
    echo "Ce film n'existe pas";
} else {
    echo ("<h2>".$donnees['title']."</h2>"
          ."<p>".$donnees['actors']."</p>"
          ."<p>".$donnees['director']."</p>"
        ."<p>".$donnees['producer']."</p>"
        ."<p>".$donnees['year_of_prod']."</p>"
        ."<p>".$donnees['language']."</p>"
        ."<p>".$donnees['category']."</p>"
        ."<p>".$donnees['storyline']."</p>"
        ."<a>"."<a href='$lien'>"."Bande annonce</a>"."</p>");
}
unset($db);