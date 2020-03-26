<h1>Ajouter un nouvel étudiant</h1>
<div class="container">
    <form method="post" action="index.php?page=etudiants">
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
            <label for="filiere">Filière</label>
            <input type="text" id="filiere" name="filiere" class="form-control">
        </div>
        <input type="hidden" name="page" value="etudiants">
        <input type="hidden" name="action" value="ajouter">
        <input type="submit" value="Ajouter" class="btn btn-success">
    </form>
</div>