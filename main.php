<main>
    <div class=" dg-main">
       

        <?php 

        foreach($info_discs as $album) {

        echo('<div class="dg-albums">' . '<img class="dg-poster" src="' . $album['poster'] .' " alt="poster" ' . '/>' . '<h3 class="dg-title">' . $album['title'] . '</h3>' . '<h4 class="dg-author">' . $album['author'] . '</h4>' . '<h4 class="dg-year">' . $album['year'] . '</h4>' . '</div>' );

        }

        ?>

    </div>



</main>