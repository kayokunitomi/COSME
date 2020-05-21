<?php
/*
Template Name: アイメイク一覧（カスタム投稿「アイメイク商品一覧を表示」カスタムフィールド利用）
*/
?>

<?php get_header(); ?>

          <div class="top-wrapper2">
            <div class="banner"><img src="<?php echo get_template_directory_uri(); ?>/img/blur-eye.png"></div>
          </div>


        <!-- ネイル一覧ここから -->
        <div class="shopping_main">
       <div class="container">

 <!-- カスタム投稿記事内とカスタムフィールド内容を出力（リンク・アイキャッチ・タイトル）  -->
 <?php $posts = get_posts('post_type=eyemake&posts_per_page=6'); ?><!-- 記事表示件数 -->
      <?php if (!empty($posts)): ?>
      <?php foreach ($posts as $post):setup_postdata($post); ?>

      <div class="shopping_list">
         <div class="container">
 
             <div class="product_detail">
                 <span class="list-title"><?php the_title(); ?></span><!-- 記事のタイトル -->
                 <p><?php echo post_custom('商品説明'); ?></p>
                 <p class="custom-price"><?php echo post_custom('価格'); ?></p>
                 <p><?php the_content(); ?></p><!-- 記事全文を表示 -->
             </div>      
             <div class="product_pic">
                 <?php the_post_thumbnail( array(385,304) ); ?><!-- アイキャッチ表示とサイズ設定 -->
             </div>
 
         </div>
       </div>    

       <?php endforeach; ?>
       <?php wp_reset_postdata(); ?>
       <?php endif; ?>
       <!-- カスタム投稿記事の一部を出力ここまで -->

      </div>
    </div>


<?php get_footer(); ?>



