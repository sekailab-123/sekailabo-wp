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

        <!--------トピックス----------------------------------------------------->
        <h2 id="topcis_h2">TOPICS</h2>

        <div class="p-newsTab">
            <div class="p-newsTab__inner">
                <a class="p-newsTab__item is-current" href="/topics">
                    ALL<span>すべて</span>
                </a>
                <a href="<?php echo home_url(); ?>/topics/news" class="p-newsTab__item ">
                    NEWS<span>お知らせ</span>
                </a>
                <a href="<?php echo home_url(); ?>/topics/works" class="p-newsTab__item ">
                    WORKS<span>制作事例</span>
                </a>
                <a href="<?php echo home_url(); ?>/topics/movie" class="p-newsTab__item ">
                    MOVIE<span>映像制作</span>
                </a>
            </div>
        </div>

        <article>
            <?php
            $args = array(
                'paged' => $paged, //ページネーションを使いたいなら指定
                'posts_per_page' => 15, //15記事のみ出力
                'post_status' => 'publish', //公開の記事だけ
                'post_type' => 'topics', //カスタム投稿slag
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

                    <ul id="blogUl" class="clear">
                        <li>
                            <a href="<?php the_permalink(); ?>" class="animsition-link">
                                <div class="blogImg">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <?php the_post_thumbnail('medium'); ?>
                                    <?php else : ?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/no-image.gif" alt="no-img">
                                    <?php endif; ?>
                                </div>
                                <span class="blogDt"><time datetime="<?php echo get_the_date('Y.m.d'); ?>">
                                        <?php echo get_the_date(); ?>
                                    </time>
                                </span>
                                <h3><?php
                                    if (mb_strlen($post->post_title, 'UTF-8') > 17) {
                                        $title = mb_substr($post->post_title, 0, 17, 'UTF-8');
                                        echo $title . '...';
                                    } else {
                                        echo $post->post_title;
                                    }
                                    ?>
                                </h3>
                                <div class="blogText">
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
