<?php get_header(); ?>

<!-- Stylesheet inclusion for 'single-pages' -->
<link rel="stylesheet" href="<?php echo tailpress_asset('css/base/single-page.css') ?>" type="text/css" media="screen" />

<?php if(get_the_post_thumbnail(get_the_ID())) { ?>
    <div class="banner ai-c ds-fl " style="background: linear-gradient(to right, rgba(0, 142, 204, 0.72), rgba(252, 112, 25, 0.12)), url('<?php echo get_the_post_thumbnail_url( get_the_ID(), 'full' );?>'); background-size: cover; background-position: center; height: 300px;">
        <div class="banner-inner mg-at ps-re wc">
            <h2 class="banner-header fw-3 ls-n1 mg-b1 text-white"><?= the_title(); ?></h2>
        </div>
    </div>
    <div class="p-2"></div>
    <div class="container my-8 mx-auto">
<?php } else { ?>
    <div class="p-2"></div>
    <div class="container my-8 mx-auto">
    <?php the_title(sprintf('<h1 class="entry-title text-2xl lg:text-5xl font-extrabold leading-tight mb-1"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h1>');
} ?>
<!-- <div class="container my-8 mx-auto"> -->
    <?php if (have_posts()) : ?>
        <?php
            while (have_posts()) :
                the_post();
        ?>
            <div class="p-2"></div>
            <?php get_template_part('template-parts/content', 'single'); ?>

            <?php
                // If comments are open or we have at least one comment, load up the comment template.
                if (comments_open() || get_comments_number()) :
                    comments_template();
                endif;
            ?>

        <?php endwhile; ?>

    <?php endif; ?>

</div>

<?php get_footer();
