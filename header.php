<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri( ); ?>/css/style.css">
    <title>front-page</title>
</head>
<body>
    <div class="c-grid--front-page">
        <header class="l-header">
            <h1 class="c-headline--lv1"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
            <?php get_search_form(); ?>
            <p class="c-title--menu">Menu</p>
        </header>