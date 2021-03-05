<?php get_header(); ?>  <!-- header.phpを読込 -->
<?php get_sidebar(); ?> <!-- sidebar.phpを読込 -->
<main class="l-main-wrap--singlepage">
    <?php if ( has_post_thumbnail() ): ?> 
        <div class="p-hero--singlepage" ><?php the_post_thumbnail(); ?>
            <?php else: ?>
                <img src="./image/ei-hamburger.png" alt="メニュー画像がありません">
            <?php endif; ?> 
                    
            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>
                <h1 class="c-headline--lv1__singlepage"><?php the_title(); ?></h1>
                <?php endwhile;else:?>
                    <p>メニューがありません。</p>
                <?php endif; ?>

        </div>
</main>
<section class="l-sub--singlepage">
            <?php if (have_posts()): ?>
                <?php while (have_posts()) : the_post(); ?>
                    <?php the_content(); ?>
                <?php endwhile; ?>
            <?php else: ?>
                <p>投稿がありません</p>
            <?php endif; ?>
</section>
<?php get_footer(); ?> <!-- footer.phpを読込 -->