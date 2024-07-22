<?php get_header(); ?>
<div class="category-title">
    <div class="container">
        <div class="row">
            <h1><?php echo the_title(); ?></h1>
        </div>
    </div>
</div>
<div class="blog-content mb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-9 order-sm-last order-xl-last order-last">
                <?php if(has_post_thumbnail()) : ?>
                    <div style="background-image: url(<?php the_post_thumbnail_url('blog-large'); ?>)" class="blog-thumbnail">
                    </div>
                <?php endif; ?>

                <?php get_template_part("includes/section","blogcontent") ?>
                <div class="navigation_links">
                    <div class="left mb-2">
                        <b>Previous Post : </b> <?php previous_post_link(); ?>
                    </div>
                    <div class="right">
                        <b>Next Post : </b> <?php next_post_link(); ?>
                    </div>
                </div>

            </div>
            <div class="col-md-3 order-sm-last order-xl-last order-lg-last">
                    <div class="search">
                        <p style="font-size: 19px;font-weight: bold;text-decoration: underline;" class="label-search">Search : </p>
                        <?php get_search_form(); ?>
                    </div>
                    <div class="all_categories mt-5 mb-5">
                        <p style="font-size: 19px;font-weight: bold;text-decoration: underline;">Categories : </p>
                        <ul>
                        <?php
                        $categories = get_the_category();
                        if ($categories) {
                            foreach ($categories as $category) { ?>
                                <li>
                                    <a style="color: #000;font-size: 19px;" class="category_name"
                                       href="<?php echo esc_attr( get_category_link( $category->term_id ) ) ?>">
                                        <?php
                                        echo $category->name
                                        ?>
                                    </a>
                                </li>
                            <?php }
                        }
                        ?>


                        </ul>
                    </div>
            </div>
        </div>
    </div>
</div>


<?php get_footer(); ?>
