<?php
/*
Template Name: お問い合わせページ
*/
?>

<?php get_header(); ?>

      
<div class="flame-contain">
  <div class="container">
       
       <div class="heading-title">
         <img class="title-box" src="<?php echo get_template_directory_uri(); ?>/img/t-contact.png">
       </div>


       <div class="flame-inside">
         <div class="container">


         <p class="test">お問い合わせから４８時間以内にご返信いたします。</p>

              <div class="contact-form">

                  <!-- wordpress上で編集したコンテンツを表示 -->
                    <?php 
                    $page_data = get_page_by_path('contact');
                    $page = get_post($page_data);
                    $content = $page -> post_content;
                    
                    // 本文を表示する
                    // echo $content;
                    // 本文を表示、コンテンツ内でショートコードを使えるようにする
                    echo do_shortcode($content);
                  
                    ?>
              </div>  

         </div>
       </div>


  </div>
</div>

<?php get_footer(); ?>