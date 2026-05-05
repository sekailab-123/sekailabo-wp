<?php get_header(); ?>

<body <?php body_class(); ?> data-rsssl=1>
    <div class="animsition">

        <!-- ===== HERO ===== -->
        <div id="mainvisual">
            <div id="main_title">
                <p class="hero-kicker">( SEKAILABO' / CREATIVE DIRECTION )</p>
                <h2 class="hero-tagline">感情を編み、<br>体験をデザインする。</h2>
                <p class="hero-lead">映像、SNS、AI を横断しながら、ブランドとコミュニティの熱量をかたちにする。<br>MOGS で育った実感値を、企画から実装まで接続する。</p>
            </div>
            <div class="hero-scroll">
                <span class="scroll-line"></span>
                <span class="scroll-text">SCROLL</span>
            </div>
        </div>

        <!-- ===== SP NAV ===== -->
        <div id="spGN">
            <div id="navibar">
                <ul id="navi12">
                    <li><a href="" class="closd">TOP</a></li>
                    <li><a href="#message" class="closd">ABOUT</a></li>
                    <li><a href="#service" class="closd">BUSINESS</a></li>
                    <li><a href="<?php echo get_post_type_archive_link('topics'); ?>">TOPICS</a></li>
                    <li><a href="#info" class="closd">ABOUT US</a></li>
                </ul>
                <ul id="navi22">
                    <li><a href="<?php echo home_url(); ?>/recruit">RECRUIT</a></li>
                    <li><a href="<?php echo home_url(); ?>/company">COMPANY</a></li>
                    <li><a href="<?php echo home_url(); ?>/contact">CONTACT</a></li>
                </ul>
                <p>FOLLOW ME</p>
                <a href="https://twitter.com/laboratory_Riku" target="_blank"><i class="fab fa-twitter fa-4x"></i></a>
                <a href="https://instagram.com/sekailabo" target="_blank"><i class="fab fa-instagram fa-4x"></i></a>
            </div>
        </div>

        <!-- ===== PC NAV ===== -->
        <div id="pcGN">
            <div id="navi_icon">
                <a href="<?php echo home_url(); ?>">
                    <h1><span>SEKAILABO'</span></h1>
                </a>
                <div id="naviBox">
                    <ul id="navi1">
                        <li><a href="#message">ABOUT</a></li>
                        <li><a href="#service">BUSINESS</a></li>
                        <li><a href="#blog">TOPICS</a></li>
                        <li><a href="#info">ABOUT US</a></li>
                    </ul>
                    <ul id="navi2">
                        <li><a href="<?php echo home_url(); ?>/recruit">RECRUIT</a></li>
                        <li><a href="<?php echo home_url(); ?>/company">COMPANY</a></li>
                        <li><a href="<?php echo home_url(); ?>/contact">CONTACT</a></li>
                    </ul>
                    <p>FOLLOW ME</p>
                    <a href="https://www.facebook.com" target="_blank" id="fbbtn"><span>facebook</span></a>
                    <a href="https://instagram.com/sekailabo" target="_blank" id="isbtn"><span>instagram</span></a>
                </div>
                <div class="btnHamburger">
                    <span class="line line_01"></span>
                    <span class="line line_02"></span>
                    <span class="line line_03"></span>
                </div>
            </div>
        </div>

        <!-- ===== ABOUT ===== -->
        <section class="fp-section about-section" id="message">
            <div class="fp-inner">
                <div class="section-eyebrow" data-reveal>
                    <span class="section-index">01</span>
                    <span class="section-label">ABOUT</span>
                </div>
                <div class="about-layout" data-reveal data-reveal-delay="100">
                    <div class="about-text">
                        <h2 class="about-headline">福岡の路地裏から、<br>世界へ。</h2>
                        <p class="about-lead">MOGS を起点に、SNS・映像・AI を横断しながら、ブランドの世界観を立ち上げる。0.1 秒で心が動く表現と、現場に根づく運用設計までを一気通貫で手がけています。</p>
                        <span class="about-rule"></span>
                        <p class="about-sub">肩肘を張らずに試し、対話しながら磨いていく。その柔らかな熱量と信頼感が、SEKAILABO' のものづくりの土台です。</p>
                    </div>
                    <img class="mogs-accent" src="<?php echo get_template_directory_uri(); ?>/img/mogs.png" alt="MOGS">
                </div>
            </div>
        </section>

        <!-- ===== BUSINESS ===== -->
        <section class="fp-section biz-section" id="service">
            <div class="fp-inner">
                <div class="section-eyebrow" data-reveal>
                    <span class="section-index">02</span>
                    <span class="section-label">BUSINESS</span>
                </div>
                <ul class="biz-list">
                    <li class="biz-row" data-reveal>
                        <span class="biz-num">01</span>
                        <div class="biz-content">
                            <h3>Gourmet Media &amp; Influence</h3>
                            <p class="biz-ja">メディア事業</p>
                            <p class="biz-desc">美食の街・福岡を拠点に、グルメSNSメディア『MOGS』を運営。「0.1秒で指を止める」クリエイティブとAI技術を駆使したナラティブで、ユーザーの「次の一軒」を創り出します。</p>
                        </div>
                    </li>
                    <li class="biz-row" data-reveal>
                        <span class="biz-num">02</span>
                        <div class="biz-content">
                            <h3>Restaurant DX Support</h3>
                            <p class="biz-ja">飲食DX支援事業</p>
                            <p class="biz-desc">システム導入が目的ではなく、店主・スタッフの「負担」を減らし、客の「感動」を増やすためのDXを支援。LINE連携ソリューションで順番待ち管理やロイヤリティ施策を実現します。</p>
                        </div>
                    </li>
                    <li class="biz-row" data-reveal>
                        <span class="biz-num">03</span>
                        <div class="biz-content">
                            <h3>Creative &amp; SNS Marketing</h3>
                            <p class="biz-ja">クリエイティブ・SNS運用事業</p>
                            <p class="biz-desc">TikTok・Instagram Reels等のショート動画特化型マーケティングで、SNSアカウントを「ファンとの遊び場」へ。ロゴからトーン&amp;マナーまで一貫したブランドストーリーを構築します。</p>
                        </div>
                    </li>
                    <li class="biz-row" data-reveal>
                        <span class="biz-num">04</span>
                        <div class="biz-content">
                            <h3>EC &amp; Advertising Strategy</h3>
                            <p class="biz-ja">EC・広告戦略事業</p>
                            <p class="biz-desc">楽天・Amazon等のプラットフォーム最適化からRPP広告のデータドリブン運用まで、ECサイトの立ち上げ〜利益最大化を網羅的にサポート。海外市場を見据えたクロスボーダーECも支援します。</p>
                        </div>
                    </li>
                </ul>
                <p class="biz-philosophy" data-reveal>MOGS で磨いた観察眼と熱量を、企画・制作・運用を横断するクリエイティブへ接続しています。</p>
            </div>
        </section>

        <!-- ===== TOPICS ===== -->
        <section class="fp-section topics-section" id="blog">
            <div class="fp-inner">
                <div class="section-eyebrow" data-reveal>
                    <span class="section-index">03</span>
                    <span class="section-label">TOPICS</span>
                </div>
                <div class="topics-grid" data-reveal>
                <?php
                $args = array(
                    'posts_per_page' => 3,
                    'post_status'    => 'publish',
                    'post_type'      => 'topics',
                    'orderby'        => 'date',
                    'order'          => 'DESC',
                );
                $the_query = new WP_Query($args);
                if ($the_query->have_posts()) :
                    while ($the_query->have_posts()) : $the_query->the_post();
                ?>
                    <a href="<?php the_permalink(); ?>" class="topic-card animsition-link">
                        <div class="topic-img">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('medium'); ?>
                            <?php else : ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/img/no-image.gif" alt="no-img">
                            <?php endif; ?>
                        </div>
                        <div class="topic-body">
                            <time class="topic-date" datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('Y.m.d'); ?></time>
                            <h3 class="topic-title"><?php the_title(); ?></h3>
                            <p class="topic-excerpt"><?php echo na_trim_words(get_the_excerpt(), 60); ?></p>
                        </div>
                    </a>
                <?php
                    endwhile;
                    wp_reset_postdata();
                endif;
                ?>
                </div>
                <a href="<?php echo get_post_type_archive_link('topics'); ?>" class="fp-more-link" data-reveal>VIEW MORE</a>
            </div>
        </section>

        <!-- ===== ABOUT US ===== -->
        <section class="fp-section info-section" id="info">
            <div class="fp-inner">
                <div class="section-eyebrow" data-reveal>
                    <span class="section-index">04</span>
                    <span class="section-label">ABOUT US</span>
                </div>
                <div class="info-grid" data-reveal>
                    <div class="info-col">
                        <p>[ 組織名 ]<br>SEKAILABO'</p>
                        <p>[ 連絡先 ]<br>info@sekailabo.com</p>
                        <p>[ 代表者名 ]<br>城谷　陸</p>
                    </div>
                    <div class="info-col">
                        <p>[ 事業内容 ]<br>
                            ・WEBコンサルタント事業<br>
                            ・メディア事業<br>
                            ・飲食DX支援事業<br>
                            ・クリエイティブ・SNS運用事業<br>
                            ・EC・広告戦略事業
                        </p>
                    </div>
                </div>
                <a href="<?php echo home_url(); ?>/contact/" class="fp-contact-btn" data-reveal>CONTACT</a>
                <p class="fp-copyright">COPYRIGHT &copy; 2026– SEKAILABO'</p>
            </div>
        </section>

        <!-- BACK TO TOP -->
        <div id="fixSocial" class="pc">
            <li>
                <span class="gotop">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/BTT.png" alt="BACK TO TOP">
                </span>
            </li>
        </div>

    </div><!-- /.animsition -->

    <div class="mainback">
        <video id="bgvid" autoplay muted loop playsinline>
            <source src="<?php echo get_template_directory_uri(); ?>/しゅんどる.mov" type="video/quicktime">
            <source src="<?php echo get_template_directory_uri(); ?>/しゅんどる.mov" type="video/mp4">
        </video>
    </div>

    <?php get_footer(); ?>
