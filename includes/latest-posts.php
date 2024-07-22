<?php
// Set the current page number
$paged = (get_query_var('page')) ? get_query_var('page') : 0;

// Arguments for WP_Query
$args = array(
    'post_type' => 'post',      // Post type
    'posts_per_page' => 9,     // Number of posts per page
    'orderby' => 'date',        // Order by date
    'order' => 'DESC',          // Descending order
    'paged' => $paged           // Current page number
);

// Custom query
$the_query = new WP_Query($args);
// the query

?>
<div class="latest-posts">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title">
                    <h1>What’s New</h1>
                </div>
            </div>
        </div>
        <div class="row">

            <?php if ( $the_query->have_posts() ) : ?>
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                <div class="col-md-4">
                    <div class="card mb-3">
                        <a style="text-decoration: none;color: #000;" href="<?php echo  get_permalink() ?>">
                            <?php if(has_post_thumbnail()) : ?>
                                <img style="height: 250px;object-fit: cover;" src="<?php the_post_thumbnail_url('blog-small'); ?>"
                                     alt="<?php the_title(); ?>" class="card-img-top" />
                            <?php endif; ?>
                            <div class="card-body">
                                <h5 class="card-title"> <?php the_title(); ?></h5>
                            </div>
                        </a>
                    </div>

                </div>
            <?php endwhile; ?>
           <?php endif; ?>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="pagination pagination-section">
                    <?php
                    // Pagination
                    $big = 999999999; // need an unlikely integer
                    echo paginate_links(array(
                        'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                        'format' => '?page=%#%',
                        'current' => max(1, get_query_var('page')),
                        'total' => $the_query->max_num_pages,
                        'prev_text' => __('« Prev'),
                        'next_text' => __('Next »')
                    ));

                    ?>
                </div>
            </div>
        </div>
    </div>


</div>


<?php
// Reset post data
wp_reset_postdata();
?>