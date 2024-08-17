<?php get_header(); ?>
    <main>
        <?php if (have_posts()) : while(have_posts()):the_post(); ?>
            <h2 id="post-h2">
                <time class="post-date" datetime="<?php echo get_the_date('Y-m-d') ?>"><?php the_date(); ?></time>
                <?php the_title(); ?>
            </h2>
            <div class="post-content">
                <?php the_content(); ?>
            </div>
        <?php endwhile; else : ?>
            <div class="post-content">
                <p>記事はありません。</p>
            </div>
        <?php endif; ?>
    </main>
<?php get_footer(); ?>