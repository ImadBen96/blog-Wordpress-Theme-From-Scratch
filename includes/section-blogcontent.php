<?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>
    <p class="date-post">
        <?php
             echo get_the_date();
        ?>
    </p>

    <?php the_content(); ?>



    <?php endwhile; endif; ?>

