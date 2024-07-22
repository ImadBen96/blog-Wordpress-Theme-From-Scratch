<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'footer-menu',
                        'menu_class'     => 'footer-bar'
                    )
                )
                ?>
            </div>
            <div class="col-md-4">
                <div class="footer-middle">
                    <p>© 2024 GreenTricks</p>
                </div>
            </div>
            <div class="col-md-4">
                <?php
                    wp_nav_menu(
                            array(
                                    "theme_location" => "footer-right-menu",
                                    "menu_class" => "footer-right-menu",
                            )
                    )
                ?>

            </div>
        </div>

    </div>
    <a href="#" class="go-top">
        <img width="100%" src="<?php echo get_template_directory_uri() . "/assets/images/top.svg"; ?>" alt=""/>
    </a>
</footer>

<?php wp_footer(); ?>
</body>
</html>