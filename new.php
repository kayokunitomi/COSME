<?php
/*
Template Name: トップページに表示させるインフォメーションの最新記事
*/
?>


<section class="center slider">

<?php $posts = get_posts('numberposts=6&category=8'); global $post; ?>
    <?php if($posts): foreach($posts as $post): setup_postdata($post); ?>
                   

            <div class="box">
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( array(385,304) ); ?></a>
            <p class="name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
            <p class="price"><a href="<?php the_permalink(); ?>"><?php echo post_custom('価格'); ?></a></p>

            </div>

            <?php endforeach; endif; ?>
    <!-- カテゴリー投稿記事の一部を出力ここまで -->

</section>