<h1>Modification des informations du professeur</h1>
<div class="container">
    <form action="index.php" method="post">
        <div class="form-group">
            <label for="prenom">Prénom</label>
            <input class="form-control" type="text" id="prenom" name="prenom" value="<?= $professeur->prenom ;?>">
        </div>
        <div class="form-group">
            <label for="nom">Nom</label>
            <input class="form-control" type="text" id="nom" name="nom" value="<?= $professeur->nom ;?>">
        </div>
        <div class="form-group">
            <label for="age">Age</label>
            <input class="form-control" type="text" id="age" name="age" value="<?= $professeur->age ;?>">
        </div>
        <div class="form-group">
            <label for="matiere">Matiere</label>
            <input class="form-control" type="text" id="matiere" name="matiere" value="<?= $professeur->matiere ;?>">
        </div>
        <input type="hidden" name="id" value="<?= $professeur->id ;?>">
        <input type="hidden" name="page" value="professeurs">
        <input type="hidden" name="action" value="modifier">
        <input type="submit" value="Modifier" class="btn btn-success">
    </form>
</div>