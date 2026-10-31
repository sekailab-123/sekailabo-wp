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
                <ul id="navi22">
                    <li><a href="<?php echo home_url(); ?>/recruit">RECRUIT</a>
                    </li>
                    <li><a href="<?php echo home_url(); ?>/company">ABOUT</a>
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
                        <li><a href="<?php echo home_url(); ?>/company">ABOUT</a>
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

        <form action="https://docs.google.com/forms/d/e/1FAIpQLSfoOIs3hS_GerhOTX7P5ih6X3vQM0jzA9pGftxvSjtbIhMHkA/formResponse" target="_self" method="POST" id="mG61Hd" jsmodel="TOfxwf Q91hve" data-response="%.@.[]]" data-first-entry="0" data-last-entry="7" data-is-first-page="true">

            <section class="p_inquirement">
                <div class="o_c_s-wrap__inner_1080">
                    <div class="o_c_title__center">
                        <p class="o_c_title__en f_f-cardo">ABOUT</p>
                        <p class="o_c_title__jp">事業概要</p>
                    </div>
                </div>
                <div class="l_header--1080"></div>
                <div class="rec_title">
                    <p></p>
                </div>
                <div class="c-content">
                    <div class="c-content__inner">
                        <table class="c-table">
                            <tr>
                                <th>
                                    <p>屋号</p>
                                </th>
                                <td>
                                    <p>SEKAILABO'</p>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <p>連絡先</p>
                                </th>
                                <td>
                                    <p>info@sekailabo.com</p>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <p>URL</p>
                                </th>
                                <td>
                                    <ul>
                                        <li>https://sekailabo.com</li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <p>事業内容</p>
                                </th>
                                <td>
                                    <ul class="c-list">
                                        <li>SNS・ショート動画</li>
                                        <li>飲食店の集客・運用</li>
                                        <li>EC・広告運用</li>
                                        <li>ブランド・Web制作</li>
                                    </ul>
                                </td>
                            </tr>
                        </table>
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
</body>

</html>
