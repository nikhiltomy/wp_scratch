<?php get_header(); ?>

<div id="primary" class="content-area">
    <h5>Single.php</h5>
    <main id="main" class="site-main" role="main">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php get_template_part('template-parts/content',get_post_format()) ?>
        <?php endwhile; else: ?>
            <?php get_template_part('templateparts/content','none') ?>
        <?php endif; ?>
    </main>

</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
