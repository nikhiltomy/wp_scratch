<article id="post-<?php the_ID(); ?>" class="post">

    <header class="entry-header">

        <h2> <a href="<?php the_permalink(); ?>">
        <?php the_title(); ?></a>
        </h2>

        <p><?php the_author_posts_link(); ?></p>
        <p><?php the_content();  ?> </p>

    </header>

    <div class="entry-content">

        <p>Lorem.</p>
        <?php the_excerpt(); ?>

    </div>

    <?php if ( comments_open() ) : ?>
        <?php comments_template(); ?>
    <?php endif; ?>
</article>
