<?php
if(isset($_POST['ajout'])){
    $tabErreur= array();
    $titre=$_POST['titre'];
    $acteur=$_POST['acteur'];
    $realisateur=$_POST['realisateur'];
    $producteur=$_POST['producteur'];
    $annee=$_POST['annee'];
    $langue=$_POST['langue'];
    $categorie=$_POST['categorie'];
    $resume=$_POST['resume'];
    $lien=$_POST['lien'];

    if($titre==""){
        array_push($tabErreur,"Veuillez saisir un titre");
    }
    if($acteur==""){
        array_push($tabErreur,"Veuillez saisir un acteur");
    }
    if($realisateur==""){
        array_push($tabErreur,"Veuillez saisir un réalisateur");
    }
    if($producteur==""){
        array_push($tabErreur,"Veuillez saisir un producteur");
    }
    if($annee==0){
        array_push($tabErreur,"Veuillez choisir une année");
    }
    if($langue==0){
        array_push($tabErreur,"Veuillez choisir une langue");
    }
    if($categorie==0){
        array_push($tabErreur,"Veuillez choisir une catégorie");
    }
    if($resume==""){
        array_push($tabErreur,"Veuillez saisir un résumé");
    }
    if($lien=="" || !filter_var($lien,FILTER_VALIDATE_URL)){
        array_push($tabErreur,"Veuillez saisir une url valide");
    }
    if(count($tabErreur)!=0) {
        $message = "<ul>";
        for ($i = 0; $i < count($tabErreur); $i++) {
            $message .= "<li>" . $tabErreur[$i] . "</li>";
        }
        $message .= "</ul>";
        echo($message);
        include("./include/formFilm.php");
    } else {
        $db=connectionPDO('localhost' , 'exercice_3' , 'root' , '');
        $titre= addslashes(htmlentities($titre));
        $acteur= addslashes(htmlentities($acteur));
        $realisateur= addslashes(htmlentities($realisateur));
        $producteur= addslashes(htmlentities($producteur));
        $resume= addslashes(htmlentities($resume));
        $lien= addslashes(htmlentities($lien));
        $requete="INSERT INTO movies (id_movies,title,actors,director,producer,year_of_prod,`language`,category,storyline,video)
                  VALUES (NULL,'$titre','$acteur','$realisateur','$producteur','$annee','$langue','$categorie','$resume','$lien')";
        $result=$db->query($requete);
        echo "Film ajouté";
        unset($db);

    }


}else{
    include("./include/formFilm.php");
}