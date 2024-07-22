<!--<form action="--><?php //echo home_url( '/' ); ?><!--" method="get">-->
<!--    <input class="form-control" type="text" name="s"-->
<!--           value="--><?php //the_search_query(); ?><!--" -->
<!--           required />-->
<!--    <button class="btn btn-dark" type="submit">Search!</button>-->
<!--</form>-->
<form class="d-flex" action="<?php echo home_url( '/' ); ?>" method="get">
    <input class="form-control me-2" name="s" value="<?php the_search_query(); ?>" type="search"
           placeholder="Search" aria-label="Search" required />
    <button class="btn search_btn" type="submit">Search</button>
</form>