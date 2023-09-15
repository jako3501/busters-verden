<?php get_header() ?>

<div class="hero-container">
    <div class="headline">
        <h1>PROGRAM</h1>
    </div>
    <img src="http://wp-template2.local/wp-content/uploads/2023/09/program-heroimg.png" alt="">

</div>

<div class="container2">
    <h2>
        <?php the_field('program-intro') ?>
    </h2>
</div>

<div class="pa-scenen">
    <div class="skuespillere-box">
        <h3>PÅ SCENEN</h3>
        <?php
        $loop = new WP_Query(
            array(
                "post_type" => "skuespiller",
                "posts_per_page" => -1
            )
        );
        ?>
        <?php while ($loop->have_posts()):
            $loop->the_post() ?>
            <h4>
                <?php the_title() ?>
            </h4>
            <p>
                <?php the_field("navn") ?>
            </p>
            <p>
                <?php the_field("navn2") ?>
            </p>
            <p>
                <?php the_field("navn3") ?>
            </p>
            <p>
                <?php the_field("navn4") ?>
            </p>
            <p>
                <?php the_field("navn5") ?>
            </p>
            <p>
                <?php the_field("navn6") ?>
            </p>
            <p>
                <?php the_field("navn7") ?>
            </p>
            <p>
                <?php the_field("navn8") ?>
            </p>
            <p>
                <?php the_field("navn9") ?>
            </p>
            <p>
                <?php the_field("navn10") ?>
            </p>

        <?php endwhile; ?>
        <?php wp_reset_postdata() ?>
    </div>
    <div class="medvirkende-box">
        <h3>PRAKTISKE</h3>
        <?php
        $loop = new WP_Query(
            array(
                "post_type" => "medvirke",
                "posts_per_page" => -1
            )
        );
        ?>
        <?php while ($loop->have_posts()):
            $loop->the_post() ?>
            <h4>
                <?php the_title() ?>
            </h4>
            <p>
                <?php the_field("navn") ?>
            </p>
            <p>
                <?php the_field("navn2") ?>
            </p>
            <p>
                <?php the_field("navn3") ?>
            </p>
            <p>
                <?php the_field("navn4") ?>
            </p>
            <p>
                <?php the_field("navn5") ?>
            </p>
            <p>
                <?php the_field("navn6") ?>
            </p>
            <p>
                <?php the_field("navn7") ?>
            </p>
            <p>
                <?php the_field("navn8") ?>
            </p>
            <p>
                <?php the_field("navn9") ?>
            </p>
            <p>
                <?php the_field("navn10") ?>
            </p>

        <?php endwhile; ?>
        <?php wp_reset_postdata() ?>

    </div>
</div>




<?php get_footer() ?>