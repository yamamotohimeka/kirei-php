<?php
// $templete = 'form';

// session_start();
// $token = sha1(uniqid(rand(), true));
// $_SESSION['key'] = $token;

?>

<div class="form">

  <form method="post" class="validationForm" id="the-form" enctype="multipart/form-data">
    <div class="form__flex">
      <div class="form-box">
        <div class="form-box-ttl">
          <label class="title pc">お名前</label>
          <label class="title tab">名前（仮名でも可能です）</label>
        </div>
        <div class="form-box-content">
          <input type="text" name=" name" value="" class="maxlength required" data-maxlength="10">
          <span>必須</span>
        </div>
      </div>

      <div class="form-box">
        <div class="form-box-ttl">
          <label class="title">年齢</label>
        </div>
        <div class="form-box-content">
          <input type="number" class="age" name="age" value="" min="18">
        </div>
      </div>

      <div class="form-box">
        <div class="form-box-ttl">
          <label class="title">電話番号</label>
        </div>
        <div class="form-box-content form-box-content-tel">
          <input type="tel" name=" tel" value="" size="40" id="telephone" class="telephone " placeholder="">

        </div>
      </div>

      <div class="form-box hissu">
        <div class="form-box-ttl">
          <label class="title">メールアドレス</label>
        </div>
        <div class="form-box-content form-box-content-mail">
          <input type="email" name=" email" value="" size="40" id="email" class="required email" placeholder="">
          <span>必須</span>
        </div>
      </div>

      <div class="form-box">
        <div class="form-box-ttl">
          <label class="title">LINE ID</label>
        </div>
        <div class="form-box-content form-box-content-tel">
          <input type="text" name="line" value="" size="40" id="line" class="" placeholder="">

        </div>
      </div>

      <div class="form-box">
        <div class="form-box-ttl">
          <label class="title">希望勤務地 </label>
          <p class="tab">　 ※複数選択可能 <span>必須</span></p>
        </div>
        <div class="form-box-content form-box-content-location">
          <p class="pc">※複数選択可能</p>
          <div class="form-box-radio">
            <div class="form-box-radio-inner check">
              <input type="checkbox" name="work[]" value="難波" id="kinmu1">
              <label for="kinmu1">
                <p class="pc">難波</p>
                <p class="tab">難波エリア</p>
              </label>
            </div>
            <div class="form-box-radio-inner">
              <input type="checkbox" name="work[]" value="日本橋" id="kinmu2">
              <label for="kinmu2">
                <p class="pc">日本橋</p>
                <p class="tab">日本橋エリア</p>
              </label>
            </div>
            <div class="form-box-radio-inner">
              <input type="checkbox" name="work[]" value="谷９" id="kinmu3">
              <label for="kinmu3">
                <p class="pc">谷九</p>
                <p class="tab">谷九エリア</p>
              </label>
            </div>
            <div class="form-box-radio-inner">
              <input type="checkbox" name="work[]" value="天王寺" id="kinmu4">
              <label for="kinmu4">
                <p class="pc">天王寺</p>
                <p class="tab">天王寺エリア</p>
              </label>
            </div>
            <div class="form-box-radio-inner">
              <input type="checkbox" name="work[]" value="梅田" id="kinmu5">
              <label for="kinmu5">
                <p class="pc">梅田</p>
                <p class="tab">梅田エリア</p>
              </label>
            </div>
            <div class="form-box-radio-inner">
              <input type="checkbox" name="work[]" value="京橋" id="kinmu6">
              <label for="kinmu6">
                <p class="pc">京橋</p>
                <p class="tab">京橋エリア</p>
              </label>
            </div>
            <span class="pc">必須</span>
          </div>
        </div>
      </div>

      <div class="form-box">
        <div class="form-box-ttl">
          <label class="title">面接希望日</label>
        </div>
        <div class="form-box-content">
          <input type="date" id="interviewDate" name="interviewDate" class="">
          <script>
          // 現在の日付を取得
          var currentDate = new Date();
          var year = currentDate.getFullYear();
          var month = (currentDate.getMonth() + 1).toString().padStart(2, '0'); // 0を詰める
          var day = currentDate.getDate().toString().padStart(2, '0'); // 0を詰める

          // 現在の日付をISO形式でフォーマット
          var formattedDate = year + '-' + month + '-' + day;
          // 現在の日付を1日進めてISO形式でフォーマット
          currentDate.setDate(currentDate.getDate() + 0);
          var nextDate = currentDate.toISOString().split('T')[0];
          // input要素にmin属性とmax属性を設定
          document.getElementById('interviewDate').setAttribute('min', nextDate);
          </script>
        </div>
      </div>

      <div class="form-box textbox">
        <div class="form-box-ttl">
          <label class="title">質問など</label>
        </div>
        <div class="form-box-content form-box-content-text">
          <textarea name="text" rows="11"></textarea>
        </div>
      </div>
    </div>
    <div class="form-submit">
      <input type="submit" value="応募する" class="submit-btn" id="submit">
      <input type="hidden" name="token" value="<?= $token ?>">
    </div>
  </form>



  <div id="form-load">
    <div class="load">
    </div>
    <div class="load1">
      <br>
      <div class="loader"></div>
      <p>送信中</p>
    </div>
  </div>
</div>

<!-- 結果メッセージ -->
<div id="result"></div><!-- /#result -->

<script src="https://www.google.com/recaptcha/api.js?render=6LdR2rgiAAAAAI4XI0J5eaPSyy62ltLteRbKOu33"></script>
<script type="module" src="php_mailer/js/form.js"></script>