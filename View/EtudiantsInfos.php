<h1>Informations sur l'Etudiant</h1>
<div class="container my-5">
    <div class="card">
    <div class="card-header display-4">
        <?= $etudiant->prenom ; ?> <?= $etudiant->nom ; ?>
    </div>
    <div class="card-body">
        <h5 class="card-title">Filière: <?= $etudiant->filiere ; ?></h5>
        <p class="card-text">Age: <?= $etudiant->age ; ?></p>
        <a href="index.php?page=etudiants&action=modifier&id=<?= $etudiant->id ; ?>" class="btn btn-primary">Modifier</a>
    </div>
    </div>
    <div class="mt-5">
        <p class="droite">
            <a class="btn btn-warning" href="index.php?page=etudiants&action=consulter">Voir la liste des étudiants</a>
        </p>
    </div>
</div>