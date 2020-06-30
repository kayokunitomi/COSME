<?php
/*
Template Name: サイトマップページ
*/
?>

<?php get_header(); ?>

          <div class="top-wrapper3">
            <div class="banner"><img src="<?php echo get_template_directory_uri(); ?>/img/blur-sitemap.png"></div>
          </div>

          <div class="main">
             <div class="container">
             
             <ul class="main-list sitemap-list">
               <div class=container>
                 <p class="information-list-title">コスメサンプルサイト　オンラインショップ</p>
         <!-- コンテンツを表示 -->
                <?php 
                $page_data = get_page_by_path('sitemap');
                $page = get_post($page_data);
                $content = $page -> post_content;
                
                // 本文を表示する
                // echo $content;
                // 本文を表示、コンテンツ内でショートコードを使えるようにする
                echo do_shortcode($content);
      
                ?>
               </div>
             </ul>

             </div>    
          </div>

<?php get_footer(); ?>
