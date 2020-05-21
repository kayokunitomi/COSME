<?php
/*
Template Name: 固定ページ
*/
?>

<?php get_header(); ?>

phpファイル自体に書き込だコンテンツ　＼ログイン
         <!-- wordpress上で編集したコンテンツを表示 -->
              
         <?php 
                $page_data = get_page_by_path('members');
                $page = get_post($page_data);
                $content = $page -> post_content;
                
                // 本文を表示する
                // echo $content;
                // 本文を表示、コンテンツ内でショートコードを使えるようにする
                echo do_shortcode($content);
              
                ?>


<?php get_footer(); ?>
