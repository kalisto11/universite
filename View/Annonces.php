<div class="card" style="width: 18rem;">
    <ul class="list-group list-group-flush">
        <?php foreach ($annonces as $annonce) : ?>
            <li class="list-group-item"><a href="index.php?page=annonces&action=voir&id=<?= $annonce->id ; ?>"><?= $annonce->titre ; ?></a></li>
        <?php endforeach ; ?>
    </ul>
</div>


