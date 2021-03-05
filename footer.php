<footer class="l-footer">

        <?php wp_nav_menu( array(
                'theme_location'=>'footer_nav',
                'menu' => 'footermenu',
                'container_class' => 'l-footer__container',
                'menu_class' => 'p-footer__navigation',
                'container' => 'nav',
                )); ?>

            <p class="c-copyright"><small>Copyright: RaiseTech</small></p>
        </footer>
    </div>




    <?php wp_footer(); ?>

</body>
</html>