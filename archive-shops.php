<?php get_header(); ?>

<body data-rsssl=1>
    <div class="animsition" style="background-color: #fff;">
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
                    <li><a href="#blog">TOPICS</a>
                    </li>
                    <li><a href="#aboutUl" class="closd">ABOUT</a>
                    </li>
                </ul>
                <ul id="navi22">
                    <li><a href="<?php echo home_url(); ?>/recruit">RECRUIT</a>
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

        <div id="pcGN" style="background-color: #fff;">
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
                        <li><a href="#blog">TOPICS</a>
                        </li>
                        <li><a href="#aboutUl" class="closd">ABOUT</a>
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
        </div>

        <!--------トピックス----------------------------------------------------->
        <h2 id="topcis_h2">SHOPS</h2>

        <div class="p-newsTab">
            <div class="p-newsTab__inner">
                <a class="p-newsTab__item is-current" href="/shops">
                    ALL<span>すべて</span>
                </a>
                <a href="<?php echo home_url(); ?>/shops/game" class="p-newsTab__item ">
                    ゲーム<span>GAME</span>
                </a>
                <a href="<?php echo home_url(); ?>/shops/sumaho" class="p-newsTab__item ">
                    スマホ<span>SHMAHO</span>
                </a>
                <a href="<?php echo home_url(); ?>/shops/apple" class="p-newsTab__item ">
                    アップル<span>APPLE</span>
                </a>
            </div>
        </div>

        <article>
            <?php
            $args = array(
                'paged' => $paged, //ページネーションを使いたいなら指定
                'posts_per_page' => 15, //15記事のみ出力
                'post_status' => 'publish', //公開の記事だけ
                'post_type' => 'shops', //カスタム投稿slag
                'orderby' => 'date', //日付を出力する基準
                'order' => 'DESC' //表示する順番（逆はASC）                     
            );

            $the_query = new WP_Query($args);
            if ($the_query->have_posts()) :
            ?>

                <?php global $previousday; //この表記と$previousday = '';で同じ日付の投稿でも表示される
                while ($the_query->have_posts()) : $the_query->the_post();
                    $previousday = '';
                    //-------- ここから繰り返し---------- 
                ?>

                    <ul id="shopUl" class="clear">
                        <li>
                            <a href="<?php the_permalink(); ?>" class="animsition-link">
                                <div class="shopImg">
                                <?php if(have_posts()): while(have_posts()): the_post(); ?>
                                        <?php the_post_thumbnail('medium'); ?>
                                        <?php endwhile; endif; ?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/no-image.gif" alt="no-img">
                                    <?php endif; ?>
                                </div>
                                <h3><?php
                                    if (mb_strlen($post->post_title, 'UTF-8') > 17) {
                                        $title = mb_substr($post->post_title, 0, 17, 'UTF-8');
                                        echo $title . '...';
                                    } else {
                                        echo $post->post_title;
                                    }
                                    ?>
                                </h3>
                                <div class="shopText">
                                    <p><?php
                                        $str = get_the_excerpt();
                                        echo na_trim_words($str, 74); ?>
                                    </p>
                                </div>
                            </a>
                        </li>
                    <?php //-------- 繰り返しここまで-----------
                endwhile; ?>
                <?php else : ?>
                    <p>記事がありません</p>
                <?php //-------- WP_query終了-----------
                wp_reset_postdata();
            endif; ?>
                    </ul>
        </article>
        <!--------トピックス----------------------------------------------------->
    </div>

    <div class="about_block">
        <h2 class="a_c">ABOUT US</h2>
        <ul id="aboutUl">
            <li>
                <p>[ 会社名 ]
                    <br>SEKAILABO'株式会社
                    <br class="sp-f-only">[ 連絡先 ]
                    <br>info@sekailabo.com
                    <br>[ 代表者名 ]
                    <br>代表取締役兼CEO 金本　健二郎
                    <br>取締役兼COO 城谷　陸
                    <br>[ 所在地 ]
                    <br>東京都新宿区西新宿三丁目3番13号 西新宿水間ビル6階
                </p>
            </li>
            <li id="sp-padding">
                <p>[ 資本金 ]
                    <br>200万
                    <!-- <br />[ 設立日 ]
                        <br>令和4年9月16日 -->
                    <br>[ 事業内容 ]
                    <br> WEBコンサルタント事業
                    <br>・Webサイト、Web広告、各種印刷物の企画・制作・運用
                    <br>・各種コンサルティング
                    <br>・各種マーケティング
                </p>
            </li>
        </ul>

        <a href="<?php echo home_url(); ?>/contact/" class="btn">CONTACT</a>

        <p id="copyright">COPYRIGHT &copy; 2022- SEKAILABO'</p>

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