<?php wp_footer(); ?>
<!-- end of container -->
</div>
<footer>
    <div class="footer-content">
        <div class="info">
            <p>
                <img src="https://i.ibb.co/FwZB2tG/logo-dhalem.jpg" alt="logo_dhalem">
            </p>
            <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit.

            </p>
        </div>
        <div class="useful-links">
            <?php
            wp_nav_menu(array(
                'useful-links' => 'menu-footer',
                'theme_location' => 'secondary'
            )); ?>
        </div>
        <div class="get-in-touch">
            <p>
                <img src="https://i.ibb.co/jJxxRVn/localisation.jpg" alt="localisation">
                123 Anywhere Street, Any City, 12345 ST, Indonesia
            </p>
            <p>
                <img src="https://i.ibb.co/9wKfGg6/telephone.jpg" alt="telephone">
                +123 456 7890
            </p>
            <p>
                <img src="https://i.ibb.co/3FVgHJz/mail.jpg" alt="mail">
                hello@dhalem.com
            </p>
        </div>
        <div class="newsletter">
            <input type="email" name="email" id="email" placeholder="Your Email">
            <div class="is-layout-flex wp-block-buttons">
                <div class="wp-block-button" id="submit-container">
                    <a class="wp-block-button__link wp-element-button" id="submit">Submit</a>
                </div>
            </div>
        </div>
    </div>
</footer>
</body>

</html>