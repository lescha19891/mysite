
<footer class="app__footer footer">
            <div class="container">
                <div class="footer__top">
                    <a href="/" class="footer__home-link">
                        <img src="<?=get_option('mastak_theme_options')['logo'];?>" alt="logo" class="footer__logo">
                        
                    </a>
                    <a href="tel:<?=get_option('mastak_theme_options')['tel'];?>" class="footer__phone-link">
                    <?=get_option('mastak_theme_options')['tel'];?></a>
                    <div class="footer__losung">
                    <?=get_option('mastak_theme_options')['contacts_title'];?>
                    </div>
                </div>
                <div class="footer__bottom">
                    &copy; 2020  Все права защищены
                </div>
            </div>
        </footer>
    </div>
    <!--http://via.placeholder.com/100x36-->
    <?php wp_footer(); ?>
</body>
</html>