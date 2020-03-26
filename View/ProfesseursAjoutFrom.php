<h1>Ajouter un nouvel Professeur</h1>
<div class="container">
    <form method="post" action="index.php?page=professeurs">
        <div class="form-group">
            <label for="prenom">Prenom</label>
            <input type="text" id="prenom" name="prenom" class="form-control">
        </div>
        <div class="form-group">
            <label for="nom">nom</label>
            <input type="text" id="prenom" name="nom" class="form-control">
        </div>
        <div class="form-group">
            <label for="age">Age</label>
            <input type="text" id="age" name="age" class="form-control">
        </div>
        <div class="form-group">
            <label for="matiere">Matiére</label>
            <input type="text" id="matiere" name="matiere" class="form-control">
        </div>
        <input type="hidden" name="page" value="professeurs">
        <input type="hidden" name="action" value="ajouter">
        <input type="submit" value="Ajouter" class="btn btn-success">
    </form>
</div>