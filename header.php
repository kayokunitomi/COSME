<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title><?php wp_title(' | ', true, 'right'); ?><?php bloginfo('name'); ?></title>
    <meta="description" content="">
    <link rel="icon" href="favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><!--viewportの設定-->
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/slick/slick.css" media="screen" /><!--スライダースタイルシートの呼び出し-->
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/slick/slick-theme.css" media="screen" /><!--スライダースタイルシートの呼び出し-->
  <link href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" rel="stylesheet"><!--font-awesomeのスタイルシートの呼び出し-->
  <?php wp_enqueue_script( 'jquery' ); ?>
<?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
<header>

  <div class="menu clearfix">
    <div class="container">

    <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="logo" src="<?php echo get_template_directory_uri(); ?>/img/ribbon.png" alt="cosme sample site"></a>
      <!--ヘッダーにメニューを表示させる-->
      <!-- <nav> -->
       <?php
       wp_nav_menu( array(
                'theme_location'=>'mainmenu',
                'container'     =>'',
                'menu_class'    =>'',
                'items_wrap'    =>'<ul id="menu clearfix">%3$s</ul>'));

        ?>
      <!-- </nav> -->

    </div>
  </div>

 </header>
