<?php 
$templete = 'form';

session_start();
$token = sha1(uniqid(rand(), true));
$_SESSION['key'] = $token;

?>


<div class="form">
  <form method="post" class="validationForm" id="the-form">

    <div class="form-box">
      <label class="hissu">お名前(仮名も可)</label>
      <input type="text" name="name" value="" class="maxlength required" data-maxlength="10">
    </div>

    <div class="form-box">
      <label class="hissu">メールアドレス</label>
      <input type="email" name="email" value="" size="40" id="email" class="required email" placeholder="例）a@gmail.com">
    </div>

    <div class="form-box">
      <label class="hissu">年齢</label>
      <input type="number" class="age required" name="age" value="" min="18">
    </div>


    <div class="form-box">
      <label>ご質問があればこちらに</label>
      <textarea name="text" cols="40" rows="10"></textarea>
    </div>


    <div class="form-submit">
      <input type="submit" value="応募する" class="submit-btn" id="submit" value="応募する">
      <input type="hidden" name="token" value="<?= $token ?>">
    </div>
  </form>
</div>


<div id="form-load">
  <div class="load">
  </div>
  <div class="load1">
    <br>
    <div class="loader"></div>
    <p>送信中</p>
  </div>
</div>

<!-- 結果メッセージ -->
<div id="result"></div><!-- /#result -->

<script type="module" src="php_mailer/js/form.js"></script>
<script src="https://www.google.com/recaptcha/api.js?render=6LdR2rgiAAAAAI4XI0J5eaPSyy62ltLteRbKOu33"></script>