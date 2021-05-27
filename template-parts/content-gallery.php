<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <header class="entry-header">

        <h3><?php the_title() ?></h3>
        <p><?php echo get_post_format(); ?></p>
        <h4>Enjoy The Gallery Here</h4>
        <p><?php the_content();  ?> </p>

    </header>

    <div class="entry-content">

        <p>Lorem.</p>

    </div>

<?php if ( comments_open() ) : ?>
    <?php comments_template(); ?>
<?php endif; ?>
</article>
