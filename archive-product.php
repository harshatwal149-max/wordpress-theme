<?php get_header(); ?>

<h1>Shop</h1>

<?php
if ( woocommerce_product_loop() ) {
    woocommerce_product_loop_start();

    while ( have_posts() ) {
        the_post();
        wc_get_template_part( 'content', 'product' );
    }

    woocommerce_product_loop_end();
}
?>

<?php get_footer(); ?>