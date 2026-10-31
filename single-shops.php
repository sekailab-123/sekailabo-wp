<?php

/**
 * Template Name: トピックス
 * Template Post Type:product,post,page,shops
 */
?>

<?php get_header(); ?>

<body data-rsssl=1>
    <div class="animsition">
        <!--heddaer-スマホ------------------------------------------------------------->
        <div id="spGN">
            <div id="navibar">
                <ul id="navi12">
                    <li><a href="<?php echo home_url(); ?>" class="closd">TOP</a>
                    </li>
                    <li><a href="#message" class="closd">MESSAGE</a>
                    </li>
                    <li><a href="#service" class="closd">SERVICE</a>
                    </li>
                    <li><a href="<?php echo get_post_type_archive_link('topics'); ?>">TOPICS</a>
                    </li>
                    <li><a href="#aboutUl" class="closd">ABOUT</a>
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
            <div id="navi_icon">
                <a href="<?php echo home_url(); ?>">
                    <h1><span>SEKAILABO'</span></h1>
                </a>
                <div id="naviBox">
                    <ul id="navi1">
                        <li><a href="#message">MESSAGE</a>
                        </li>
                        <li><a href="#service">SERVICE</a>
                        </li>
                        <li><a href="<?php echo get_post_type_archive_link('topics'); ?>">TOPICS</a>
                        </li>
                        <li><a href="#aboutUl" class="closd">ABOUT</a>
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
        </div>

        <!------投稿記事----------------------------------------------------------->
        <div class="topics_block">
            <div class="page">
                <h2 id="topics_h2">SHOPS</h2>
                <?php while (have_posts()) : the_post(); ?>
                    <div class="shops__body">
                        <div class="shops__info">
                            <dl>
                                <dt>Category：</dt>
                                <dd>
                                    <ul class="styles">
                                        <li>
                                            <a href=""><?php echo get_the_term_list($post->ID, 'shops_cat'); ?></a>
                                        </li>
                                    </ul>
                                </dd>
                            </dl>
                        </div>
                        <div class="news__blk">
                            <p>
                                <?php the_content(); ?>
                            </p>
                        </div>
                    </div>
                    <div class="page__sns">
                        <ul>
                            <li>
                                <a href="" rel="nofollow" target="_blank">facebook</a>
                            </li>
                            <li>
                                <a href="" target="_blank">twitter</a>
                            </li>
                            <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                        </ul>
                    </div>
                    <div class="btn_back">
                        <a href="https://sannoni.jp/march/">
                            <noscript>
                                <img src="https://sannoni.jp/wp-content/themes/sannoni/img/ico_back.png" alt="">
                            </noscript>
                            <!--<img class="lazyload" src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E' data-src="https://sannoni.jp/wp-content/themes/sannoni/img/ico_back.png" alt="">-->
                        </a>
                    </div>
            </div>
        <?php endwhile; ?>
        </div>


        <!------投稿記事----------------------------------------------------------->

    </div>

    <div class="about_block">
        <h2 class="a_c">ABOUT US</h2>
        <ul id="aboutUl">
            <li>
                <p>[ 屋号 ]
                    <br>SEKAILABO'
                    <br class="sp-f-only">[ 連絡先 ]
                    <br>info@sekailabo.com
                </p>
            </li>
            <li id="sp-padding">
                <p>[ 事業内容 ]
                    <br>SNS・ショート動画 / 飲食店の集客・運用
                    <br>EC・広告運用 / ブランド・Web制作
                </p>
            </li>
        </ul>

        <a href="<?php echo home_url(); ?>/contact/" class="btn">CONTACT</a>

        <p id="copyright">COPYRIGHT &copy; 2022- SEKAILABO'</p>
    </div>

    <!--back to top (トップに戻る)-->
    <div id="fixSocial" class="pc">
        <li>
            <span class="gotop">
                <img src="<?php echo get_template_directory_uri(); ?>/img/BTT.png" alt="BACK TO TOP"></span>
        </li>
    </div>
    <!--back to top 終わり-->
    </div>

    <?php get_footer(); ?>
