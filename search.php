<?php get_header(); ?>  <!-- header.phpを読込 -->
<?php get_sidebar(); ?> <!-- sidebar.phpを読込 -->
            <main class="l-main-wrap--archive">
                <div class="p-hero--archive">
                    <h2 class="c-headline--lv2__archive">Search:<p><?php echo '“'.$_GET['s'] .'”' ?></p></h2>
                </div>
            </main>
            <section class="l-sub--archive">
                    <?php
                    if( have_posts() ) :
                while( have_posts() ) :
                    the_post(); ?>

                <div class="c-food-menu">
                    
                            <?php if ( has_post_thumbnail() ): ?> 
                            <div class="c-food-menu__picture" ><?php the_post_thumbnail(); ?></div>
                            <?php else: ?>
                                <img src="./image/ei-hamburger.png" alt="メニュー画像がありません">
                            <?php endif; ?> 
                            
                            <div class="c-food-menu__content">
                                <h3 class="c-food-menu__title"><?php the_title(); ?></h3>
                                <h5 class="c-food-menu__headline"><?php the_tags(); ?></h5>
                                <div class="c-food-menu__description"><?php the_excerpt(); ?></div>
                                <div class="c-food-menu__detail">
                                    <a href="<?php the_permalink(); ?>"> 詳しく見る </a>
                                </div>
                            </div>
                        </div>
                        
                            <?php endwhile;
                        else :
                            ?><p>表示する記事がありません</p><?php
                        endif;
                        ?>
                </div>
                
                <!-- <h4 class="c-headline--lv4__archive">小見出しが入ります</h4>
                <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                <div class="c-food-menu">
                    <div class="c-food-menu__picture"></div>
                    <div class="c-food-menu__content">
                        <h3 class="c-food-menu__title">見出しが入ります</h3>
                        <h5 class="c-food-menu__headline">小見出しが入ります</h5>
                        <p class="c-food-menu__description">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                        <div class="c-food-menu__detail">
                            <p>詳しく見る</p>
                        </div>
                    </div>
                </div>
                <div class="c-food-menu">
                    <div class="c-food-menu__picture"></div>
                    <div class="c-food-menu__content">
                        <h3 class="c-food-menu__title">見出しが入ります</h3>
                        <h5 class="c-food-menu__headline">小見出しが入ります</h5>
                        <p class="c-food-menu__description">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                        <div class="c-food-menu__detail">
                            <p>詳しく見る</p>
                    </div>
                </div>
                </div>
                <div class="c-food-menu">
                    <div class="c-food-menu__picture"></div>
                    <div class="c-food-menu__content">
                        <h3 class="c-food-menu__title">見出しが入ります</h3>
                        <h5 class="c-food-menu__headline">小見出しが入ります</h5>
                        <p class="c-food-menu__description">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                        <div class="c-food-menu__detail">
                            <p>詳しく見る</p>
                        </div>
                    </div>
                </div>
                <div class="c-food-menu">
                    <div class="c-food-menu__picture"></div>
                    <div class="c-food-menu__content">
                        <h3 class="c-food-menu__title">見出しが入ります</h3>
                        <h5 class="c-food-menu__headline">小見出しが入ります</h5>
                        <p class="c-food-menu__description">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                        <div class="c-food-menu__detail">
                            <p>詳しく見る</p>
                        </div>
                    </div>
                </div>
                <div class="c-food-menu">
                    <div class="c-food-menu__picture"></div>
                    <div class="c-food-menu__content">
                        <h3 class="c-food-menu__title">見出しが入ります</h3>
                        <h5 class="c-food-menu__headline">小見出しが入ります</h5>
                        <p class="c-food-menu__description">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                        <div class="c-food-menu__detail">
                            <p>詳しく見る</p>
                        </div>
                    </div>
                </div> -->
            </section>

            <?php wp_pagenavi(); ?>

<?php get_footer(); ?>