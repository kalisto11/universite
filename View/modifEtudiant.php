<form action="index.php" method="post">
    <div class="form-group">
        <label for="prenom">Prénom</label>
        <input type="text" id="prenom" name="prenom" value="<?= $etudiant->prenom ;?>">
    </div>
    <div class="form-group">
        <label for="nom">Nom</label>
        <input type="text" id="nom" name="nom" value="<?= $etudiant->nom ;?>">
    </div>
    <div class="form-group">
        <label for="age">Age</label>
        <input type="text" id="age" name="age" value="<?= $etudiant->age ;?>">
    </div>
    <div class="form-group">
        <label for="filiere">Filière</label>
        <input type="text" id="filiere" name="filiere" value="<?= $etudiant->filiere ;?>">
    </div>
    <input type="hidden" name="id" value="<?= $etudiant->id ;?>">
    <input type="hidden" name="page" value="etudiants">
    <input type="hidden" name="action" value="modifier">
    <input type="submit" value="Modifier" class="btn btn-success">
</form>