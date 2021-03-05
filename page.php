<?php get_header(); ?>  <!-- header.phpを読込 -->
<?php get_sidebar(); ?> <!-- sidebar.phpを読込 -->
            <main class="l-main-wrap--page">
                <div class="p-hero--page">
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