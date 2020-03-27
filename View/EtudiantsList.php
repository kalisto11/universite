<h1>Liste des étudiants</h1>
<div>
   <table>
       <tr>
           <th>Prénom</th>
           <th>Nom</th>
           <th>Age</th>
           <th>Filière</th>
           <th>Action</th>
       </tr>
       <?php foreach($etudiants as $etudiant): ?>
        <tr>
            <td>
                <a href="index.php?page=etudiants&action=consulter&id=<?= $etudiant->id ; ?>">
                    <?= $etudiant->prenom ; ?>
                </a>
            </td>
            <td><?= $etudiant->nom ; ?></td>
            <td><?= $etudiant->age ; ?></td>
            <td><?= $etudiant->filiere ; ?></td>
            <td><a href="index.php?page=etudiants&action=supprimer&id=<?= $etudiant->id ;?>"><img src="images/icones/delete.png" alt="supprimer" title="Supprimer" class="icone"></a></td>
        </tr>
        <?php endforeach ; ?>
   </table>
</div>
<div class="mt-5">
    <a class="btn btn-warning" href="index.php?page=etudiants&action=ajouter"> <img src="images/icones/add.png" alt="Ajouter" title="Ajouter un nouvel étudiant" class="icone"> Ajouter</a>
</div>