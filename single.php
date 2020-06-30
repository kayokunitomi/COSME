<?php
/*
Template Name: 各商品ページ
*/
?>

<?php get_header(); ?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>
 
    // アイキャッチ画像を表示するテンプレートタグ
    <?php the_post_thumbnail(); ?>


<?php get_cart_button($post->ID);?>
    
<?php endwhile; endif; ?>

 <!-- コンテンツを表示 -->
 <?php 
                $page_data = get_page_by_path('single');
                $page = get_post($page_data);
                $content = $page -> post_content;
                
                // 本文を表示する
                // echo $content;
                // 本文を表示、コンテンツ内でショートコードを使えるようにする
                // echo do_shortcode($content);
                the_content();// wp-olivecartのカート項目が表示されないため上の echo do_shortcode($content);を消して、これに切り替える。投稿ページや固定ページ内でショートコード が使えなくなった場合は、functions.phpに記述したものを有効にしてみる。
                
                ?>



<?php get_footer(); ?>
