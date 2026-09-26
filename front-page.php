<?php get_header(); ?>

<body <?php body_class(); ?> data-rsssl="1">
    <div class="sl-home">
        <div class="sl-scroll-meter" aria-hidden="true"><i data-sl-meter></i></div>
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
                <div class="sl-hero-geometry" aria-hidden="true">
                    <span class="sl-hero-shape sl-hero-shape--disc" data-sl-depth="0.5"></span>
                    <span class="sl-hero-shape sl-hero-shape--circle" data-sl-depth="0.8"></span>
                    <span class="sl-hero-shape sl-hero-shape--half" data-sl-depth="1.1"></span>
                    <span class="sl-hero-shape sl-hero-shape--square" data-sl-depth="0.5"></span>
                    <span class="sl-hero-shape sl-hero-shape--triangle" data-sl-depth="1.3"></span>
                    <span class="sl-hero-shape sl-hero-shape--bar" data-sl-depth="0.9"></span>
                    <span class="sl-hero-shape sl-hero-shape--dots" data-sl-depth="0.3"></span>
                </div>
                <div class="sl-hero-copy" data-sl-reveal>
                    <p class="sl-kicker"><span>01</span> CREATIVE STUDIO / FUKUOKA</p>
                    <h1 id="sl-hero-title" data-sl-split>人が<em>動く理由</em>を、<br>つくる。</h1>
                    <p class="sl-hero-lead">SEKAILABO' は、福岡のグルメSNS「MOGS」を運営するクリエイティブチーム。発信だけで終わらせず、来店や購入、無理なく続けられる運用まで一緒につくります。</p>
                    <a class="sl-text-link" href="#connect">HOW WE WORK <span aria-hidden="true">↓</span></a>
                </div>
                <figure class="sl-hero-visual" data-sl-reveal data-sl-delay="120">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/hero-key-visual-2026.jpg" alt="SEKAILABO' のキービジュアル">
                    <figcaption><span>FIELD NOTE / 01</span><span>TEAM IN MOTION</span></figcaption>
                </figure>
                <div class="sl-hero-stats" aria-label="SEKAILABO' の領域">
                    <span>FIELD</span><span>DATA</span><span>CREATIVE</span><span>OPERATION</span>
                </div>
            </section>

            <div class="sl-marquee" aria-hidden="true">
                <div class="sl-marquee-track" data-sl-marquee>
                    <?php for ($i = 0; $i < 2; $i++) : ?>
                    <div class="sl-marquee-set">
                        <span>FIELD</span><i class="sl-mq-circle"></i><span>DATA</span><i class="sl-mq-square"></i><span>CREATIVE</span><i class="sl-mq-triangle"></i><span>OPERATION</span><i class="sl-mq-half"></i>
                        <span>FIELD</span><i class="sl-mq-circle"></i><span>DATA</span><i class="sl-mq-square"></i><span>CREATIVE</span><i class="sl-mq-triangle"></i><span>OPERATION</span><i class="sl-mq-half"></i>
                    </div>
                    <?php endfor; ?>
                </div>
            </div>

            <section class="sl-section sl-connect" id="connect" aria-labelledby="sl-connect-title">
                <div class="sl-section-head" data-sl-reveal>
                    <p class="sl-kicker"><span>02</span> WHAT WE DO</p>
                    <h2 id="sl-connect-title">発信とお店を、ひとつの流れに。</h2>
                    <p>SNSで話題になっても、お店や売り場で受け止められなければ続きません。お客さんの声と数字を見ながら、「伝え方」と「受け皿」をセットでつくります。</p>
                </div>
                <div class="sl-connect-map" data-sl-reveal data-sl-delay="100" aria-label="お客さんの声と数字から、発信・体験・運用・成果につなげる図">
                    <div class="sl-map-inputs">
                        <article class="sl-map-node sl-map-field"><span class="sl-node-index">INPUT / 01</span><h3>FIELD</h3><p>お客さんの声・現場の気づき</p></article>
                        <article class="sl-map-node sl-map-data"><span class="sl-node-index">INPUT / 02</span><h3>DATA</h3><p>反応・来店・売上の数字</p></article>
                    </div>
                    <div class="sl-map-engine">
                        <span>OUR TEAM</span>
                        <strong>MAKE &amp; KEEP</strong>
                        <i aria-hidden="true"></i><i aria-hidden="true"></i><i aria-hidden="true"></i>
                    </div>
                    <div class="sl-map-outputs">
                        <article class="sl-map-node"><span class="sl-node-index">OUTPUT / 01</span><h3>CONTENT</h3><p>ショート動画・写真・言葉</p></article>
                        <article class="sl-map-node"><span class="sl-node-index">OUTPUT / 02</span><h3>EXPERIENCE</h3><p>来店・購入までの体験</p></article>
                        <article class="sl-map-node"><span class="sl-node-index">OUTPUT / 03</span><h3>OPERATION</h3><p>Web・LINE・自動化ツール</p></article>
                        <article class="sl-map-node"><span class="sl-node-index">OUTPUT / 04</span><h3>GROWTH</h3><p>EC・広告・改善の積み重ね</p></article>
                    </div>
                </div>
                <figure class="sl-system-storyboard" data-sl-reveal data-sl-delay="140" aria-hidden="true">
                    <svg viewBox="0 0 1200 270" role="presentation" focusable="false" data-system-svg>
                        <g class="sl-system-stage sl-system-stage--field">
                            <text x="18" y="28">01 / SCATTERED VOICES</text>
                            <g data-system-dots>
                                <circle cx="52" cy="95" r="7"></circle><circle cx="126" cy="69" r="5"></circle><circle cx="177" cy="144" r="8"></circle><circle cx="76" cy="202" r="5"></circle><circle cx="222" cy="222" r="6"></circle><circle cx="286" cy="102" r="5"></circle><circle cx="320" cy="175" r="8"></circle>
                            </g>
                        </g>
                        <g class="sl-system-stage sl-system-stage--data">
                            <text x="440" y="28">02 / SORTED OUT</text>
                            <g data-system-grid>
                                <path pathLength="1" d="M440 72H700M440 122H700M440 172H700M440 222H700M480 52V242M540 52V242M600 52V242M660 52V242"></path>
                                <rect x="480" y="72" width="60" height="50"></rect><rect x="600" y="122" width="60" height="50"></rect><rect x="540" y="172" width="60" height="50"></rect>
                            </g>
                        </g>
                        <g class="sl-system-stage sl-system-stage--system">
                            <text x="842" y="28">03 / CONNECTED</text>
                            <g data-system-network>
                                <path pathLength="1" d="M872 96L1005 67L1142 114L1060 213L900 198Z M1005 67L1060 213 M872 96L1060 213 M900 198L1142 114"></path>
                                <circle cx="872" cy="96" r="8"></circle><circle cx="1005" cy="67" r="8"></circle><circle cx="1142" cy="114" r="8"></circle><circle cx="1060" cy="213" r="8"></circle><circle cx="900" cy="198" r="8"></circle>
                            </g>
                        </g>
                        <path class="sl-system-arrow" pathLength="1" d="M364 136H408M720 136H814"></path>
                    </svg>
                </figure>
            </section>

            <section class="sl-section sl-method" id="method" aria-labelledby="sl-method-title">
                <div class="sl-section-head sl-section-head--split" data-sl-reveal>
                    <div><p class="sl-kicker"><span>03</span> METHOD</p><h2 id="sl-method-title">見て、決めて、<br>つくって、続ける。</h2></div>
                    <p>まずはお店や売り場に足を運ぶところから。事業の規模に合わせて、この4つを小さく、速く回します。</p>
                </div>
                <ol class="sl-method-flow" data-sl-reveal data-sl-delay="80">
                    <li><span>01</span><h3>FIELD</h3><p>お店や売り場に立ち、お客さんの動きと声を観察します。</p></li>
                    <li><span>02</span><h3>DATA</h3><p>反応や売上の数字から、いちばん効く一手を絞り込みます。</p></li>
                    <li><span>03</span><h3>CREATIVE</h3><p>動画やデザイン、お店までの導線をつくり、実際のお客さんで試します。</p></li>
                    <li><span>04</span><h3>OPERATION</h3><p>うまくいったやり方を、続けられる運用とツールにして現場に残します。</p></li>
                </ol>
            </section>

            <section class="sl-section sl-projects" id="projects" aria-labelledby="sl-projects-title">
                <div class="sl-section-head" data-sl-reveal>
                    <p class="sl-kicker"><span>04</span> REPRESENTATIVE PROJECTS</p>
                    <h2 id="sl-projects-title">自分たちの現場で、試しています。</h2>
                </div>
                <div class="sl-project-grid">
                    <article class="sl-project sl-project-mogs" data-sl-reveal>
                        <div class="sl-project-number">PROJECT / 01</div>
                        <div class="sl-project-mark" aria-hidden="true">M</div>
                        <div class="sl-project-content"><h3>MOGS</h3><p class="sl-project-subtitle">FUKUOKA GOURMET SNS / 旧名称 味酒乱</p><p>福岡の飲食店を紹介するグルメSNS。お店の魅力を短い動画で伝え、「行ってみたい」が生まれる発信を続けています。</p></div>
                        <figure class="sl-project-reel">
                            <video muted loop playsinline preload="metadata" controls data-reel-video poster="<?php echo esc_url(get_template_directory_uri()); ?>/img/hero-reel-poster.jpg">
                                <source src="<?php echo esc_url(get_template_directory_uri()); ?>/bg_mv.mp4" type="video/mp4">
                            </video>
                            <button class="sl-reel-control" type="button" data-reel-control aria-label="動画を再生">PLAY</button>
                            <figcaption><span>MOGS / SHORT FORM</span><span>FUKUOKA FOOD NOTES</span></figcaption>
                        </figure>
                        <a class="sl-project-link" href="https://sekailabo.com/links/" target="_blank" rel="noopener noreferrer">MOGS LINKS <span aria-hidden="true">↗</span></a>
                    </article>
                    <article class="sl-project sl-project-mogpass" data-sl-reveal data-sl-delay="110">
                        <div class="sl-project-number">PROJECT / 02</div>
                                                <div class="sl-project-content"><h3>MOGPASS</h3><p class="sl-project-subtitle">STORY MENTION × INSTANT COUPON</p><p>お客さんがInstagramのストーリーズでお店をメンションすると、その場で使えるお礼のクーポンがDMで自動で届く飲食店向けサービス。お店は卓上にPOPを置くだけで、来店したお客さんの投稿が口コミとして広がります。</p></div>
                        <figure class="sl-mogpass-demo" aria-labelledby="sl-mogpass-demo-caption">
                            <div class="sl-phone sl-phone--story" aria-hidden="true">
                                <div class="sl-story-bars"><i></i><i></i><i></i></div>
                                <div class="sl-phone-user"><b></b><span>guest_fukuoka</span><em>2分</em></div>
                                <svg class="sl-story-dish" viewBox="0 0 200 200" focusable="false">
                                    <rect class="sl-dish-stick" x="118" y="8" width="7" height="120" transform="rotate(28 121 68)"></rect>
                                    <rect class="sl-dish-stick" x="132" y="10" width="7" height="120" transform="rotate(34 135 70)"></rect>
                                    <circle class="sl-dish-bowl" cx="100" cy="112" r="74"></circle>
                                    <circle class="sl-dish-soup" cx="100" cy="112" r="60"></circle>
                                    <circle class="sl-dish-pork" cx="76" cy="96" r="20"></circle>
                                    <circle class="sl-dish-pork" cx="104" cy="84" r="18"></circle>
                                    <path class="sl-dish-egg" d="M112 128a20 20 0 0 1 40 0z"></path>
                                    <circle class="sl-dish-yolk" cx="132" cy="124" r="8"></circle>
                                    <rect class="sl-dish-nori" x="58" y="118" width="26" height="36" transform="rotate(-14 71 136)"></rect>
                                    <circle class="sl-dish-leek" cx="104" cy="140" r="4"></circle><circle class="sl-dish-leek" cx="116" cy="150" r="4"></circle><circle class="sl-dish-leek" cx="94" cy="154" r="4"></circle><circle class="sl-dish-leek" cx="128" cy="100" r="4"></circle>
                                </svg>
                                <span class="sl-story-mention">@your_restaurant</span>
                                <div class="sl-story-reply"><span>メッセージを送信</span><i>♡</i><i>➤</i></div>
                            </div>
                            <div class="sl-mogpass-arrow" aria-hidden="true"><span>AUTO DM</span><i></i></div>
                            <div class="sl-phone sl-phone--dm" aria-hidden="true">
                                <div class="sl-phone-user sl-phone-user--dm"><b></b><span>your_restaurant</span></div>
                                <div class="sl-dm-mention">あなたがストーリーズでメンションしました</div>
                                <div class="sl-dm-bubble">メンションありがとうございます！🙌</div>
                                <div class="sl-dm-bubble">今すぐ使えるドリンク1杯無料券です🎁</div>
                                <div class="sl-dm-coupon"><small>THANK YOU COUPON</small><strong>DRINK FREE</strong><span>スタッフにこの画面を見せてね</span></div>
                                <div class="sl-dm-reply">ありがとうございます！さっそく使います🍺</div>
                                <div class="sl-dm-input">メッセージ…</div>
                            </div>
                            <figcaption id="sl-mogpass-demo-caption">
                                <span><b>01</b>料理を撮って、ストーリーズでお店をメンション</span>
                                <span><b>02</b>お礼のクーポンがすぐDMに届き、その場で使える</span>
                            </figcaption>
                        </figure>
                        <a class="sl-project-link" href="https://mogpass.up.railway.app/mogpass" target="_blank" rel="noopener noreferrer">VISIT MOGPASS <span aria-hidden="true">↗</span></a>
                    </article>
                </div>
            </section>

            <section class="sl-section sl-services" id="services" aria-labelledby="sl-services-title">
                <div class="sl-section-head sl-section-head--split" data-sl-reveal>
                    <div><p class="sl-kicker"><span>05</span> SERVICES</p><h2 id="sl-services-title">企画から、現場に届くまで。</h2></div>
                    <p>企画だけ、制作だけでは終わらせません。必要なメンバーを組み合わせて、成果が見えるところまで伴走します。</p>
                </div>
                <div class="sl-service-grid">
                    <article data-sl-reveal><span>01 / SNS &amp; VIDEO</span><i class="sl-service-symbol sl-service-symbol--circle" aria-hidden="true"></i><h3>SNS・ショート動画</h3><p>TikTok・Instagramリールの企画と撮影から、アカウントの運用まで。</p></article>
                    <article data-sl-reveal data-sl-delay="60"><span>02 / RESTAURANT</span><i class="sl-service-symbol sl-service-symbol--line" aria-hidden="true"></i><h3>飲食店の集客・運用</h3><p>MOGPASSやLINE連携など、お店の手間を増やさずにお客さんの体験を良くする仕組みを、導入から伴走します。</p></article>
                    <article data-sl-reveal data-sl-delay="120"><span>03 / EC &amp; ADS</span><i class="sl-service-symbol sl-service-symbol--square" aria-hidden="true"></i><h3>EC・広告運用</h3><p>モール店舗の改善から広告運用、越境ECの計画まで。</p></article>
                    <article data-sl-reveal data-sl-delay="180"><span>04 / BRAND &amp; WEB</span><i class="sl-service-symbol sl-service-symbol--half" aria-hidden="true"></i><h3>ブランド・Web制作</h3><p>ロゴやトーンなどブランドの言葉づくりから、Webサイト・LPの制作まで。</p></article>
                </div>
            </section>

            <section class="sl-section sl-journal" id="journal" aria-labelledby="sl-journal-title">
                <div class="sl-section-head" data-sl-reveal>
                    <p class="sl-kicker"><span>06</span> TEAM / NEWS</p>
                    <h2 id="sl-journal-title">得意のちがうメンバーで、<br>ひとつのチームに。</h2>
                </div>
                <div class="sl-journal-top">
                    <article class="sl-team-card" data-sl-reveal>
                        <p class="sl-card-label">INTERDISCIPLINARY TEAM</p>
                        <div class="sl-team-roles"><span>STRATEGY</span><span>CREATIVE</span><span>PRODUCT</span><span>OPERATIONS</span></div>
                        <p>企画、撮影・デザイン、開発、運用。得意のちがうメンバーが同じテーブルで考え、現場で使われるものを形にします。</p>
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
                <span class="sl-contact-symbol sl-contact-symbol--square" aria-hidden="true"></span><span class="sl-contact-symbol sl-contact-symbol--disc" aria-hidden="true"></span>
                <div data-sl-reveal><p class="sl-kicker"><span>07</span> START A CONVERSATION</p><h2 id="sl-contact-title">その<span class="sl-nowrap">「やってみたい」を、</span><br>一緒に形に。</h2></div>
                <a href="<?php echo esc_url(home_url('/contact/')); ?>" data-sl-reveal data-sl-delay="100">CONTACT <span aria-hidden="true">↗</span></a>
                <p class="sl-contact-meta">SNS &amp; VIDEO / RESTAURANT / EC &amp; ADS / BRAND &amp; WEB</p>
            </section>
        </main>

        <footer class="sl-site-footer"><span>© SEKAILABO'</span><span>CREATIVE STUDIO FUKUOKA / 2026</span></footer>
    </div>

    <?php get_footer(); ?>
