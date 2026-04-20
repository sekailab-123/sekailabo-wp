<?php get_header(); ?>

<body class="form">
    <div class="animsition">
        <!--heddaer-スマホ------------------------------------------------------------->
        <div id="spGN">
            <div id="navibar">
                <ul id="navi12">
                    <li><a href="<?php echo home_url(); ?>" class="closd">TOP</a>
                    </li>
                    <li><a href="<?php echo home_url(); ?>/#message" class="closd">MESSAGE</a>
                    </li>
                    <li><a href="<?php echo home_url(); ?>/#service" class="closd">SERVICE</a>
                    </li>
                    <li><a href="<?php echo get_post_type_archive_link('topics'); ?>">TOPICS</a>
                    </li>
                    <li><a href="<?php echo home_url(); ?>/#aboutUl" class="closd">ABOUT</a>
                    </li>
                </ul>
                <ul id="navi22" <li><a href="<?php echo home_url(); ?>/recruit">RECRUIT</a>
                    </li>
                    <li><a href="<?php echo home_url(); ?>/company">COMPANY</a>
                    </li>
                    <li><a href="<?php echo home_url(); ?>/contact/">CONTACT</a>
                    </li>
                </ul>
                <p>FOLLOW ME</p>
                <a href="https://www.facebook.com" target="_blank" id="fbbtn"><span>facebook</span></a>
                <a href="https://instagram.com/sekailabo" target="_blank" id="isbtn"><span>instagram</span></a>
            </div>
        </div>
        <!--heddaer-スマホ------------------------------------------------------------->
        <!--heddaer-PC---------------------------------------------------------------->

        <div id="pcGN">
            <a href="<?php echo home_url(); ?>">
                <h1><span>SEKAILABO'</span></h1>
            </a>
            <div id="naviBox">
                <ul id="navi1">
                    <li><a href="<?php echo home_url(); ?>/#messeage">MESSAGE</a>
                    </li>
                    <li><a href="<?php echo home_url(); ?>/#service">SERVICE</a>
                    </li>
                    <li><a href="<?php echo get_post_type_archive_link('topics'); ?>">TOPICS</a>
                    </li>
                    <li><a href="<?php echo home_url(); ?>/#aboutUl" class="closd">ABOUT</a>
                    </li>
                </ul>

                <ul id="navi2">
                    <li><a href="<?php echo home_url(); ?>/recruit">RECRUIT</a>
                    </li>
                    <li><a href="<?php echo home_url(); ?>/company">COMPANY</a>
                    </li>
                    <li><a href="<?php echo home_url(); ?>/contact/">CONTACT</a>
                    </li>
                </ul>
                <p>FOLLOW ME</p>
                <a href="https://www.facebook.com" target="_blank" id="fbbtn"><span>facebook</span></a>
                <a href="https://www.instagram.com/sekailabo" target="_blank" id="isbtn"><span>instagram</span></a>
            </div>

            <!---heddaer-PC--------------------------------------------------------------->

            <div class="btnHamburger">
                <span class="line line_01"></span>
                <span class="line line_02"></span>
                <span class="line line_03"></span>
            </div>
        </div>

        <section class="p_inquirement">
            <div class="o_c_s-wrap__inner_1080">
                <div class="o_c_title__center">
                    <p class="o_c_title__en f_f-cardo">Inquirement</p>
                    <p class="o_c_title__jp">お問い合わせ</p>
                </div>
            </div>
            <div class="l_header--1080"></div>
            <div class="o_c_s-wrap__inner_860">
                <div id="mw_wp_form_mw-wp-form-82" class="mw_wp_form mw_wp_form_input  ">
                    <p class="o_c_f-inquirement__caution">この度は当店のホームページをご覧頂き<br class="sp">ありがとうございます。<br />以下のお問い合わせフォームに<br class="sp">ご質問内容などをご記入の上、<br class="sp">送信してください。</p>
                    <p class="o_c_f-inquirement__caution__preview">入力内容をご確認の上、よろしければ「送信」ボタンを押してください。<br /> 入力をやり直す場合は、フォーム下部の[戻る]ボタンを押して入力画面に戻り、再度入力してください。</p>
                    <?php echo do_shortcode('[mwform_formkey key="170"]'); ?>
                </div>
            </div>
        </section>
    </div>
    <p id="copyright">COPYRIGHT &copy; 2022- SEKAILABO'</p>
    </form>
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
    </div>
    <?php wp_footer(); ?>
</body>

</html>