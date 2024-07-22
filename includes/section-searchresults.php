
<?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>
    <div class="col-md-4">
        <div class="card mb-3">
           <a style="text-decoration: none;color: #000;" href="<?php echo  get_permalink() ?>">
               <?php if(has_post_thumbnail()) : ?>
                   <img src="<?php the_post_thumbnail_url('blog-small'); ?>"
                        alt="<?php the_title(); ?>" class="card-img-top" />
               <?php endif; ?>
               <div class="card-body">
                   <h5 class="card-title"> <?php the_title(); ?></h5>
               </div>
           </a>
        </div>
    </div>

<?php endwhile; else: ?>
    <h1 style="text-align: center;font-size: xxx-large;color: #2e002e;">No Posts Found !!</h1>
<?php endif; ?>
<div class="row">
    <div class="col-md-12">
        <div class="pagination pagination-section">
            <?php
            global $wp_query;
            $big  = 999999999;
            echo paginate_links(
                array(
                    "base"    => str_replace($big, "%#%",esc_url( get_pagenum_link($big) )),
                    "format"  => "?paged=%#%",
                    "current" => max(1,get_query_var("paged")),
                    "total"   => $wp_query->max_num_pages,
                )
            );
            ?>
        </div>
    </div>
</div>



