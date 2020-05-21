<?php
/*
Template Name: ボディークリーム一覧（カスタム投稿「ボディークリーム商品一覧を表示」）
*/
?>

<?php get_header(); ?>
      
      
<div class="top-wrapper2">
    <div class="banner"><img src="<?php echo get_template_directory_uri(); ?>/img/blur-body.png"></div>
  </div>

  <!-- リップ一覧ここから -->
  <div class="shopping_main">
    <div class="container">

<!-- 指定した投稿記事の一部を出力（リンク・アイキャッチ・タイトル） -->
<?php
          $arg = array(
                    'posts_per_page' => 6, // 表示する件数
                    'orderby' => 'date', // 日付でソート
                    'order' => 'DESC', // DESCで最新から表示、ASCで最古から表示
                    'category_name' => 'item' // 表示したいカテゴリーのスラッグを指定
                );
          $posts = get_posts( $arg );
          if( $posts ): ?>
            
           <?php
              foreach ( $posts as $post ) :
                setup_postdata( $post ); ?>
                   
                   <div class="shopping_list">
                      <div class="container">

                            <div class="product_detail">
                                <span class="list-title"><?php the_title(); ?></span><!-- 記事のタイトル -->
                                <p><?php the_content(); ?></p><!-- 記事全文を表示 -->
                                   <?php/* the_excerpt();*/ ?><!-- 抜粋を表示（デフォルトは１１０文字） -->
                            </div>   
                
                            <div class="product_pic">
                                  <?php the_post_thumbnail( array(385,304) ); ?><!-- アイキャッチ表示とサイズ設定 -->
                            </div>

                            <!-- カートに入れるボタン -->
                            <?php usces_the_item(); ?>
                            <?php while ( usces_have_skus() ) : ?>
                            <?php usces_direct_intoCart( $post->ID, usces_the_itemSku( 'return' ), false, 'カートに入れる' ); ?>
                            <?php echo str_replace( 'text', 'number', usces_the_itemQuant( 'return' ) ); ?>
                            <?php endwhile; ?>
                      </div>
                    </div>

              <?php endforeach; ?>
                  
              <?php
                endif;
                wp_reset_postdata();
              ?>
<!-- 投稿記事の一部を出力ここまで -->


      </div>
    </div>


             
<?php get_footer(); ?>
