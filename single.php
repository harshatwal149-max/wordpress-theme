<?php
get_header();
?>
<section class="single-page">

    <?php
    if (have_posts()) :
        while (have_posts()) : the_post();
    ?>

        <div class="single-container">

            <!-- Title -->
            <h1 class="title"><?php the_title(); ?></h1>

            <!-- Image -->
            <div class="image">
                <?php the_post_thumbnail('large'); ?>
            </div>

            <!-- Price -->
            <p class="price">
                ₹ <?php echo get_post_meta(get_the_ID(), 'price', true); ?>
            </p>

            <!-- Content -->
            <div class="content">
                <?php the_content(); ?>
            </div>
         <?php comments_template(); ?>
        </div>

    <?php
        endwhile;
    endif;
    ?>

   

</section>

<?php
get_footer();
?>
