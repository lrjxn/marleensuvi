<?php
?>

<?php get_header(); ?>
<?php get_sidebar();?>
    
    <div class="main-content">
                
                <div class="page-content">
					
                    <?php the_content(); ?>
					<?php while (have_posts()) : the_post(); ?>
					
                </div>
            </article>
        <?php endwhile; ?>
    </div>
</div>

<?php get_footer(); ?>
