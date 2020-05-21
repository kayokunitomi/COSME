<?php
/*
Template Name: 各商品ページ
*/
?>

<?php get_header(); ?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>
 
    // アイキャッチ画像を表示するテンプレートタグ
    <?php the_post_thumbnail(); ?>
 
<?php endwhile; endif; ?>

 <!-- コンテンツを表示 -->
 <?php 
                $page_data = get_page_by_path('single');
                $page = get_post($page_data);
                $content = $page -> post_content;
                
                // 本文を表示する
                // echo $content;
                // 本文を表示、コンテンツ内でショートコードを使えるようにする
                echo do_shortcode($content);
              
                ?>
 

<?php get_footer(); ?>
