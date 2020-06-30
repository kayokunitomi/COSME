<?php
/*
Template Name: 固定ページ
*/
?>

<?php get_header(); ?>


         <!-- コンテンツを表示 -->
                <?php 
                $page_data = get_page_by_path('page');
                $page = get_post($page_data);
                $content = $page -> post_content;
                
                // 本文を表示する
                // echo $content;
                // 本文を表示、コンテンツ内でショートコードを使えるようにする
                // echo do_shortcode($content);
                the_content();// wp-olivecartのカート項目が表示されないため上の echo do_shortcode($content);を消して、これに切り替える。投稿ページや固定ページ内でショートコード が使えなくなった場合は、functions.phpに記述したものを有効にしてみる。
              
                ?>
                <?php dynamic_sidebar('wp-oliveショッピングカート'); ?>

<?php get_footer(); ?>
