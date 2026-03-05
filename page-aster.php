<?php get_header(); ?>

<body data-rsssl=1>
    <div class="animsition">
        <div id="mainvisual">
            <div id="main_title">
                <div id="LA"><span>SEKAILABO</span></div>
            </div>
            <div id="mouse"></div>
        </div>
        <!--heddaer-スマホ------------------------------------------------------------->
        <div id="spGN">
            <div id="navibar">
                <ul id="navi12">
                    <li><a href="" class="closd">TOP</a>
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
                    <li><a href="<?php echo home_url(); ?>">SEKIALABO.</a>
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
            <div id="navi_icon" id="navi_icon_aster">
                <a href="<?php echo home_url(); ?>/aster/">
                    <h6><span>SEKAILABO.</span></h6>
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
                        <li><a href="<?php echo home_url(); ?>">SEKAILABO.</a>
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


        <!----------メッセージ------------------------------------------------->

        <div class="message_block">
            <div class="message_inner">
                <img src="<?php echo get_template_directory_uri(); ?>/img/LAL.png" id="pc" />
                <img src="<?php echo get_template_directory_uri(); ?>/img/LALsp.png" id="sp" />
                <div id="message">
                    <p>Aster は映像、写真、アートワーク、ヘアメイク共に手掛けるクリエイターチームです。
                        <br class="Fpc" />&nbsp;私たちは、お客様の夢の実現をサポートしたい。 必要なのは、Logic(論理)だけでも
                        <br class="Fpc" />&nbsp;Art(デザイン)だけでもありません。 これらを持ったメンバーが、お客様と同じ方向
                        <br class="Fpc" />を向いて作り上げるものこそ最高傑作だと思うのです。
                    </p>
                </div>
            </div>

            <!--------メッセージ--------------------------------------------------->
            <!--------サービス----------------------------------------------------->
            <h2 id="service">SERVICE</h2>
            <ul id="serviceUl" class="clear">
                <li id="s1">
                    <h3>CREATIVE</h3><img src="<?php echo get_template_directory_uri(); ?>/img/s1.png" class="sImg1" />
                    <h4>デザインの力で成果をつくる、</h4>
                    <h5>『Logic x Art』</h5>
                    <p>お客様の"魅力が自然と伝わる"デザインはもちろん、「知りたい」「欲しい」「会ってみたい」 という行動に繋がるデザインを論理的な視点でアプローチします。</p>
                </li>
                <li id="s2">
                    <h3>PLANNING</h3><img src="<?php echo get_template_directory_uri(); ?>/img/s2.png" class="sImg2" />
                    <h4>お客様一人一人の用途や目的を、</h4>
                    <h5>『明確化』</h5>
                    <p>しっかりとヒアリングを重ねることで、お客様が抱える問題の本質と達成すべきゴールの道筋を立てます。道筋に合わせて映像の構成や'魅せ方'をご提案します。</p>
                </li>
                <li id="s3">
                    <h3>BRANDING</h3><img src="<?php echo get_template_directory_uri(); ?>/img/s3.png" class="sImg3" />
                    <h4>お客様と二人三脚で作る、</h4>
                    <h5>『最高傑作』</h5>
                    <p>私たちは経営者様とチームを組ませていただき、二人三脚でマーケティングの方法を模索します。「映像をつくる」その先のブランディングをお手伝いします。</p>
                </li>
            </ul>
            <!--------サービス----------------------------------------------------->
            <!--------トピックス----------------------------------------------------->
            <h2 id="blog">TOPICS</h2>
            <article>
                <?php
                $custom_posts = get_posts(array(
                    'post_type' => 'topics', // 投稿タイプ
                    'posts_per_page' => 6, // 表示件数
                    'orderby' => 'date', // 表示順の基準
                    'order' => 'DESC', // 昇順・降順
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'topics_cat', //タクソノミーを指定
                            'field' => 'slug', //ターム名をスラッグで指定する
                            'terms' => 'movie', //表示したいタームをスラッグで指定
                            'operator' => 'IN'
                        ),
                    )
                ));
                global $post;
                if ($custom_posts) : foreach ($custom_posts as $post) : setup_postdata($post); ?>

                        <? //-------- ここから繰り返し---------- 
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
                                    <h3 id="post-<?php the_ID(); ?>">
                                        <?php
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
                    endforeach; ?>
                    <?php else : ?>
                        <p>記事がありません</p>
                    <?php //-------- WP_query終了-----------
                    wp_reset_postdata();
                endif; ?>
                        </ul>
            </article>

            <a href="<?php echo home_url(); ?>/topics/movie" id="more2">VIEW MORE</a>
            <!--------トピックス----------------------------------------------------->
        </div>

        <div class="about_block">
            <h2 class="a_c">ABOUT US</h2>
            <ul id="aboutUl">
                <li>
                    <p>[ 会社名 ]
                        <br />Aster.（アスター）
                        <br />[ 連絡先 ]
                        <br />sekailabo.2020@gmail.com
                        <br />[ 代表者名 ]
                        <br />安部 陸
                        <br />[ 所在地 ]
                        <br />東京都
                    </p>
                </li>
                <li id="sp-padding">
                    <p>[ 事業内容 ]
                        <br />映像・写真制作事業
                        <br />[ サービス内容 ]
                        <br />ドローンを使用した空撮、動画制作、静止画制作
                    </p>
                </li>
            </ul>

            <div id="Ul2">
                <h3>株式会社オンデーズ主催CMコンテスト優勝</h3>
                <a href="https://www.owndays.com/jp/ja/news/cmaward" 　target="_blank" rel="noopener noreferrer">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/owndays.svg" alt="">
                </a>
                <p>[お取引様]</p>
                <p>アソビシステム株式会社｜株式会社アミューズ｜株式会社UUUM株式会社｜<br />ソニー・ミュージックエンタテインメント｜日本テレビ音楽株式会社｜</p>
                <p>[掲載]</p>
                <p>YAMAHA　WEB掲載<br />Panasonic WEB掲載</p>
            </div>

            <ul class="brands">
                <li class="brands__item">
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/aumo.png" alt="">
                    </a>
                </li>
                <li class="brands__item">
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/asobi.jpg" alt="">
                    </a>
                </li>
                <li class="brands__item">
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/amuse.gif" alt="">
                    </a>
                </li>
                <li class="brands__item">
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/uuum.png" alt="">
                    </a>
                </li>
                <li class="brands__item">
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/sony.jpg" alt="">
                    </a>
                </li>
                <li class="brands__item">
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/japantv.png" alt="">
                    </a>
                </li>
                <li class="brands__item">
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/positive.jpg" alt="">
                    </a>
                </li>
            </ul>

            <a href="<?php echo home_url(); ?>/contact/" class="btn">CONTACT</a>

            <p id="copyright">COPYRIGHT &copy; 2022- SEKAILABO.</p>
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


    <!-- 「jquery.mb.YTPlayer」(youtube動画背景再生)の設定----------------------->
    <div class="mainback">
        <div class="mainvisual__video" id="js-mainvisualVideo" data-property="{
        videoURL:'CEia_Wg3LBI',
        quality: 'large',
        containment: 'body',          
        autoPlay: true,　　
        loop: 1,
        mute: true,
        startAt: 0,
        opacity: 1,
        showControls: false,
        showYTLogo: false
        }">
            <div class="loading">Loading...</div>
        </div>
        <!--
    ・再生するyoutubeのID or URL
    ・Youtubeを再生させる（埋め込ませる？）要素をbodyにするか否か
    ・自動再生させるか
    ・ループ再生させるか
    ・ミュートにするか
    ・動画の再生位置
    ・透過度合い
    ・再生、停止などのインターフェースを出すかどうか
    ・youtubeの炉画やリンクを表示するかどうか　-->

        <?php get_footer(); ?>