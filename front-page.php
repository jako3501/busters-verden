<?php get_header(); ?>

<?php get_fields('page_title'); ?>

<?php while (have_posts()):
    the_post() ?>

    <?php the_content() ?>



    <div class="hero-container">
        <div class="headline">
            <h1>BUSTERS VERDEN</h1>
            <div class="headline-button-box"></div><button>Køb billet her</button>
        </div>
        <div class="slider">
        <?php echo do_shortcode('[metaslider id="32"]'); ?>        </div>
    </div>

    <div class="container2">
        <h2>
            <?php the_field('konkurrence-text') ?>
        </h2>
    </div>

    <div class="container3">
        <h2>
            <?php the_field('resume-headline') ?>
        </h2>
        <p>
            <?php the_field('resume-text') ?>
        </p>
    </div>

    <div class="container4">
        <div class="ticket-box">
            <div class="ticket-box-text">
                <h2>
                    <?php the_field('deltag-headline') ?>
                </h2>
                <p>
                    <?php the_field('deltag-text') ?>
                </p>
                <!-- <p>test</p>
                <input type="text"> -->
                <?php echo do_shortcode('[contact-form-7 id="1a50c5a" title="Konkurrence signup"]') ?>
            </div>

            <svg class="ticketbox-svg"xmlns="http://www.w3.org/2000/svg" width="1439" height="795" viewBox="0 0 1439 795">
                <path id="Subtraction_1" data-name="Subtraction 1"
                    d="M259.6,1503H44a43.963,43.963,0,0,1-44-44V108A43.963,43.963,0,0,1,44,64H259.6c0,.377,0,.761,0,1.175,0,83.626,62.32,151.66,138.922,151.66S537.436,148.8,537.436,65.175c0-.391,0-.775,0-1.175H751a43.964,43.964,0,0,1,44,44V1459a43.963,43.963,0,0,1-44,44H537.432a166.118,166.118,0,0,0-3-30.358,161.061,161.061,0,0,0-8.209-28.262,156.39,156.39,0,0,0-12.862-25.564,150.575,150.575,0,0,0-16.966-22.264,143.281,143.281,0,0,0-20.518-18.364,135.66,135.66,0,0,0-23.519-13.861,128.587,128.587,0,0,0-107.681,0,135.66,135.66,0,0,0-23.519,13.861,143.282,143.282,0,0,0-20.518,18.364,150.548,150.548,0,0,0-16.966,22.264,156.408,156.408,0,0,0-12.863,25.564,161.061,161.061,0,0,0-8.209,28.262,166.113,166.113,0,0,0-3,30.358Z"
                    transform="translate(-64 795) rotate(-90)" fill="#1b2b3b" />
            </svg>

        </div>
    </div>





<?php endwhile; ?>



<?php get_footer() ?>