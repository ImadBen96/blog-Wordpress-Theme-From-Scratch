<?php get_header(); ?>

<div class="main">
    <?php get_template_part("includes/section","hero") ?>

<!--    <h1>--><?php //the_title(); ?><!--</h1>-->
    <?php get_template_part("includes/section","content") ?>

<!--    --><?php //get_template_part("includes/latest","posts") ?>

    <?php get_template_part("includes/section","footer") ?>
</div>


<?php get_footer(); ?>
