<?php
/*
Template Name: トップページに表示させるインフォメーションの最新記事
*/
?>

<ul class="news-list">
    <?php $posts = get_posts('numberposts=3&category=5'); global $post; ?>
    <?php if($posts): foreach($posts as $post): setup_postdata($post); ?>
    
    <li>
    <p class="news-date"><?php echo get_the_date(); ?></p><!-- 記事の日付 -->
    <p class="news-title"><a href="info/#post-<?php the_ID(); ?>"><?php the_title(); ?></a></p><!-- 記事のタイトル -->
    <?php/* the_post_thumbnail( array(265,180) );*/ ?><!-- 画像とサイズ設定 -->
    <p class="news-content"><?php the_content() ?></p><!-- 本文内容を表示 -->
    <?php/* the_excerpt();*/ ?><!-- 抜粋を表示 -->
    </li>
    <?php endforeach; endif; ?>
</ul>