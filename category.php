<?php
/*
Template Name: 投稿カテゴリー
*/
?>

<?php get_header(); ?>

       <div class="top-wrapper2">
         <div class="container">
        
         </div>
       </div>
       

      <div class="main">
        <div class="container">
         <!-- パンクズ設定（Breadcrumb NavXT） -->
            <div class="breadcrumbs">
              <?php
                if ( function_exists( 'bcn_display' ) ) {
                  bcn_display();
                }
                ?>
            </div>
          <!-- カテゴリー画面に入力された内容を出力 -->
            <div class="category-info">
              <?php if (is_category() && //カテゴリページの時
                        !is_paged() &&   //カテゴリページのトップの時
                        category_description()) : //カテゴリの説明文が空でない時 ?>

              <div class="category-description">
                <?php echo category_description(); ?>
              </div>
             <?php endif; ?>

                <!-- カテゴリのタイトル -->
                <!-- <h2 class="category-title">カテゴリー： -->
                <!-- <?php single_cat_title(); ?> -->
                <!-- </h2> -->
            </div>


          <div class="article">
            <div class="lists">
              <!-- このカテゴリーに属する投稿ページ一覧（リンク・アイキャッチ・タイトル） -->
                <?php if(have_posts()): while(have_posts()):the_post(); ?>
                  <div class="list">
                    
                      <a href="<?php the_permalink(); ?>"> <!-- リンク -->
                        <div class="picture">
                        <?php the_post_thumbnail( array(265,180) ); ?> <!-- アイキャッチとサイズ -->
                        </div>
                        <span class="list-title"><?php the_title(); ?></span> <!-- タイトル -->
                        <div class="short-detail">
                          <div class="container">
                          <?php /*the_excerpt(); */?><!-- 抜粋を表示 -->
                          </div>
                         </div>
                      </a>

                  </div>
                <?php endwhile; endif; ?>
            </div>
          </div>

            <!-- ページネーション（カテゴリー用） -->
      
            <div class="pagination-box">
            <?php if( function_exists("pagination") ) pagination(); ?>
            </div>

        
                <?php dynamic_sidebar('wp-olive商品カテゴリー'); ?>
           
           

        </div>  
       
       </div>  

             
<?php get_footer(); ?>
