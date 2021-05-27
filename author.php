<?php get_header(); ?>

<div id="primary" class="content-area">
    <h5> <?php the_archive_title(); ?></h5>
    <main id="main" class="site-main" role="main">
      <?php wp_title(); ?>
        <?php the_author_meta('description',$post -> post_author); ?>
    </main>

</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
