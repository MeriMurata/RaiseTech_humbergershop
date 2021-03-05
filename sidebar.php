<div class="c-overlay"></div>
<aside class="l-sidebar">
            <div class="p-primary-menu">
                <span class="c-close-button"></span>
                <p class="c-title--menu__sidebar">Menu</p>
                    <?php
                    wp_nav_menu(
                        array(
                        'theme_location'=>'category_nav',
                        'menu' => 'categorymenu',
                        'menu_class' => 'p-grand-menu c-grand-menu c-grand-menu__primary--menu',
                        'container' => 'nav',
                        'container_class' => 'muratamutat', //temp
                        'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
                      )
                    );
                    ?>
            </div><!--.p-primary-menu-->
 </aside>
