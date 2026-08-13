<?php get_header(); ?>

<body <?php body_class(); ?> data-rsssl=1>
    <div class="animsition">

        <!-- ===== HERO ===== -->
        <div id="mainvisual">
            <div id="main_title">
                <p class="hero-kicker">( SEKAILABO' / BRAND EXPERIENCE &amp; SYSTEM DESIGN )</p>
                <h2 class="hero-tagline">見つけた課題を、<br>伝わる体験と、動く仕組みに。</h2>
                <p class="hero-lead">SEKAILABO' は、現場の声とデータをもとに、ブランド表現・顧客体験・業務システムへ変換するチームです。企画から制作、実装、運用までを横断して伴走します。</p>
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
                        <h2 class="about-headline">現場を見て、<br>データでほどき、<br>表現と仕組みに変える。</h2>
                        <p class="about-lead">私たちの価値は、机上の企画だけで終わらせないこと。実際の現場で起きていることを観察し、声や行動をデータで理解し、伝わる表現と動き続けるシステムへ落とし込みます。</p>
                        <span class="about-rule"></span>
                        <p class="about-sub">グループで運営する MOGS も、飲食・ホスピタリティの現場感覚に触れ続ける代表的なプロジェクトのひとつです。そこで得た問いを、ブランドづくりや顧客体験、業務改善の設計へ自然につなげています。</p>
                    </div>
                    <img class="mogs-accent" src="<?php echo get_template_directory_uri(); ?>/img/mogs.png" alt="MOGS">
                </div>
            </div>
        </section>

        <!-- ===== APPROACH ===== -->
        <section class="fp-section approach-section" id="approach" aria-labelledby="approach-title">
            <div class="fp-inner">
                <div class="section-eyebrow" data-reveal>
                    <span class="section-index">02</span>
                    <span class="section-label">APPROACH</span>
                </div>
                <div class="approach-intro" data-reveal data-reveal-delay="100">
                    <h2 class="approach-headline" id="approach-title">FIELD / DATA / EXPERIENCE / SYSTEM</h2>
                    <p class="approach-lead">現場から見つけた違和感を、整理された課題へ。課題を、伝わる体験へ。体験を、運用できる仕組みへ。SEKAILABO' はこの関係を往復しながら、実装まで進めます。</p>
                </div>
                <ol class="approach-list">
                    <li class="approach-step" data-reveal>
                        <span class="approach-num">01</span>
                        <h3>FIELD</h3>
                        <p>MOGS などの実プロジェクトを通じて、店頭・SNS・運用の現場で起きている声や行動を観察します。</p>
                    </li>
                    <li class="approach-step" data-reveal>
                        <span class="approach-num">02</span>
                        <h3>DATA</h3>
                        <p>投稿反応、導線、業務フロー、顧客接点を構造化し、課題と優先順位を見える状態にします。</p>
                    </li>
                    <li class="approach-step" data-reveal>
                        <span class="approach-num">03</span>
                        <h3>EXPERIENCE</h3>
                        <p>ブランドの言葉、SNS企画、店舗・サービスの顧客体験として、伝わり方と使われ方を設計します。</p>
                    </li>
                    <li class="approach-step" data-reveal>
                        <span class="approach-num">04</span>
                        <h3>SYSTEM</h3>
                        <p>AI、Web、API、自動化を組み合わせ、制作物や施策が継続して動く運用基盤へ実装します。</p>
                    </li>
                </ol>
            </div>
        </section>

        <!-- ===== BUSINESS ===== -->
        <section class="fp-section biz-section" id="service">
            <div class="fp-inner">
                <div class="section-eyebrow" data-reveal>
                    <span class="section-index">03</span>
                    <span class="section-label">BUSINESS</span>
                </div>
                <ul class="biz-list">
                    <li class="biz-row" data-reveal>
                        <span class="biz-num">01</span>
                        <div class="biz-content">
                            <h3>Brand &amp; Content</h3>
                            <p class="biz-ja">ブランド・SNS・ショート動画</p>
                            <p class="biz-desc">ブランドの言葉、投稿企画、SNS運用、ショート動画制作を一貫して設計。伝えたい価値が顧客に届く表現へ整えます。</p>
                        </div>
                    </li>
                    <li class="biz-row" data-reveal>
                        <span class="biz-num">02</span>
                        <div class="biz-content">
                            <h3>Customer Experience</h3>
                            <p class="biz-ja">店舗・飲食店の顧客体験設計</p>
                            <p class="biz-desc">来店前後の導線、SNSプロモーション、再来店施策、運用伴走を設計。MOGPASS など、現場で使われる接点づくりにも取り組みます。</p>
                        </div>
                    </li>
                    <li class="biz-row" data-reveal>
                        <span class="biz-num">03</span>
                        <div class="biz-content">
                            <h3>Digital Operations</h3>
                            <p class="biz-ja">Web・AI・API・自動化</p>
                            <p class="biz-desc">Webサイト、AI活用、API連携、自動化を組み合わせ、軽量なサービスや業務システムを素早く実装します。</p>
                        </div>
                    </li>
                    <li class="biz-row" data-reveal>
                        <span class="biz-num">04</span>
                        <div class="biz-content">
                            <h3>Growth Strategy</h3>
                            <p class="biz-ja">EC・広告・KPI / データ設計</p>
                            <p class="biz-desc">EC、広告運用、KPI設計、データ分析を独立した専門領域として支援。売上と運用判断につながる改善サイクルをつくります。</p>
                        </div>
                    </li>
                </ul>
                <p class="biz-philosophy" data-reveal>現場で見つけた課題を、表現・体験・仕組みのどこからでも実装へ接続します。</p>
                <div class="mogs-project" data-reveal>
                    <div class="mogs-project-copy">
                        <p class="mogs-project-kicker">REPRESENTATIVE PROJECT</p>
                        <h3>MOGS</h3>
                        <p>MOGS は、グループで運営するグルメSNSアカウントです。福岡の飲食店を紹介し、TikTok をはじめとするソーシャルプラットフォームで発信しています。旧名称は「味酒乱」。編集ルールを持って運営しながら、飲食店向けのシステムづくりにも取り組み、年内フォロワー1万人を目指しています。</p>
                    </div>
                    <a href="https://sekailabo.com/links/" class="mogs-project-link" target="_blank" rel="noopener noreferrer">MOGS LINKS</a>
                </div>
            </div>
        </section>

        <!-- ===== REEL ===== -->
        <section class="fp-section showcase-section" id="showcase">
            <div class="fp-inner reel-layout">
                <div class="reel-copy" data-reveal>
                    <div class="section-eyebrow">
                        <span class="section-index">04</span>
                        <span class="section-label">REEL</span>
                    </div>
                    <h2 class="showcase-headline">映像で、<br>熱量の輪郭をつくる。</h2>
                    <p class="showcase-lead">一瞬で心を動かす視点と、手触りのあるストーリー。SNSで生まれる熱量を、ブランドの体験として丁寧に編み直します。</p>
                    <p class="reel-note">Sound off / Scroll to play</p>
                </div>
                <div class="reel-media" data-reveal data-reveal-delay="120">
                    <video class="reel-video" autoplay muted loop playsinline preload="metadata" poster="<?php echo get_template_directory_uri(); ?>/img/hero-reel-poster.jpg" aria-label="SEKAILABO' reel" data-reel-video>
                        <source src="<?php echo get_template_directory_uri(); ?>/bg_mv.mp4" type="video/mp4">
                    </video>
                </div>
            </div>
        </section>

        <!-- ===== TOPICS ===== -->
        <section class="fp-section topics-section" id="blog">
            <div class="fp-inner">
                <div class="section-eyebrow" data-reveal>
                    <span class="section-index">05</span>
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
                    <span class="section-index">06</span>
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
                            ・Brand &amp; Content<br>
                            ・Customer Experience<br>
                            ・Digital Operations<br>
                            ・Growth Strategy
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

    <?php get_footer(); ?>
