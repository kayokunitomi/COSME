<?php
/*
Template Name: 良くある質問ページ
*/
?>

<?php get_header(); ?>

      
<div class="flame-contain2">
  <div class="container">
       
       <div class="heading-title">
         <img class="title-box-faq" src="<?php echo get_template_directory_uri(); ?>/img/t-faq.png">
       </div>


      <div class="flame-question">
      <!-- <div class="flame-wall-long"> -->
       <p><img src="<?php echo get_template_directory_uri(); ?>/img/bg-flame-super.png"></p>
       <!-- </div> -->

       <!-- <div class="container"> -->
         
          <div class="faq-detail">
            
              <div class="faq-menu">
                <p class="menu-title">〜に関するご質問</p>
                <ul>
                  <li><a href="#anchor">
                  <p class="faq-left">ご注文方法</p></a>
                  </li>
                  <li><a href="#anchor1">
                  <p class="faq-left">送料・配送</p></a>
                  </li>
                  <li><a href="#anchor2">
                  <p class="faq-left">お支払い方法</p></a>
                  </li>
                  <li><a href="#anchor3">
                  <p class="faq-left">返品・キャンセル</p></a>
                  </li>
                  <li class="faq-line"><a href="#anchor4">
                  <p class="faq-left">その他</p></a>
                  </li>
                </ul>
              </div>

                <div class="faq-list">
                <p><img src="<?php echo get_template_directory_uri(); ?>/img/faq1.png"></p>

                    <div class="questions">
                        <!-- コンテンツを表示 -->
                        <?php 
                          $page_data = get_page_by_path('faq');
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
          
         <!-- </div> -->
       </div>


  </div>
</div>

<?php get_footer(); ?>