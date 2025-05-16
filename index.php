<?php get_header(); ?>

<?php if (have_posts()) : ?>
    <div class="posts-list">
        <?php while (have_posts()) : the_post(); ?>
            <article <?php post_class(); ?>>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <div class="entry-content">
                    <?php the_excerpt(); ?>
                </div>
            </article>
        <?php endwhile; ?>
    </div>
<?php endif; ?>

<?php get_footer(); ?>