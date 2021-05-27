<?php get_header(); ?>

<div id="primary" class="content-area">
    <h5>front-page.php</h5>
    <?php

    echo apply_filters('mod_des',bloginfo('description'));
    ?>
    <main id="main" class="site-main" role="main">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php get_template_part('template-parts/content') ?>
        <?php endwhile; else: ?>
            <?php get_template_part('templateparts/content','none') ?>
        <?php endif; ?>
    </main>

</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
