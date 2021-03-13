<?php get_header(); ?>
<?php get_sidebar(); ?>
        <main class="l-main-wrap--archive">
                <div class="p-hero--archive">
                    <h2 class="c-headline--lv2__archive">Menu:<p>
                    <?php single_cat_title(); ?>
                    </p></h2>
                </div>
        </main>
            
        <section class="l-sub--archive">
           <h4 class="c-headline--lv4__archive">小見出しが入ります</h4>
           <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>

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
            
        </section>
        

        <?php wp_pagenavi(); ?>
    
        
<?php get_footer(); ?>