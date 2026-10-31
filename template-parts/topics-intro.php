<?php
$topics_archive_url = get_post_type_archive_link('topics');
$topics_current_term = is_tax('topics_cat') ? get_queried_object() : null;
$topics_terms = get_terms(array('taxonomy' => 'topics_cat', 'hide_empty' => false));
?>
<section class="sl-topics-hero" aria-labelledby="topics-title">
    <span class="sl-topics-shape sl-topics-shape--circle" aria-hidden="true"></span>
    <span class="sl-topics-shape sl-topics-shape--square" aria-hidden="true"></span>
    <div class="sl-topics-hero-copy">
        <p class="sl-kicker"><span>01</span> JOURNAL / NEWS / WORK</p>
        <h1 id="topics-title">TOPICS</h1>
        <p>現場で考えたこと、つくったこと、日々の知らせを記録します。</p>
    </div>
</section>
<nav class="sl-topics-tabs" aria-label="トピックスのカテゴリ">
    <?php if ($topics_archive_url) : ?>
        <a href="<?php echo esc_url($topics_archive_url); ?>"<?php echo ! $topics_current_term ? ' aria-current="page"' : ''; ?>>ALL</a>
    <?php endif; ?>
    <?php if (! is_wp_error($topics_terms) && $topics_terms) : ?>
        <?php foreach ($topics_terms as $topics_term) : ?>
            <?php $topics_term_url = get_term_link($topics_term); ?>
            <?php if (! is_wp_error($topics_term_url)) : ?>
                <a href="<?php echo esc_url($topics_term_url); ?>"<?php echo ($topics_current_term && (int) $topics_current_term->term_id === (int) $topics_term->term_id) ? ' aria-current="page"' : ''; ?>><?php echo esc_html($topics_term->name); ?></a>
            <?php endif; ?>
        <?php endforeach; ?>
    <?php endif; ?>
</nav>
