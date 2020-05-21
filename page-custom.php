<?php
/*
Template Name: 固定ページ
*/
?>

<?php get_header(); ?>

phpファイル自体に書き込だコンテンツ

         <!-- 以下wordpress上で編集したコンテンツを表示 -->    
         <?php 
                $page_data = get_page_by_path('custom');
                $page = get_post($page_data);
                $content = $page -> post_content;
                
                // 本文を表示する
                // echo $content;
                // 本文を表示、コンテンツ内でショートコードを使えるようにする
                /*echo do_shortcode($content);*/
                echo post_custom('商品名');
                echo post_custom('価格');
                /*var_dump( post_custom('商品名') );*/
                ?>


<?php get_footer(); ?>
