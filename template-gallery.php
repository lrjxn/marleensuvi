<?php
// Template Name: Gallery Page
?>

<?php get_header(); ?>

<main id="main-content">
    <?php get_sidebar(); ?>

    <div class="content-area">
        <div class="gallery-container">
            

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php
                $attachments = get_children(array(
                    'post_parent' => get_the_ID(),
                    'post_type' => 'attachment',
                    'post_mime_type' => 'image',
                    'numberposts' => -1,
                    'orderby' => 'menu_order',
                    'order' => 'ASC'
                ));
                ?>

                <div class="splide gallery-slider">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <?php if ($attachments) : ?>
                                <?php foreach ($attachments as $attachment) : 
                                    $img_url = wp_get_attachment_image_url($attachment->ID, 'full');
                                    $alt = get_post_meta($attachment->ID, '_wp_attachment_image_alt', true);
                                ?>
                                <li class="splide__slide">
                                    <div class="carousel-item">
                                        <img src="<?php echo esc_url($img_url); ?>" alt="<?php echo esc_attr($alt); ?>">
                                        <p class="carousel-title"><?php echo esc_html($alt); ?></p>
                                    </div>
                                </li>
                                <?php endforeach; ?>
                            <?php else : ?>
                                <li class="splide__slide">
                                    <p>No images found. Upload images using the media library and attach them to this page.</p>
                                </li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>

            <?php endwhile; endif; ?>
        </div>
			<h1><?php the_title(); ?></h1>
        <div class="page-content">
            <?php the_content(); ?>
        </div>
    </div>

</main>

<?php get_footer(); ?>
