<?php

/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined('ABSPATH') || exit;

global $product;

echo "<pre>";
echo "I guess this works";
echo "</pre>";

// Ensure visibility.
if (empty($product) || !$product->is_visible()) {
    return;
}
$product_data = $product->get_data();
?>
<div class="container mx-auto">
    <!-- <li <?php //wc_product_class( '', $product ); 
                ?>> -->
    <?php
    ?>
    <div>
        <div class="flex justify-between text-primary">
            <h3><?= $product->get_title(); ?></h3>
            <h3><?= $product_data['price'] ?></h3>
        </div>
        <p class="font-thin"><?= $product_data['short_description']; ?></p>
        <hr>
        <div>
            <div class="col-span-2 sm:col-span-1 xl:col-span-1">
                <img alt="..." src="https://source.unsplash.com/gUBJ9vSlky0" class="h-24 w-24 rounded  mx-auto" />
            </div>
            <div class="col-span-2 sm:col-span-4 xl:col-span-4">
                <h3 class="font-semibold text-black">Veggie</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                </p>
            </div>
            <div class="col-span-2 sm:col-span-1 xl:col-span-1 italic ">$22</div>
        </div>
        <?php








        // /**
        //  * Hook: woocommerce_before_shop_loop_item.
        //  *
        //  * @hooked woocommerce_template_loop_product_link_open - 10
        //  */
        // do_action( 'woocommerce_before_shop_loop_item' );

        // /**
        //  * Hook: woocommerce_before_shop_loop_item_title.
        //  *
        //  * @hooked woocommerce_show_product_loop_sale_flash - 10
        //  * @hooked woocommerce_template_loop_product_thumbnail - 10
        //  */
        // do_action( 'woocommerce_before_shop_loop_item_title' );

        // /**
        //  * Hook: woocommerce_shop_loop_item_title.
        //  *
        //  * @hooked woocommerce_template_loop_product_title - 10
        //  */
        // do_action( 'woocommerce_shop_loop_item_title' );

        // /**
        //  * Hook: woocommerce_after_shop_loop_item_title.
        //  *
        //  * @hooked woocommerce_template_loop_rating - 5
        //  * @hooked woocommerce_template_loop_price - 10
        //  */
        // do_action( 'woocommerce_after_shop_loop_item_title' );

        // /**
        //  * Hook: woocommerce_after_shop_loop_item.
        //  *
        //  * @hooked woocommerce_template_loop_product_link_close - 5
        //  * @hooked woocommerce_template_loop_add_to_cart - 10
        //  */
        // do_action( 'woocommerce_after_shop_loop_item' );
        // echo "aadssadadsasd";
        ?>
        <!-- </li> -->

    </div>