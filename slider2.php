<?php
/*
Template Name: トップページのスライダーに表示させる人気商品
*/
?>


<section class="center slider">


  <?php $args = array(
    'category_name' => 'slider',
    'post_type' =>array('post','eyemake','face'),
        'posts_per_page'   => 8, //5件表示する
        'orderby'          => 'date',  //日付順
        'order'            => 'DESC', //降順
        'meta_key' => 'order_num', //カスタムフィールドのキー
        'meta_value' => 'show', //カスタムフィールドの値
        'paged'=>$paged
          );
$my_query = new WP_Query($args);
if ($my_query->have_posts()) : while ($my_query->have_posts()) : $my_query->the_post();
?>
      <!-- 人気商品出力部分 -->

  <div class="box">
  <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( array(385,304) ); ?></a>
  <p class="name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
  <p class="price"><a href="<?php the_permalink(); ?>"><?php echo post_custom('価格'); ?></a></p>

  </div>

<?php endwhile; endif; wp_reset_postdata(); ?>
</section>
