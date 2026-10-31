<?php
/**
 * Template Name: トピックス
 * Template Post Type: product,post,page,topics
 */
get_header();
?>

<body <?php body_class('sl-topics-page sl-topics-single-page'); ?> data-rsssl="1">
    <div class="sl-topics-shell">
        <?php get_template_part('template-parts/topics', 'header'); ?>
        <main class="sl-topics-main">
            <?php while (have_posts()) : the_post(); ?>
                <?php $topics_terms = get_the_terms(get_the_ID(), 'topics_cat'); ?>
                <article class="sl-topic-article" id="post-<?php the_ID(); ?>">
                    <header class="sl-topic-article-head">
                        <p class="sl-kicker"><span>TOPICS</span> FIELD NOTE</p>
                        <div class="sl-topic-meta">
                            <time datetime="<?php echo esc_attr(get_the_date('c')); ?>"><?php echo esc_html(get_the_date()); ?></time>
                            <?php if ($topics_terms && ! is_wp_error($topics_terms)) : ?>
                                <span aria-hidden="true">/</span>
                                <span class="sl-topic-terms">
                                    <?php foreach ($topics_terms as $topics_term) : ?>
                                        <?php $topics_term_link = get_term_link($topics_term); ?>
                                        <?php if (! is_wp_error($topics_term_link)) : ?><a href="<?php echo esc_url($topics_term_link); ?>"><?php echo esc_html($topics_term->name); ?></a><?php endif; ?>
                                    <?php endforeach; ?>
                                </span>
                            <?php endif; ?>
                        </div>
                        <h1><?php echo esc_html(get_the_title()); ?></h1>
                    </header>

                    <?php if (has_post_thumbnail()) : ?>
                        <figure class="sl-topic-featured-image"><?php the_post_thumbnail('large'); ?></figure>
                    <?php endif; ?>

                    <div class="sl-topic-content">
                        <?php the_content(); ?>
                    </div>
                </article>

                <?php $topics_previous = get_previous_post(false, '', 'topics_cat'); ?>
                <?php $topics_next = get_next_post(false, '', 'topics_cat'); ?>
                <?php $topics_archive_url = get_post_type_archive_link('topics'); ?>
                <nav class="sl-topic-post-nav" aria-label="トピックスの投稿ナビゲーション">
                    <?php if ($topics_previous) : ?><a href="<?php echo esc_url(get_permalink($topics_previous)); ?>"><span>← PREVIOUS</span><strong><?php echo esc_html(get_the_title($topics_previous)); ?></strong></a><?php else : ?><span></span><?php endif; ?>
                    <?php if ($topics_archive_url) : ?><a class="sl-topic-post-nav-all" href="<?php echo esc_url($topics_archive_url); ?>">ALL TOPICS</a><?php endif; ?>
                    <?php if ($topics_next) : ?><a href="<?php echo esc_url(get_permalink($topics_next)); ?>"><span>NEXT →</span><strong><?php echo esc_html(get_the_title($topics_next)); ?></strong></a><?php else : ?><span></span><?php endif; ?>
                </nav>
            <?php endwhile; ?>
            <?php get_template_part('template-parts/topics', 'contact'); ?>
        </main>
        <?php get_template_part('template-parts/topics', 'footer'); ?>
    </div>

<?php get_footer(); ?>
