<?php get_header(); ?>
<div class="category-title">
    <div class="container">
        <div class="row">
            <h1>Search Résults : ' <?php echo get_search_query(); ?> '</h1>
        </div>
    </div>
</div>
<div class="search-posts">
    <div class="container">

        <div class="post">
            <div class="container">
                <div class="row">
                    <?php get_template_part("includes/section","searchresults") ?>
                </div>
            </div>
        </div>
    </div>
</div>



<?php get_footer(); ?>
