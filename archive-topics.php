<?php get_header(); ?>

<body <?php body_class('sl-topics-page'); ?> data-rsssl="1">
    <div class="sl-topics-shell">
        <?php get_template_part('template-parts/topics', 'header'); ?>
        <main class="sl-topics-main">
            <?php get_template_part('template-parts/topics', 'intro'); ?>
            <section class="sl-topics-feed" aria-labelledby="topics-feed-title">
                <div class="sl-topics-section-head">
                    <p class="sl-kicker"><span>02</span> LATEST NOTES</p>
                    <h2 id="topics-feed-title">すべてのトピックス</h2>
                </div>
                <?php if (have_posts()) : ?>
                    <div class="sl-topics-grid">
                        <?php while (have_posts()) : the_post(); ?>
                            <?php get_template_part('template-parts/topics', 'card'); ?>
                        <?php endwhile; ?>
                    </div>
                    <?php the_posts_pagination(array('mid_size' => 1, 'prev_text' => '← PREV', 'next_text' => 'NEXT →', 'screen_reader_text' => 'トピックスのページ送り')); ?>
                <?php else : ?>
                    <?php get_template_part('template-parts/topics', 'empty'); ?>
                <?php endif; ?>
            </section>
            <?php get_template_part('template-parts/topics', 'contact'); ?>
        </main>
        <?php get_template_part('template-parts/topics', 'footer'); ?>
    </div>

<?php get_footer(); ?>
