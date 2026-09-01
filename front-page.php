<?php get_header(); ?>

<body <?php body_class(); ?> data-rsssl="1">
    <div class="sl-home">
        <header class="sl-site-header">
            <a class="sl-logo-plate" href="<?php echo esc_url(home_url('/')); ?>" aria-label="SEKAILABO' トップページ">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/SEKAILABO%27.png" alt="SEKAILABO'">
            </a>
            <nav class="sl-nav" aria-label="メインナビゲーション">
                <a href="#connect">CONNECT</a>
                <a href="#method">METHOD</a>
                <a href="#services">SERVICES</a>
                <a href="#journal">JOURNAL</a>
                <a class="sl-nav-contact" href="<?php echo esc_url(home_url('/contact/')); ?>">CONTACT <span aria-hidden="true">↗</span></a>
            </nav>
            <details class="sl-mobile-nav">
                <summary><span>MENU</span><span class="sl-menu-mark" aria-hidden="true"></span></summary>
                <nav aria-label="モバイルナビゲーション">
                    <a href="#connect">CONNECT</a>
                    <a href="#method">METHOD</a>
                    <a href="#services">SERVICES</a>
                    <a href="#journal">JOURNAL</a>
                    <a href="<?php echo esc_url(home_url('/contact/')); ?>">CONTACT ↗</a>
                </nav>
            </details>
        </header>

        <main>
            <section class="sl-hero" aria-labelledby="sl-hero-title">
                <div class="sl-grid-signal sl-grid-signal-one" aria-hidden="true"></div>
                <div class="sl-grid-signal sl-grid-signal-two" aria-hidden="true"></div>
                <div class="sl-hero-copy" data-sl-reveal>
                    <p class="sl-kicker"><span>01</span> CREATIVE BUSINESS STUDIO / FUKUOKA</p>
                    <h1 id="sl-hero-title">現場の声を、<em>体験と仕組み</em>へ。</h1>
                    <p class="sl-hero-lead">SEKAILABO' は、SNS・コンサルティング・AI/Web・運用設計をつなぎ、事業の体験とシステムをつくるチームです。</p>
                    <a class="sl-text-link" href="#connect">HOW WE CONNECT <span aria-hidden="true">↓</span></a>
                </div>
                <figure class="sl-hero-visual" data-sl-reveal data-sl-delay="120">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/hero-key-visual.jpg" alt="SEKAILABO' のチーム">
                    <figcaption><span>FIELD NOTE / 01</span><span>TEAM IN MOTION</span></figcaption>
                </figure>
                <div class="sl-hero-stats" aria-label="SEKAILABO' の領域">
                    <span>FIELD</span><span>DATA</span><span>CREATIVE</span><span>SYSTEM</span>
                </div>
            </section>

            <section class="sl-section sl-connect" id="connect" aria-labelledby="sl-connect-title">
                <div class="sl-section-head" data-sl-reveal>
                    <p class="sl-kicker"><span>02</span> WHAT WE CONNECT</p>
                    <h2 id="sl-connect-title">観察した現実を、動く事業へ接続する。</h2>
                    <p>ひとつの専門領域だけでは、事業の前進はつくれません。現場と数字、仮説と実装を往復しながら、伝わる体験と続く運用を設計します。</p>
                </div>
                <div class="sl-connect-map" data-sl-reveal data-sl-delay="100" aria-label="FIELD TO SYSTEM の接続図">
                    <div class="sl-map-inputs">
                        <article class="sl-map-node sl-map-field"><span class="sl-node-index">INPUT / 01</span><h3>FIELD</h3><p>顧客の声 / 現場の違和感</p></article>
                        <article class="sl-map-node sl-map-data"><span class="sl-node-index">INPUT / 02</span><h3>DATA</h3><p>KPI・導線 / 運用の記録</p></article>
                    </div>
                    <div class="sl-map-engine">
                        <span>ENGINE</span>
                        <strong>FIELD TO SYSTEM</strong>
                        <i aria-hidden="true"></i><i aria-hidden="true"></i><i aria-hidden="true"></i>
                    </div>
                    <div class="sl-map-outputs">
                        <article class="sl-map-node"><span class="sl-node-index">OUTPUT / 01</span><h3>CONTENT</h3><p>言葉・映像・SNS</p></article>
                        <article class="sl-map-node"><span class="sl-node-index">OUTPUT / 02</span><h3>EXPERIENCE</h3><p>導線・体験・接点</p></article>
                        <article class="sl-map-node"><span class="sl-node-index">OUTPUT / 03</span><h3>SYSTEM</h3><p>Web・AI・運用設計</p></article>
                        <article class="sl-map-node"><span class="sl-node-index">OUTPUT / 04</span><h3>GROWTH</h3><p>EC・広告・データ活用</p></article>
                    </div>
                </div>
            </section>

            <section class="sl-section sl-method" id="method" aria-labelledby="sl-method-title">
                <div class="sl-section-head sl-section-head--split" data-sl-reveal>
                    <div><p class="sl-kicker"><span>03</span> METHOD</p><h2 id="sl-method-title">FIELD → DATA → EXPERIENCE → SYSTEM</h2></div>
                    <p>見つける、読み解く、届ける、動かす。プロジェクトごとに最適な粒度で、この流れを前へ進めます。</p>
                </div>
                <ol class="sl-method-flow" data-sl-reveal data-sl-delay="80">
                    <li><span>01</span><h3>FIELD</h3><p>現場の声や顧客の行動を観察し、問いを見つけます。</p></li>
                    <li><span>02</span><h3>DATA</h3><p>接点やKPIを整理し、優先すべき課題を定めます。</p></li>
                    <li><span>03</span><h3>EXPERIENCE</h3><p>ブランド表現と顧客導線を、使われる体験に変えます。</p></li>
                    <li><span>04</span><h3>SYSTEM</h3><p>Web・AI・運用の仕組みとして、継続できる形にします。</p></li>
                </ol>
            </section>

            <section class="sl-section sl-projects" id="projects" aria-labelledby="sl-projects-title">
                <div class="sl-section-head" data-sl-reveal>
                    <p class="sl-kicker"><span>04</span> REPRESENTATIVE PROJECTS</p>
                    <h2 id="sl-projects-title">現実の場で、試し続ける。</h2>
                </div>
                <div class="sl-project-grid">
                    <article class="sl-project sl-project-mogs" data-sl-reveal>
                        <div class="sl-project-number">PROJECT / 01</div>
                        <div class="sl-project-mark" aria-hidden="true">M</div>
                        <div class="sl-project-content"><h3>MOGS</h3><p class="sl-project-subtitle">FUKUOKA GOURMET SNS / 旧名称 味酒乱</p><p>福岡の飲食店を紹介するグルメSNS。店の魅力を編集し、楽しい発見につながる発信を続けています。</p></div>
                        <a class="sl-project-link" href="https://sekailabo.com/links/" target="_blank" rel="noopener noreferrer">MOGS LINKS <span aria-hidden="true">↗</span></a>
                    </article>
                    <article class="sl-project sl-project-mogpass" data-sl-reveal data-sl-delay="110">
                        <div class="sl-project-number">PROJECT / 02</div>
                        <div class="sl-project-content"><h3>MOGPASS</h3><p class="sl-project-subtitle">MENTION-LED RESTAURANT SERVICE</p><p>Instagramでのメンションを起点にクーポンを届け、プロフィール閲覧・口コミ・再訪へつながる体験と、店舗に寄り添う継続運用を設計するサービスです。</p></div>
                        <a class="sl-project-link" href="https://mogpass.up.railway.app/mogpass" target="_blank" rel="noopener noreferrer">VISIT MOGPASS <span aria-hidden="true">↗</span></a>
                    </article>
                </div>
            </section>

            <section class="sl-section sl-services" id="services" aria-labelledby="sl-services-title">
                <div class="sl-section-head sl-section-head--split" data-sl-reveal>
                    <div><p class="sl-kicker"><span>05</span> SERVICES</p><h2 id="sl-services-title">領域をまたぎ、実装まで。</h2></div>
                    <p>構想だけ、制作だけで終わらせず、必要な専門を組み合わせて前に進めます。</p>
                </div>
                <div class="sl-service-grid">
                    <article data-sl-reveal><span>01 / STRATEGY</span><h3>事業・ブランド設計</h3><p>事業の整理、ブランドの言葉、顧客との接点設計。</p></article>
                    <article data-sl-reveal data-sl-delay="60"><span>02 / COMMUNICATION</span><h3>SNS・映像・コミュニケーション</h3><p>SNS運用、映像制作、ブランドの伝え方の設計。</p></article>
                    <article data-sl-reveal data-sl-delay="120"><span>03 / PRODUCT</span><h3>Web・AI・運用システム</h3><p>Web・LP・採用サイト、AI/API/自動化の開発支援。</p></article>
                    <article data-sl-reveal data-sl-delay="180"><span>04 / GROWTH</span><h3>EC・広告・データ活用</h3><p>複数モールを含むEC運用、広告、データを使う改善。</p></article>
                </div>
            </section>

            <section class="sl-section sl-journal" id="journal" aria-labelledby="sl-journal-title">
                <div class="sl-section-head" data-sl-reveal>
                    <p class="sl-kicker"><span>06</span> TEAM / INSIGHTS / NEWS</p>
                    <h2 id="sl-journal-title">違う視点が、前進をつくる。</h2>
                </div>
                <div class="sl-journal-top">
                    <article class="sl-team-card" data-sl-reveal>
                        <p class="sl-card-label">INTERDISCIPLINARY TEAM</p>
                        <div class="sl-team-roles"><span>STRATEGY</span><span>CREATIVE</span><span>PRODUCT</span><span>OPERATIONS</span></div>
                        <p>戦略、制作、プロダクト、運用。それぞれの視点を行き来しながら、現場で使われる解決策をつくります。</p>
                    </article>
                    <div class="sl-insights" data-sl-reveal data-sl-delay="100">
                        <p class="sl-card-label">INSIGHTS / IN PROGRESS</p>
                        <div class="sl-insight-slots" aria-label="制作中のインサイト">
                            <article><span>01</span><div class="sl-insight-shape sl-insight-shape--circle"></div><p>FIELD SIGNAL</p></article>
                            <article><span>02</span><div class="sl-insight-shape sl-insight-shape--bars"></div><p>FLOW DESIGN</p></article>
                            <article><span>03</span><div class="sl-insight-shape sl-insight-shape--grid"></div><p>SYSTEM NOTE</p></article>
                        </div>
                    </div>
                </div>
                <div class="sl-news" data-sl-reveal>
                    <div class="sl-news-heading"><p class="sl-card-label">LATEST NEWS</p><a href="<?php echo esc_url(get_post_type_archive_link('topics')); ?>">ALL TOPICS <span aria-hidden="true">↗</span></a></div>
                    <div class="sl-news-list">
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
                            <a class="sl-news-item animsition-link" href="<?php the_permalink(); ?>">
                                <time datetime="<?php echo esc_attr(get_the_date('Y-m-d')); ?>"><?php echo esc_html(get_the_date('Y.m.d')); ?></time>
                                <span><?php the_title(); ?></span><b aria-hidden="true">↗</b>
                            </a>
                        <?php
                            endwhile;
                            wp_reset_postdata();
                        else :
                        ?>
                            <p class="sl-news-empty">最新のお知らせは準備中です。</p>
                        <?php endif; ?>
                    </div>
                </div>
            </section>

            <section class="sl-contact" aria-labelledby="sl-contact-title">
                <div data-sl-reveal><p class="sl-kicker"><span>07</span> START A CONVERSATION</p><h2 id="sl-contact-title">次の現実を、一緒に動かそう。</h2></div>
                <a href="<?php echo esc_url(home_url('/contact/')); ?>" data-sl-reveal data-sl-delay="100">CONTACT <span aria-hidden="true">↗</span></a>
                <p class="sl-contact-meta">SNS / CONSULTING / AI-WEB / OPERATIONS DESIGN</p>
            </section>
        </main>

        <footer class="sl-site-footer"><span>© SEKAILABO'</span><span>FIELD TO SYSTEM / 2026</span></footer>
    </div>

    <?php get_footer(); ?>
