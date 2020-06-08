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
                echo do_shortcode($content);
              
                ?>
                

<?php get_footer(); ?>
