  <footer>
    <div class="container">
      <img class="footer-logo" src="<?php echo get_template_directory_uri(); ?>/img/footer-logo.png">
      
      <div class="footer-link">
        <div class="container">
            <div class="footer-block-in">
                <?php dynamic_sidebar('ウィジェット1'); ?>
            </div>
            <div class="footer-block-in1">
                <?php dynamic_sidebar('ウィジェット2'); ?>
            </div>
            <div class="footer-sns">
                <i class="fab fa-facebook-square"></i>
                <i class="fab fa-twitter-square"></i>
                <i class="fab fa-instagram-square"></i>
                <div class="copy-right">
                <p>COPYRIGHT SAMPLE SITE ALL RIGHTS RESERVED.</p>
                </div>
            </div>
            
        </div>
      </div>

   </div>  
  </footer>

 
<?php wp_footer(); ?><!--システム・プラグイン用-->
<div id="page-top" class="page-top">
    <p><a id="move-page-top" class="move-page-top">TOP</a></p>
</div>
</body>
</html>
