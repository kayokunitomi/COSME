<?php
/*
Template Name: ログインページ
*/
?>

<?php get_header(); ?>

<div class="members-box">
    <div class="container">

      <div class="members-inside">

        <div class="login">
            <div class="members-title">
               <span class="second">ログイン</span>
               <span class="first">・会員登録がお済みの方</span>
            </div>

        <!-- ユーザーログインフォーム -->
            <form class="my_form" name="my_login_form" id="my_login_form" action="" method="post">
              <div class="login-form">
                <div>
                    <label for="login_user_name">ユーザ名：</label>
                    <input id="login_user_name" name="user_name" type="text" required>
                </div>
                <div class="password">
                    <label for="login_password">パスワード：</label>
                    <input id="login_password" name="user_pass" id="user_pass" type="password" required>
                </div>
              </div>

                <button type="submit" name="my_submit" class="my_submit_btn" value="login">ログイン</button>
                <p class="my_forgot_pass">
                    <a href="">パスワードを忘れた方はこちらから</a>
                </p>
                <?php wp_nonce_field( 'my_nonce_action', 'my_nonce_name' );  //nonceフィールド設置 ?>
            </form>
         </div><!-- end of login -->


         <div class="new-member">
                 <!-- 新規会員登録 -->
                 <div class="members-title">
                    <span class="second">新規登録</span>
                    <span class="first">・まだご登録がお済みでない方</span>
                 </div>
                <div class="be-member">
                   <p>アカウントの作成はすぐできます。</p>
                   <p>次回からのお買い物が簡単になります。</p>
                    <div class="button-member">
                      <button type="button" class="btn">会員登録</button>
                    </div>
                </div>
         </div><!-- end of new-member -->



        </div><!----- end of members-inside------>

    </div><!----- end of container------>
</div><!----- end of members-box------>



<?php get_footer(); ?>
