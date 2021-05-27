
  </div><!-- #content -->

  <footer id="colophon" class="site-footer" role="contentinfo">
        <div>
            <?php dynamic_sidebar('footer-sidebar'); ?>
        </div>
    <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'wphierarchy' ) ); ?>">
      <?php printf( esc_html__( 'Proudly powered by %s', 'wphierarchy' ), 'Nikhil Tomy' ); ?>
    </a>

  </footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
