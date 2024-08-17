    <footer>
        <div id="footernav">
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'main-menu'
                )
            );
            ?>
        </div>
        <div id="footerbottom">
            <p>&copy;2024 <a href="https://yskdblog.com/" target="_blank" rel="noopener noreferrer">Yskd Blog.</a> All rights reserved</p>
        </div>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>