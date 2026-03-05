
    <!-- SCRIPTS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/jquery.mb.YTPlayer.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/js/animsition.min.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/js/jquery.mb.YTPlayer.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/js/ui.js"></script>
    <script>
        //スマホ・タブレット（iOS・Android）の場合の処理を記述//
        if (!navigator.userAgent.match(/(iPhone|iPad|iPod|Android)/)) {
            //YTplaylerのjsのコードはこれだけ//
            jQuery('#js-mainvisualVideo').YTPlayer();
        }
    </script>
  
    <!-- //SCRIPTS -->

    <?php wp_footer(); ?>
</body>
</html>