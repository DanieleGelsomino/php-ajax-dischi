<main>

    <!-- sezione select genre -->
    <div class="dg-select">
        <h2 class="dg-text-select">Seleziona il genere che preferisci</h2>
         <select name="genres" class="dg-options">
        <option value="All">All</option>
        <option value="Pop">Pop</option>
        <option value="Metal">Metal</option>
        <option value="Rock">Rock</option>
        <option value="Jazz">Jazz</option>
    </select>
    </div>


    <div class="d-flex justify-content-center">
        <!-- sezione album  -->
    <div class=" dg-container-albums">
       
        <?php 

        foreach($info_discs as $album) { ?>

        <div class="col">
            <div class="dg-card-album">
            <img class="dg-poster" src="<?= $album['poster'] ?>" alt="<?= $album['author'] ?>">
            <h3 class="dg-title"><?= $album['title'] ?></h3>
            <span class="dg-author"><?= $album['author'] ?></span>
            <span class="dg-year"><?= $album['year'] ?></span>
        </div>
        </div>

       <?php } ?>
    </div>
    </div>
</main>