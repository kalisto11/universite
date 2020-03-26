<h1>Informations sur l'Etudiant</h1>
<div>
    <p>Prénom: <?= $etudiant->prenom ; ?></p>
    <p>Nom : <?= $etudiant->nom ; ?></p>
    <p>Age: <?= $etudiant->age ; ?></p>
    <p>Filière: <?= $etudiant->filiere ; ?></p>
</div>
<div>
    <a class="btn btn-info" href="index.php?page=etudiants&action=modifier&id=<?= $etudiant->id ; ?>">Modifier</a>
</div>
<div>
    <p class="droite">
    <a class="btn btn-warning" href="index.php?page=etudiants&action=consulter">Voir la liste des étudiants</a>
    </p>
</div>