<!-- Footer & Contact -->
<footer id="contact">
    <div class="footer-content">
        <?php 
            if(is_active_sidebar('footer_contact')) : 
                dynamic_sidebar('footer_contact'); 
            endif;
        ?>
        <?php 
            if(is_active_sidebar('footer_social')) : 
                dynamic_sidebar('footer_social');
            endif;
        ?>
         <?php 
            if(is_active_sidebar('Footer_newsletter')) : 
                dynamic_sidebar('Footer_newsletter');
            endif;
        ?>
        
    </div>
     <?php 
            if(is_active_sidebar('Footer_title')) : 
                dynamic_sidebar('Footer_title');
            endif;
        ?> 
</footer>

<?php wp_footer(); ?>
</body>
</html>
                                                                         