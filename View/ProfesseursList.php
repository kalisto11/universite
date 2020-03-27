<h1>Liste des professeurs</h1>
<div>
   <table>
       <tr>
           <th>Prénom</th>
           <th>Nom</th>
           <th>Age</th>
           <th>Matière</th>
           <th>Action</th>
       </tr>
       <?php foreach($professeurs as $professeur): ?>
        <tr>
            <td>
                <a href="index.php?page=professeurs&action=consulter&id=<?= $professeur->id ; ?>">
                    <?= $professeur->prenom ; ?>
                </a>
            </td>
            <td><?= $professeur->nom ; ?></td>
            <td><?= $professeur->age ; ?></td>
            <td><?= $professeur->matiere ; ?></td>
            <td><a href="index.php?page=professeurs&action=supprimer&id=<?= $professeur->id ;?>"><img src="images/icones/delete.png" alt="supprimer" title="Supprimer" class="icone"></a></td>
        </tr>
        <?php endforeach ; ?>
   </table>
</div>
<div class="mt-5">
    <a class="btn btn-warning" href="index.php?page=professeurs&action=ajouter"> <img src="images/icones/add.png" alt="Ajouter" title="Ajouter un nouvel professeur" class="icone"> Ajouter</a>
</div>