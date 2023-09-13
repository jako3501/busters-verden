<?php get_header(); ?>

<div class="hero-container">
    <div class="headline">
        <h1>BUSTERS VERDEN</h1>
    </div>
    <div class="slider">
        <?php echo do_shortcode('[metaslider id="32"]'); ?>
    </div>
</div>

<div class="container2">
    
</div>


<?php while (have_posts()):
    the_post() ?>

    <?php the_content() ?>

<?php endwhile; ?>


<?php get_footer() ?>