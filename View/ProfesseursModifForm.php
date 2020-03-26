<form action="index.php" method="post">
    <div class="form-group">
        <label for="prenom">Prénom</label>
        <input type="text" id="prenom" name="prenom" value="<?= $professeur->prenom ;?>">
    </div>
    <div class="form-group">
        <label for="nom">Nom</label>
        <input type="text" id="nom" name="nom" value="<?= $professeur->nom ;?>">
    </div>
    <div class="form-group">
        <label for="age">Age</label>
        <input type="text" id="age" name="age" value="<?= $professeur->age ;?>">
    </div>
    <div class="form-group">
        <label for="matiere">Matiere</label>
        <input type="text" id="matiere" name="matiere" value="<?= $professeur->matiere ;?>">
    </div>
    <input type="hidden" name="id" value="<?= $matiere->id ;?>">
    <input type="hidden" name="page" value="matieres">
    <input type="hidden" name="action" value="modifier">
    <input type="submit" value="Modifier" class="btn btn-success">
</form>