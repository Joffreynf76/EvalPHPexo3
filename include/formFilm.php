<form method="post" action="#">
    <div>
        <label for="titre">Titre : </label>
        <input type="text" name="titre">
    </div>
    <div>
        <label for="acteur">Acteur : </label>
        <input type="text" name="acteur">
    </div>
    <div>
        <label for="realisateur">Réalisateur : </label>
        <input type="text" name="realisateur">
    </div>
    <div>
        <label for="producteur">Producteur : </label>
        <input type="text" name="producteur">
    </div>
    <div>
        <select name="annee">
            <option value="0">Choix année</option>
            <option value="2010">2010</option>
            <option value="2011">2011</option>
            <option value="2012">2012</option>
            <option value="2013">2013</option>
        </select>
    </div>
    <div>
        <select name="langue">
            <option value="0">Choix langue</option>
            <option value="1">Français</option>
            <option value="2">Anglais</option>
        </select>
    </div>
    <div>
        <select name="categorie">
            <option value="0">Choix catégorie</option>
            <option value="1">Action</option>
            <option value="2">Aventure</option>
        </select>
    </div>
    <div>
        <label for="resume">Résumé : </label>
        <textarea name="resume"></textarea>
    </div>
    <div>
        <label for="lien">Lien BA :</label>
        <input type="text" name="lien">
    </div>
    <input type="submit" value="Valider" name="ajout">

</form>
