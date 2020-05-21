<?php
/*
Template Name: インフォメーションページ
*/
?>

<?php get_header(); ?>

  <div class="top-wrapper3">
      <div class="banner"><img src="<?php echo get_template_directory_uri(); ?>/img/blur-info.png"></div>
  </div>

<div class="main">
    <div class="container">

      
<!--ページャー付き記事の呼び出し（固定ページ用）-->
        <?php
          $category   = get_category_by_slug('info'); // カテゴリーのスラッグ
          $cat_id     = $category->tag_id=5;           // カテゴリーIDを取得

          $post_count = 5; // 表示する記事数

          query_posts('showposts='.$post_count.'&cat='.$cat_id.'&paged='.$paged);
          // カテゴリーIDを直に書く場合は '&cat='.$cat_id この部分を '&cat=カテゴリーID（半角英数）' に直す
        ?>

        <ul class="main-list">
           <div class=container>
            <p class="information-list-title">インフォーメーション</p>
            <?php
              // ここから記事情報
              while(have_posts()) : the_post(); ?>
              <li>
                <div class="info-up">
                  <p class="information-date"><?php echo get_the_date(); ?></p><!-- 記事の日付 -->
                  <p class="information-title"><?php the_title(); ?></p><!-- 記事のタイトル -->
                </div>
                <div class="info-down">
                  <p class="information-content"><?php the_content() ?></p><!-- 本文内容を表示 -->
                </div>
              </li>
            <?php
              endwhile;
              // ここまで記事情報
            ?>
          </div>
        </ul>

        <div class="pagination-box">

          <?php
              // ここからページ送り
              $args = array(
                  'prev_text' => __('&lt;'),
                  'next_text' => __('&gt;'),
                  'mid_size'  => 5
              );

              echo paginate_links($args);
              // ここまでページ送り
          ?>

        </div>
        <?php
            wp_reset_postdata();
        ?>

    </div>
</div>                


<?php get_footer(); ?>
