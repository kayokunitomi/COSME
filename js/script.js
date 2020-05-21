
// フォントの呼び出し（平成丸ゴシック Std）
(function(d) {
  var config = {
    kitId: 'mlt5whc',
    scriptTimeout: 3000,
    async: true
  },
  h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
})(document);


jQuery(function($) {

  //jQueryが読み込まれているか確認できる
// if(typeof jQuery != "undefined"){ 
// 	$(function(){
// 		alert('jQuery is ready.')
// 	});
// }

  //slickスライダーの設定
        $(".center").slick({
          dots: true,
          infinite: true,
          centerMode: true,
          slidesToShow: 4,
          slidesToScroll: 4,
        });

        
    

//MOREの表示テキスト変更
// $(".news-list li span").text("READ MORE..");

//スクロールでフェードイン
  $(function(){ 
    function animation(){
      $('.fadeInUp').each(function(){
        //ターゲットの位置を取得
        var target = $(this).offset().top;
        //スクロール量を取得
        var scroll = $(window).scrollTop();
        //ウィンドウの高さを取得
        var windowHeight = $(window).height();
        //ターゲットまでスクロールするとフェードインする
        if (scroll > target - windowHeight){
          $(this).css('opacity','1');
          $(this).css('transform','translateY(0)');
        } 
        if (scroll < 100) {
          $(this).css('transform','translateY(50px)');
         }
      });
    }
    
    animation();
    $(window).on('scroll load', function(){
      animation();
      
    });
  });


//ギャラリーのimg前後にタグを追加
$('.gallery-icon img').wrap('<figure></figure>');


//メニューバーのli内にimgとクラスを追加
$('#menu-item-372 a').prepend('<img src="http://localhost/wordpress1/wp-content/themes/cosme/img/login.png">');

$('#menu-item-372 img').addClass('user');

$('#menu-item-380 a').prepend('<img src="http://localhost/wordpress1/wp-content/themes/cosme/img/cart.png">');
 
$('#menu-item-380 img').addClass('cart');


//サイトマップのliにクラスを追加
$('.wsp-container li').addClass('sitemap-link');

//サイトマップのliの中のaの中のテキストにspanタグを追加
$('a').wrapInner('<span>');

//サイトマップのliのaの中にクラスを追加
$('.sitemap-link a').prepend('<i class="fas fa-external-link-alt"></i>');

  //VEGASの設定（トップページ）
  // $(function(){
  // $('#top-img').vegas({
  //   overlay: '/vegas//overlays/01.png',
   
  //   delay: 7000,
  //       timer: true,
  //       firstTransition: 'fade2',
  //       firstTransitionDuration: 2000,
  //       transition: 'fade2',
  //       transitionDuration: 2000,
  //       animation: 'random',
  //   slides: [
  //       { src: 'http://localhost/wordpress/wp-content/uploads/2020/04/bg2-scaled.jpg' },
  //       { src: 'http://localhost/wordpress/wp-content/uploads/2020/04/bg1-scaled.jpg' },
  //       { src: 'http://localhost/wordpress/wp-content/uploads/2020/03/island5.jpeg' },
  //       { src: 'http://localhost/wordpress/wp-content/uploads/2020/03/island3.jpeg' },
  //   ]
  // });
  // });
  
 
});

