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
                    <li><a href="#service" class="closd">BUSINESS</a>
                    </li>
                    <li><a href="<?php echo get_post_type_archive_link('topics'); ?>">TOPICS</a>
                    </li>
                    <li><a href="#aboutUl" class="closd">ABOUT</a>
                    </li>
                </ul>
                <ul id="navi22">
                    <li><a href="<?php echo home_url(); ?>/recruit">RECRUIT</a>
                    </li>
                    <li><a href="<?php echo home_url(); ?>/company">COMPANY</a>
                    </li>
                    <li><a href="<?php echo home_url(); ?>/contact">CONTACT</a>
                    </li>
                </ul>
                <p>FOLLOW ME</p>
                <a href="https://twitter.com/laboratory_Riku" target="_blank"><i class="fab fa-twitter fa-4x"></i></a>
                <a href="https://instagram.com/sekailabo" target="_blank"> <i class="fab fa-instagram fa-4x"></i></a>
            </div>
        </div>
        <!--heddaer-スマホ------------------------------------------------------------->
        <!--heddaer-PC---------------------------------------------------------------->

        <div id="pcGN">
            <div id="navi_icon">
                <a href="<?php echo home_url(); ?>">
                    <h1><span>SEKAILABO.</span></h1>
                </a>

                <div id="naviBox">
                    <ul id="navi1">
                        <li><a href="#message">MESSAGE</a>
                        </li>
                        <li><a href="#service">BUSINESS</a>
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
                        <li><a href="<?php echo home_url(); ?>/contact">CONTACT</a>
                        </li>
                    </ul>
                    <p>FOLLOW ME</p>
                    <a href="https://www.facebook.com" target="_blank" id="fbbtn"><span>facebook</span></a>
                    <a href="https://instagram.com/sekailabo" target="_blank" id="isbtn"><span>instagram</span></a>
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
                    <p>SEKAILABO のメンバーは一人一人に専門分野があり、個性を持っています。
                        <br class="Fpc" />&nbsp;私たちは、お客様の夢の実現をサポートしたい。 必要なのは、Logic(論理)だけでも
                        <br class="Fpc" />&nbsp;Art(デザイン)だけでもありません。 これらを持ったメンバーが、お客様と同じ方向
                        <br class="Fpc" />を向いて作り上げるものこそ最高傑作だと思うのです。
                    </p>
                </div>
            </div>

            <!--------メッセージ--------------------------------------------------->
            <!--------ビジネス----------------------------------------------------->
            <h2 id="service">BUSINESS</h2>
            <ul id="businessUl" class="clear">
                <li id="b1">
                    <span class="biz-num">01</span>
                    <h3>Gourmet Media &amp; Influence</h3>
                    <h4>メディア事業</h4>
                    <p>美食の街・福岡を拠点に、グルメSNSメディア『MOGS』を運営。「0.1秒で指を止める」クリエイティブとAI技術を駆使したナラティブで、ユーザーの「次の一軒」を創り出します。</p>
                </li>
                <li id="b2">
                    <span class="biz-num">02</span>
                    <h3>Restaurant DX Support</h3>
                    <h4>飲食DX支援事業</h4>
                    <p>システム導入が目的ではなく、店主・スタッフの「負担」を減らし、客の「感動」を増やすためのDXを支援。LINE連携ソリューションで順番待ち管理やロイヤリティ施策を実現します。</p>
                </li>
                <li id="b3">
                    <span class="biz-num">03</span>
                    <h3>Creative &amp; SNS Marketing</h3>
                    <h4>クリエイティブ・SNS運用事業</h4>
                    <p>TikTok・Instagram Reels等のショート動画特化型マーケティングで、SNSアカウントを「ファンとの遊び場」へ。ロゴからトーン&amp;マナーまで一貫したブランドストーリーを構築します。</p>
                </li>
                <li id="b4">
                    <span class="biz-num">04</span>
                    <h3>EC &amp; Advertising Strategy</h3>
                    <h4>EC・広告戦略事業</h4>
                    <p>楽天・Amazon等のプラットフォーム最適化からRPP広告のデータドリブン運用まで、ECサイトの立ち上げ〜利益最大化を網羅的にサポート。海外市場を見据えたクロスボーダーECも支援します。</p>
                </li>
            </ul>
            <p id="bizPhilosophy">すべての事業の根底に「遊び場から、世界をリデザインする」というフィロソフィーが流れています。</p>
            <!--------ビジネス----------------------------------------------------->
            <!--------トピックス----------------------------------------------------->
            <h2 id="blog">TOPICS</h2>
            <article>
                <?php
                $args = array(
                    'paged' => $paged, //ページネーションを使いたいなら指定
                    'posts_per_page' => 1, //1記事のみ出力
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
                                    <h3><?php the_title(); ?></h3>
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
                    <?php //-------- WP_query終了-----------
                    wp_reset_postdata();
                endif; ?>
                    <?php
                    $args = array(
                        'paged' => $paged, //ページネーションを使いたいなら指定
                        'posts_per_page' => 1, //1記事のみ出力
                        'post_status' => 'publish', //公開の記事だけ
                        'post_type' => 'topics', //カスタム投稿slag
                        'orderby' => 'date', //日付を出力する基準
                        'offset' => 1,
                    );

                    $the_query = new WP_Query($args);
                    if ($the_query->have_posts()) :
                    ?>

                        <?php global $previousday; //この表記と$previousday = '';で同じ日付の投稿でも表示される
                        while ($the_query->have_posts()) : $the_query->the_post();
                            $previousday = '';
                            //-------- ここから繰り返し---------- 
                        ?>
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
                                    <h3><?php the_title(); ?></h3>
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
                    <?php //-------- WP_query終了-----------
                        wp_reset_postdata();
                    endif; ?>

                    <?php
                    $args = array(
                        'paged' => $paged, //ページネーションを使いたいなら指定
                        'posts_per_page' => 1, //1記事のみ出力
                        'post_status' => 'publish', //公開の記事だけ
                        'post_type' => 'topics', //カスタム投稿slag
                        'orderby' => 'date', //日付を出力する基準
                        'offset' => 2,
                    );

                    $the_query = new WP_Query($args);
                    if ($the_query->have_posts()) :
                    ?>

                        <?php global $previousday; //この表記と$previousday = '';で同じ日付の投稿でも表示される
                        while ($the_query->have_posts()) : $the_query->the_post();
                            $previousday = '';
                            //-------- ここから繰り返し---------- 
                        ?>
                            <li>
                                <a href="<?php the_permalink(); ?>" class="animsition-link">
                                    <div class="blogImg">
                                        <?php if (has_post_thumbnail()) : ?>
                                            <?php the_post_thumbnail('large'); ?>
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
                                        ?></h3>
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
                    <?php //-------- WP_query終了-----------
                        wp_reset_postdata();
                    endif; ?>
                        </ul>
            </article>

            <a href="<?php echo get_post_type_archive_link('topics'); ?>" id="more2">VIEW MORE</a>
            <!--------トピックス----------------------------------------------------->
        </div>

        <div class="about_block">
            <h2 class="a_c">ABOUT US</h2>
            <ul id="aboutUl">
                <li>
                    <p>[ 組織名 ]
                        <br>SEKAILABO'
                        <br class="sp-f-only">[ 連絡先 ]
                        <br>info@sekailabo.com
                        <br>[ 代表者名 ]
                        <br>城谷　陸
                    </p>
                </li>
                <li id="sp-padding">
                    <p>[ 事業内容 ]
                        <br> ・WEBコンサルタント事業
						<br> ・メディア事業
                        <br> ・飲食DX支援事業
                        <br> ・クリエイティブ・SNS運用事業
						<br> ・EC・広告戦略事業
                    </p>
                </li>
            </ul>

            <a href="<?php echo home_url(); ?>/contact/" class="btn">CONTACT</a>

            <p id="copyright">COPYRIGHT &copy; 2026- SEKAILABO'</p>
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

    <!--videoURL: 'szKFtvM9ELw',-->

    <!-- 「jquery.mb.YTPlayer」(youtube動画背景再生)の設定----------------------->
    <div class="mainback">
        <div class="mainvisual__video" id="js-mainvisualVideo" data-property="{
        videoURL:'szKFtvM9ELw',
        quality: 'large',
        containment: 'body',          
        autoPlay: true,
        loop: 2,
        mute: true,
        startAt: 0,
        stopAt: 45,
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