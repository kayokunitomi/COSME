<?php get_header(); ?>
  <!-- トップラッパーここから -->
  <div class="top-wrapper">
    <div class="container">
      <div class="title">
        <p class="title-bg1"><img class="title1" src="img/title1.png"></p>
        <p class="title-bg2"><img class="title2" src="img/title2.png"></p>
      </div>
    </div>
  </div> 

    <div class="new-products">
      <div class="container">
         <p><img class="main-title" src="img/t-new.png"></p>

       <!-- スライドショー -->
        <section class="center slider">
          <div class="box">
            <a href=""><img src="slick/m-green2.png">
              <p class="name">商品名がここに入ります</p>
              <p class="price">1000円</p>
            </a>
          </div>
          <div class="box">
            <a href=""><img src="slick/m-pink2.png">
              <p class="name">商品名がここに入ります</p>
              <p class="price">1000円</p>
            </a>
          </div>
          <div class="box">
            <a href=""><img src="slick/m-purple2.png">
              <p class="name">商品名がここに入ります</p>
              <p class="price">1000円</p>
            </a>
          </div>
          <div class="box">
            <a href=""><img src="slick/m-orange2.png">
              <p class="name">商品名がここに入ります</p>
              <p class="price">1000円</p>
            </a>
          </div>
          <div class="box">
            <a href=""><img src="slick/m-green2.png">
              <p class="name">商品名がここに入ります</p>
              <p class="price">1000円</p>
            </a>
          </div>
          <div class="box">
            <a href=""><img src="slick/m-pink2.png">
              <p class="name">商品名がここに入ります</p>
              <p class="price">1000円</p>
            </a>
          </div>
          <div class="box">
            <a href=""><img src="slick/m-purple2.png">
              <p class="name">商品名がここに入ります</p>
              <p class="price">1000円</p>
            </a>
          </div>
          <div class="box">
            <a href=""><img src="slick/m-orange2.png">
              <p class="name">商品名がここに入ります</p>
              <p class="price">1000円</p>
            </a>
          </div>
        </section>
        
      </div>
    </div>


    <div class="product-list">
      <div class="container">
        <p><img class="main-title" src="img/t-product.png"></p>

        <ul>
          <div class="nail">
          <li class="img_wrap">
            <a href="#"> 
              <img src="img/item.jpg">
              <span>ネイル</span>
            </a>
          </li>
          </div>
          <div>
          <li class="img_wrap">
            <a href="#">
              <img class="item-circle" src="img/item.jpg">
              <span>リップ</span>
            </a>
          </li>
          </div>
          <div class="eye">
          <li class="img_wrap1">
            <a href="#">
              <img class="item-circle" src="img/item.jpg">
              <span>アイメイク</span>
            </a>
          </li>
          </div>
          <div class="face">
          <li class="img_wrap">
            <a href="#">
              <img class="item-circle" src="img/item.jpg">
              <span>フェイス</span>
            </a>
          </li>
          </div>
          <div>
          <li class="img_wrap1">
            <a href="#">
              <img class="item-circle" src="img/item.jpg">
              <span>アクセサリー</span>
            </a>
          </li>
          </div>
          <div class="body">
          <li class="img_wrap1">
            <a href="#">
              <img class="item-circle" src="img/item.jpg">
              <span>ボディークリーム</span>
            </a>
          </li>
        </div>
        </ul>

      </div>
    </div>

    <div class="concept">
      <div class="container">
        <p><img class="main-title" src="img/t-concept.png"></p>
        <p><img class="flame" src="img/bg-flame.png"></p>
      </div>  
    </div>


    <div class="sns">
      <div class="container">
        <p><img class="main-title" src="img/t-sns.png"></p>
        <div class="sns-box">
          <div class="insta-box">
            <div class="insta">
              <i class="fab fa-instagram-square"></i>
              <p>INSTAGRAM</p>
            </div>
          </div>
          <div class="twitter-box">
            <div class="twitter">
              <i class="fab fa-twitter-square"></i>
              <p>TWITTER</p>
            </div> 
          </div>
      </div>  
    </div>

    <div class="information">
      <div class="container">
        <p><img class="main-title" src="img/t-info.png"></p>
      </div>  
    </div>
    
    

  <!-- おすすめここから -->
    <div class="recommended">
      <div class="container">

       <!-- informationの記事表示に使う -->
<!-- 指定した投稿記事の一部を出力（リンク・アイキャッチ・タイトル） -->
                  <?php
          $arg = array(
                    'posts_per_page' => 8, // 表示する件数
                    'orderby' => 'date', // 日付でソート
                    'order' => 'DESC', // DESCで最新から表示、ASCで最古から表示
                    'category_name' => 'info' // 表示したいカテゴリーのスラッグを指定
                );
          $posts = get_posts( $arg );
          if( $posts ): ?>
            <ul>
          <?php
              foreach ( $posts as $post ) :
                setup_postdata( $post ); ?>
                <div class="article">
                    <div class="lists">
                      <div class="list">
                          <a href="<?php the_permalink(); ?>">
                            <div class="pic">
                                <div class="pic-content">
                                  <?php the_post_thumbnail( array(265,180) ); ?><!-- 画像とサイズ設定 -->
                                </div>  
                                <div class="ribbon-content">
                                  <span class="ribbon">おすすめ</span>
                                </div>
                            </div>
                            <span class="list-title"><?php the_title(); ?></span><!-- 記事のタイトル -->
                            <div class="short-detail">
                              <div class="container">
                                <?php the_excerpt(); ?><!-- 抜粋を表示 -->
                              </div>
                             </div>
                          </a>
                    
                      </div>
                    </div>
                </div>
                
        <?php endforeach; ?>
            </ul>
        <?php
          endif;
          wp_reset_postdata();
        ?>
<!-- 記事の一部を出力ここまで -->
      </div>
    </div>



    <!-- フッターここから -->
    <?php get_footer(); ?>
