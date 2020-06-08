<?php
// function my_styles() {
//   wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css', array(), '1.0.3' );
// }
// add_action( 'wp_enqueue_scripts', 'my_styles' );

/* CSS呼び出し（親テーマのCSS） */
function theme_enqueue_styles() {
  wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

/* JS呼び出し*/
function my_scripts() {
  wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/script.js', array( 'jquery' ), '1.0.2', true );
  wp_enqueue_script( 'script-name2', get_template_directory_uri() . '/slick/slick.min.js', array( 'jquery' ), '1.0.2', true );

}
add_action( 'wp_enqueue_scripts', 'my_scripts' );



/* ソース削除（バージョン情報） */
remove_action( 'wp_head', 'wp_generator' );

/* ソース削除（外部の投稿ツール用タグ） */
remove_action( 'wp_head', 'wlwmanifest_link' );

/* ソース削除（バージョン情報） */
remove_action( 'wp_head', 'rsd_link' );


/* 全てのページの自動整形を無効 */
  add_action('init', function() {
    remove_filter('the_excerpt', 'wpautop');// 抜粋の自動整形を無効にする
    remove_filter('the_content', 'wpautop');// 記事の自動整形を無効にする
    remove_filter('the_title', 'wpautop'); // タイトルの自動整形を無効にする
    });
    add_filter('tiny_mce_before_init', function($init) {
    $init['wpautop'] = false;
    $init['apply_source_formatting'] = ture;
    return $init;
    });


  /* ビジュアルエディタの余計な機能無効 */
  function override_mce_options( $init_array ) {
    global $allowedposttags;

    $init_array['valid_elements']          = '*[*]';
    $init_array['extended_valid_elements'] = '*[*]';
    $init_array['valid_children']          = '+a[' . implode( '|', array_keys( $allowedposttags ) ) . ']';
    $init_array['indent']                  = true;
    $init_array['wpautop']                 = false;
    $init_array['force_p_newlines']        = false;

    return $init_array;
}

add_filter( 'tiny_mce_before_init', 'override_mce_options' );



/* wordpress内のメニューバーを有効にする */
register_nav_menu('mainmenu', 'メニュー');



/* フッターウィジェットの作成 */
function my_register_sidebar() {
    register_sidebars(1,
        array(
        'name'=>'ウィジェット1',
        'before_widget' => '<ul><li>',
        'after_widget' => '</li></ul>',
        ));
    register_sidebars(1,
        array(
        'name'=>'ウィジェット2',
        'before_widget' => '<ul><li>',
        'after_widget' => '</li></ul>',
        ));
    register_sidebars(1,
        array(
        'name'=>'ヘッダー',
        'before_widget' => '<ul><li>',
        'after_widget' => '</li></ul>',
        ));
        register_sidebars(1,
        array(
        'name'=>'wp-oliveショッピングカート',
        'before_widget' => '<ul><li>',
        'after_widget' => '</li></ul>',
        ));
        register_sidebars(1,
        array(
        'name'=>'wp-olive商品カテゴリー',
        'before_widget' => '<ul><li>',
        'after_widget' => '</li></ul>',
        ));

}
add_action('init', 'my_register_sidebar');


  // 記事表示件数の設定
//  function change_posts_per_page($query) {
//   if ( is_admin() || ! $query->is_main_query() )
//       return;

  /* アーカイブページ */
  // if ( $query->is_archive() ) {
  //     $query->set( 'posts_per_page', '10' );
  // }
  /* ポストアーカイブページ */
  // if ( $query->is_post_type_archive() ) {
  //     $query->set( 'posts_per_page', '30' );
  // }

  /* カテゴリーページ */
//  if ( $query->is_category() ) {
//   $query->set( 'posts_per_page', '12' );
// }

  /* 検索ページ */
  // if ( $query->is_search() ) {
  //     $query->set( 'posts_per_page', '20' );
  // }

  /* トップページ */
    // if ( $query->is_home() ) {
    //   $query->set( 'posts_per_page', '3' );
//   }
// }
// add_action( 'pre_get_posts', 'change_posts_per_page' );


//////////////////////////////////////////////////
//ページャー（カテゴリーページ）
//////////////////////////////////////////////////

function pagination( $pages = '', $range = 2 ) {
  $showitems = ( $range * 2 )+1;
  global $paged;
  if ( empty( $paged ) ) $paged = 1;
  if ( $pages == '' ) {
    global $wp_query;
    $pages = $wp_query->max_num_pages;
    if ( !$pages ) {
      $pages = 1;
    }
  }

  if ( 1 != $pages ) {
    echo "<div class=\"pagination\"><span>Page ".$paged." of ".$pages."</span>";
    if ( $paged > 2 && $paged > $range+1 && $showitems < $pages ) echo "<a href='".get_pagenum_link(1)."'>&laquo; First</a>";
    if ( $paged > 1 && $showitems < $pages ) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo; Previous</a>";
    for ( $i=1; $i <= $pages; $i++ ) {
      if ( 1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ) ) {
        echo ( $paged == $i ) ? "<span class=\"current\">".$i."</span>":"<a href='".get_pagenum_link($i)."' class=\"inactive\">".$i."</a>";
      }
    }
    if ( $paged < $pages && $showitems < $pages ) echo "<a href=\"" . get_pagenum_link( $paged + 1 ) . "\">Next &rsaquo;</a>";
    if ( $paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages ) echo "<a href='" . get_pagenum_link($pages) . "'>Last &raquo;</a>";
    echo "</div>\n";
  }
}



 //投稿・固定ページの画像パス短縮
//  function imagepassshort($arg) {
//   $content = str_replace('"img/', '"' . get_bloginfo('template_directory') . '/img/', $arg);
//   return $content;
//   }
//   add_action('the_content', 'imagepassshort');


//編集画面の画像パスをショートコードで短くする（img/を[img]/に変える）
function img_func() {
  return get_template_directory_uri().'/img/';
}
add_shortcode('img', 'img_func');

//編集画面の画像パスをショートコードで短くする（スライダーのslick/を[slick]/に変える）
function slick_func() {
  return get_template_directory_uri().'/slick/';
}
add_shortcode('slick', 'slick_func');


// アイキャッチ画像関連
function my_after_setup_theme(){
  // アイキャッチ画像を有効にする
  add_theme_support( 'post-thumbnails' ); 
  // アイキャッチ画像サイズを指定する（横：640px 縦：384）
  // 画像サイズをオーバーした場合は切り抜き
  set_post_thumbnail_size( 700, 515, true );
 }
 add_action( 'after_setup_theme', 'my_after_setup_theme' );



/*ショートコード 表示テスト [jisaku]を入れる*/
// function jisaku_shortcode() {
// 	return "サンプルツアーカンパニー：〇〇代表取締役";
// }
// add_shortcode('jisaku', 'jisaku_shortcode');


 /*投稿・固定ページ内でphpファイルをショートコードで読み込む*/
function my_php_Include($params = array()) {
  extract(shortcode_atts(array('file' => 'default'), $params));
  ob_start();
  include(STYLESHEETPATH . "/$file.php");
  return ob_get_clean();
  }
  add_shortcode('call_php', 'my_php_Include');

 
   /*カスタム投稿タイプ作成（リップ商品）*/
function create_post_type() {
  register_post_type( 'lip', // 投稿タイプスラッグ名
    array(
      'labels' => array(
      'name' => __( 'リップ商品' ), // ダッシュボードに表示する投稿タイプ名
      'singular_name' => __( 'リップ商品' )
    ),
      'public' => true,
      'menu_position' =>5, // 表示する位置
      'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'custom-fields' ,'comments' ),
      )
  );
  register_taxonomy_for_object_type('category', 'lip'); // カスタム投稿にカテゴリーを追加
}
add_action( 'init', 'create_post_type' );



   /*カスタム投稿タイプ作成（アイメイク商品）*/
function create1_post_type() {
  register_post_type( 'eyemake', // 投稿タイプスラッグ名
    array(
      'labels' => array(
      'name' => __( 'アイメイク商品' ), // ダッシュボードに表示する投稿タイプ名
      'singular_name' => __( 'アイメイク商品' )
    ),
      'public' => true,
      'menu_position' =>5, // 表示する位置
      'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'custom-fields' ,'comments' ),
      )
  );
  register_taxonomy_for_object_type('category', 'eyemake'); // カスタム投稿にカテゴリーを追加
}
add_action( 'init', 'create1_post_type' );


    /*カスタム投稿タイプ作成（フェイス商品）*/
    function create2_post_type() {
    register_post_type( 'face', // 投稿タイプスラッグ名
      array(
        'labels' => array(
        'name' => __( 'フェイス商品' ), // ダッシュボードに表示する投稿タイプ名
        'singular_name' => __( 'フェイス商品' )
      ),
        'public' => true,
        'menu_position' =>5, // 表示する位置
        'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'custom-fields' ,'comments' ),
        )
    );
    register_taxonomy_for_object_type('category', 'face'); // カスタム投稿にカテゴリーを追加
  }
add_action( 'init', 'create2_post_type' );


  /*カスタム投稿タイプ作成（アクセサリー商品）*/
  function create3_post_type() {
    register_post_type( 'accessories', // 投稿タイプスラッグ名
      array(
        'labels' => array(
        'name' => __( 'アクセ商品' ), // ダッシュボードに表示する投稿タイプ名
        'singular_name' => __( 'アクセ商品' )
      ),
        'public' => true,
        'menu_position' =>5, // 表示する位置
        'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'custom-fields' ,'comments' ),
        )
    );
    register_taxonomy_for_object_type('category', 'accessories'); // カスタム投稿にカテゴリーを追加
  }
  add_action( 'init', 'create3_post_type' );


  /*カスタム投稿タイプ作成（ボディークリーム商品）*/
  function create4_post_type() {
    register_post_type( 'bodycream', // 投稿タイプスラッグ名
      array(
        'labels' => array(
        'name' => __( 'ボディークリーム商品' ), // ダッシュボードに表示する投稿タイプ名
        'singular_name' => __( 'ボディークリーム商品' )
      ),
        'public' => true,
        'menu_position' =>5, // 表示する位置
        'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'custom-fields' ,'comments' ),
        )
    );
    register_taxonomy_for_object_type('category', 'bodycream'); // カスタム投稿にカテゴリーを追加
  }
  add_action( 'init', 'create4_post_type' );


  /*ショートコードが使えない時に有効にする*/  
//   function postjack($the_content) {
//     return do_shortcode( $the_content );
// }
// add_filter('the_content', 'postjack');
