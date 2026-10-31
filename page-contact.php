<?php get_header(); ?>

<body <?php body_class('sl-contact-page'); ?> data-rsssl="1">
    <div class="sl-home sl-contact-shell">
        <header class="sl-site-header">
            <a class="sl-logo-plate" href="<?php echo esc_url(home_url('/')); ?>" aria-label="SEKAILABO' トップページ">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/SEKAILABO%27.png" alt="SEKAILABO'">
            </a>
            <nav class="sl-nav" aria-label="メインナビゲーション">
                <a href="<?php echo esc_url(home_url('/#connect')); ?>">CONNECT</a>
                <a href="<?php echo esc_url(home_url('/#method')); ?>">METHOD</a>
                <a href="<?php echo esc_url(home_url('/#services')); ?>">SERVICES</a>
                <a href="<?php echo esc_url(home_url('/#journal')); ?>">JOURNAL</a>
                <a class="sl-nav-contact" href="<?php echo esc_url(home_url('/contact/')); ?>" aria-current="page">CONTACT <span aria-hidden="true">↗</span></a>
            </nav>
            <details class="sl-mobile-nav">
                <summary><span>MENU</span><span class="sl-menu-mark" aria-hidden="true"></span></summary>
                <nav aria-label="モバイルナビゲーション">
                    <a href="<?php echo esc_url(home_url('/#connect')); ?>">CONNECT</a>
                    <a href="<?php echo esc_url(home_url('/#method')); ?>">METHOD</a>
                    <a href="<?php echo esc_url(home_url('/#services')); ?>">SERVICES</a>
                    <a href="<?php echo esc_url(home_url('/#journal')); ?>">JOURNAL</a>
                    <a href="<?php echo esc_url(home_url('/contact/')); ?>" aria-current="page">CONTACT ↗</a>
                </nav>
            </details>
        </header>

        <main class="sl-contact-main">
            <section class="sl-contact-hero" aria-labelledby="contact-title">
                <span class="sl-contact-orb sl-contact-orb--red" aria-hidden="true"></span>
                <span class="sl-contact-orb sl-contact-orb--yellow" aria-hidden="true"></span>
                <div>
                    <p class="sl-kicker"><span>01</span> START A CONVERSATION</p>
                    <h1 id="contact-title">一緒に、<em>次の一手</em>を考えましょう。</h1>
                    <p>ご相談の内容がまだまとまっていなくても大丈夫です。現場のこと、発信のこと、これから試してみたいことをお聞かせください。</p>
                </div>
                <aside class="sl-contact-side" aria-label="対応領域">
                    <span>FIELD / DATA / CREATIVE / OPERATION</span>
                    <strong>CONTACT US</strong>
                </aside>
            </section>

            <section class="sl-contact-form-section" aria-labelledby="contact-form-title">
                <div class="sl-contact-form-intro">
                    <p class="sl-kicker"><span>02</span> YOUR MESSAGE</p>
                    <h2 id="contact-form-title">お問い合わせ</h2>
                    <p>入力内容をご確認のうえ送信してください。入力を修正する場合は、確認画面の「戻る」から戻れます。</p>
                </div>
                <div class="sl-contact-form-wrap">
                    <?php echo do_shortcode('[mwform_formkey key="170"]'); ?>
                </div>
            </section>
        </main>

        <footer class="sl-site-footer"><span>© SEKAILABO'</span><span>CREATIVE STUDIO FUKUOKA / 2026</span></footer>
    </div>

<?php get_footer(); ?>
