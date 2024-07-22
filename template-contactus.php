<?php /* Template Name: Contact Us */ ?>

<?php get_header(); ?>
<div class="category-title">
    <div class="container">
        <div class="row">
            <h1><?php echo the_title(); ?></h1>
        </div>
    </div>
</div>
<div class="contact_us mb-5">
    <div class="container">
        <?php get_template_part("includes/section","content") ?>
    </div>
</div>



<?php get_footer(); ?>

