<?php get_header(); ?>

<body data-rsssl=1>
    <div class="animsition">

        <!-- ===== HERO ===== -->
        <div id="mainvisual">
            <div id="main_title">
                <div id="LA"><span>SEKAILABO</span></div>
                <p class="hero-tagline">遊び場から、世界をリデザインする。</p>
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
                        <p class="about-lead">グルメSNSメディア「MOGS」を自ら運営するインフルエンサーとして、AI×クリエイティブで飲食業界のDXを支援。「0.1秒で心が動く」クリエイティブへの執着と、現場の熱量——それが、私たちの差別化です。</p>
                        <span class="about-rule"></span>
                        <p class="about-sub">中学来の親友二人が持ち込む「ハシゴ酒」の精神。単なる成功よりも、最高の仲間と最高のプロセスを。その信頼の温度感こそ、SEKAILABO'の根幹です。</p>
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
                <p class="biz-philosophy" data-reveal>すべての事業の根底に「遊び場から、世界をリデザインする」というフィロソフィーが流れています。</p>
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
