<?php get_header(); ?>

<!-- Hero Section -->
<section id="home" class="hero">
    <div class="hero-content">
        <h1>Spice & Elegance</h1>
        <p>Authentic Indian Food</p>
    </div>
</section>

<!-- Menu Section -->
<section id="menu">
    <h2 class="section-title">Signature Dishes</h2>

    <div class="menu-grid">
        <div class="menu-grid">

            <?php
            $args = array(
                'post_type' => 'post', // ya custom post type ho to change karo
                'posts_per_page' => 8
            );

            $query = new WP_Query(array(
                'post_type' => 'post', // ya custom post type ho to change karo
                'posts_per_page' => 8
            ));

            if ($query->have_posts()) : 
                while ($query->have_posts()) : $query->the_post();
            ?>

                    <div class="menu-card">

                    <a href="<?php the_permalink(); ?>">
                        <div class="menu-img"
                            style="background-image: url('<?php echo get_the_post_thumbnail_url(get_the_ID("id"), 'medium'); ?>');">
                        </div>

                        <h3> <?php the_title() ?></h3>
                        <p><?php the_excerpt(); ?></p>

                        <span class="price">
                           ₹ <?php echo get_post_meta(get_the_ID(), 'price', true); ?>
                        </span>
            </a>
                    </div>

            <?php
                endwhile;
                wp_reset_postdata();
            else :
                echo "<p>No menu items found</p>"; 
            endif;
            ?>

        </div>


    </div>
</section>
<div class="form">
    <section id="reservation">
        <h2 class="section-title">Reserve a Table</h2>
        <p class="section-sub">Let the aromas guide you — book your royal dining experience now.</p>
        <div class="reservation-form">
            <?php echo do_shortcode('[contact-form-7 id="9733ecc" title="CONTACT FORM"]'); ?>

        </div>
    </section>
</div>
<!-- Testimonials -->
<section id="testimonials">
    <h2 class="section-title">Guest Whispers</h2>
    <div class="testimonial-grid">
        <div class="testimonial"><i class="fas fa-quote-left"></i>
            <p>"The best Indian food I've had outside India! Dal Makhani was divine, and the staff treated us like royalty."</p><strong>- Priya S.</strong><span style="display: block; margin-top: 5px;">⭐⭐⭐⭐⭐</span>
        </div>
        <div class="testimonial"><i class="fas fa-quote-left"></i>
            <p>"Raj Mahal's ambiance is breathtaking. Their thali is a masterpiece. Must try Gulab Jamun!"</p><strong>- Michael T.</strong><span style="display: block; margin-top: 5px;">⭐⭐⭐⭐⭐</span>
        </div>
        <div class="testimonial"><i class="fas fa-quote-left"></i>
            <p>"Authentic spices, generous portions. We celebrated our anniversary here and they made it unforgettable."</p><strong>- Anjali & Rohan</strong><span style="display: block; margin-top: 5px;">⭐⭐⭐⭐⭐</span>
        </div>
    </div>
</section>

<?php get_footer(); ?>