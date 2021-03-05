<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
   <title>front-page</title>
</head>
<body>
    <div class="c-grid--archive">
        <header class="l-header">
            <h1 class="c-headline--lv1"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
            <?php get_search_form(); ?>
            <p class="c-title--menu">Menu</p>
        </header>