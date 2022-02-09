<?php
/**
 * Description tab
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/tabs/description.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 2.0.0
 */

defined( 'ABSPATH' ) || exit;

global $post;

$heading = apply_filters( 'woocommerce_product_description_heading', __( 'Description', 'woocommerce' ) );

?>

<?php $feature_image = get_field('feature_image'); ?>

<div>
    <h2>Product Description</h2>
    <div class="block md:flex">
        <div class="<?= $feature_image ? 'w-full ' : 'w-full' ?>"><?php the_content(); ?></div>
        <div class="<?= $feature_image ? 'w-full md:w-1/3' : 'hidden' ?>">
            <?php if ($feature_image) : ?>
                <a class="foobox" href="<?php echo esc_url($feature_image['url']); ?>"><img src="<?php echo esc_url($feature_image['url']); ?>" alt="<?php echo esc_attr($feature_image['alt']); ?>" /></a>
            <?php endif; ?>
        </div>
        <!-- <?php do_action('woocommerce_product_after_tabs'); ?> -->
    </div>
    <div class="flex justify-center">
        <?php if ( get_field( 'ce' ) == 1 ) : ?>
            <div><img src="<?php echo esc_url(get_stylesheet_directory_uri()."/assets/certifications/ce.jpg") ?>" alt="CE" /></div>
        <?php endif; ?>
        <?php if ( get_field( 'fcc' ) == 1 ) : ?>
            <div><img src="<?php echo esc_url(get_stylesheet_directory_uri()."/assets/certifications/fcc.jpg") ?>" alt="FCC" /></div>
        <?php endif; ?>
        <?php if ( get_field( 'rohs' ) == 1 ) : ?>
            <div><img src="<?php echo esc_url(get_stylesheet_directory_uri()."/assets/certifications/rohs.jpg") ?>" alt="RoHs" /></div>
        <?php endif; ?>
        <?php if ( get_field( 'weee' ) == 1 ) : ?>
            <div><img src="<?php echo esc_url(get_stylesheet_directory_uri()."/assets/certifications/weee.jpg") ?>" alt="WEEE" /></div>
        <?php endif; ?>
    </div>
</div>
<!-- <style>
    table{
        border-width: 0px;
    }
    td {
        border-bottom: 0px;
    }
</style> -->

<div>
    <h2>Specifications</h2>
    <?php the_field('specification_table'); ?>
</div>

