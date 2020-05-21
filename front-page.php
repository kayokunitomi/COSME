<?php
/*
Template Name: トップページ
*/
?>

<?php get_header(); ?>

      


         <!-- コンテンツを表示 -->
                <?php 
                $page_data = get_page_by_path('front-page');
                $page = get_post($page_data);
                $content = $page -> post_content;
                
                // 本文を表示する
                // echo $content;
                // 本文を表示、コンテンツ内でショートコードを使えるようにする
                echo do_shortcode($content);
              
                ?>
                


<?php get_footer(); ?>