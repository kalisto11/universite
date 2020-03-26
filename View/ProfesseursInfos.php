<h1>Informations sur un Professeur</h1>
<div class="container my-5">
    <div class="card">
    <div class="card-header display-4">
        <?= $professeur->prenom ; ?> <?= $professeur->nom ; ?>
    </div>
    <div class="card-body">
        <h5 class="card-title">Matiere: <?= $professeur->matiere ; ?></h5>
        <p class="card-text">Age: <?= $professeur->age ; ?></p>
        <a href="index.php?page=professeurs&action=modifier&id=<?= $professeur->id ; ?>" class="btn btn-success">Modifier</a>
    </div>
    </div>
    <div class="mt-5">
        <p class="droite">
            <a class="btn btn-warning" href="index.php?page=professeurs&action=consulter">Voir la liste des étudiants</a>
        </p>
    </div>
</div>