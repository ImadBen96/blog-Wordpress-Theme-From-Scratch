<?php get_header(); ?>

     <div class="category-title">
            <div class="container">
                <div class="row">
                    <h1><span style="text-decoration: underline;">Category : </span><?php echo single_cat_title(); ?></h1>
                </div>
            </div>
     </div>


<div class="category-posts">
    <div class="container">

        <div class="post">
            <div class="container">
                <div class="row">
                    <?php get_template_part("includes/section","archive") ?>
                </div>
            </div>
        </div>
    </div>



</div>


<?php get_footer(); ?>
