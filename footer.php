
    <!-- SCRIPTS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/js/animsition.min.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/js/ui.js"></script>
    <?php if ( is_front_page() ) : ?>
    <script src="<?php echo esc_url(get_template_directory_uri() . '/js/front-motion.js?ver=' . filemtime(get_template_directory() . '/js/front-motion.js')); ?>"></script>
    <?php endif; ?>
    <!-- //SCRIPTS -->

    <?php wp_footer(); ?>
</body>
</html>
