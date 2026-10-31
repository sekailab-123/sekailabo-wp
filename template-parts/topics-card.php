<?php $topics_card_terms = get_the_terms(get_the_ID(), 'topics_cat'); ?>
<article class="sl-topic-card" id="post-<?php the_ID(); ?>">
    <a class="sl-topic-card-link" href="<?php echo esc_url(get_permalink()); ?>">
        <div class="sl-topic-card-media">
            <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('medium_large'); ?>
            <?php else : ?>
                <span class="sl-topic-card-fallback" aria-hidden="true"><i></i><b></b><span class="sl-topic-fallback-brand"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/SEKAILABO%27.png" alt="" loading="lazy"></span></span>
            <?php endif; ?>
        </div>
        <div class="sl-topic-card-copy">
            <div class="sl-topic-card-meta">
                <time datetime="<?php echo esc_attr(get_the_date('c')); ?>"><?php echo esc_html(get_the_date()); ?></time>
                <?php if ($topics_card_terms && ! is_wp_error($topics_card_terms)) : ?><span><?php echo esc_html($topics_card_terms[0]->name); ?></span><?php endif; ?>
            </div>
            <h3><?php echo esc_html(get_the_title()); ?></h3>
            <?php $topics_card_excerpt = wp_strip_all_tags(get_the_excerpt()); ?>
            <?php if ($topics_card_excerpt) : ?><p><?php echo esc_html($topics_card_excerpt); ?></p><?php endif; ?>
            <span class="sl-topic-card-arrow" aria-hidden="true">READ →</span>
        </div>
    </a>
</article>
