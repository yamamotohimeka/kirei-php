<?php
$path = './';
$title = 'ホテルヘルスKIREI';
$templete = 'system';
include $path . 'components/header.php';
?>
<main class="system">
  <div class="container">
    <div class="section-title">
      <h2>料金システム</h2>
    </div>
  </div>
  <div class="system__main">
    <div class="container">
      <div class="system__main-base">
        <h3 class="fadeIn1">通常料金</h3>
        <ul>
          <li class="fadeIn1">
            <p>入会金</p>
            <p>1000円</p>
          </li>
          <li class="fadeIn1">
            <p>本指名料</p>
            <p>2000円</p>
          </li>
          <li class="fadeIn1">
            <p>延長10分</p>
            <p>3000円</p>
          </li>
          <li class="fadeIn1">
            <p>特別指名料金</p>
            <p><img src="<?php echo $path; ?>assets/img/red-star.png" alt="">　マーク1つに付き+1000円</p>
          </li>
        </ul>
      </div>
      <div class="system__main-all">
        <h3 class="fadeIn1">ALLTIMES</h3>
        <ul>
          <li class="fadeIn1">
            <p class="time">60分</p>
            <p class="price">18000円</p>
          </li>
          <li class="fadeIn1">
            <p class="time">80分</p>
            <p class="price">23000円</p>
          </li>
          <li class="fadeIn1">
            <p class="time">100分</p>
            <p class="price">28000円</p>
          </li>
          <li class="fadeIn1">
            <p class="time">120分</p>
            <p class="price">33000円</p>
          </li>
        </ul>
        <img class="credit fadeIn1" src="<?php echo $path; ?>assets/img/credit-card.png" alt="">
      </div>
      <div class="system__main-option">
        <ul>
          <li class="fadeIn1">
            <p class="name">メガネ</p>
            <p class="dot">…………………………</p>
            <p class="price">2000円</p>
          </li>
          <li class="fadeIn1">
            <p class="name">コスプレ</p>
            <p class="dot">………………………</p>
            <p class="price">3000円</p>
          </li>
          <li class="fadeIn1">
            <p class="name">ピンクローター</p>
            <p class="dot">………………</p>
            <p class="price">2000円</p>
          </li>
        </ul>
      </div>
      <div class="system__main-caution ">
        <p class="ttl fadeIn1">
          注意事項
        </p>
        <ul class="fadeIn1">
          <li>●暴力団関係者、またはそれに準ずる方
          </li>
          <li>●本番行為、もしくは強要させる方
          </li>
          <li>●性病の方、もしくはそう受け取られる方
          </li>
          <li>●ドラッグまたはそれらに属する薬物を服用、使用、強要する行為
          </li>
          <li>●お客様所有のプレイ道具を使用する行為
          </li>
          <li>●当店キャストに対する暴力行為、もしくは等しい行為
          </li>
          <li>●スカウト行為、またはそれに準ずる好意</li>
        </ul>
        <ul class="fadeIn1">
          <li>※以下に該当する項目がある場合サービスをお断りさせて頂く場合がございます。</li>
          <li>泥酔状態の方
          </li>
          <li>熱のある方
          </li>
          <li>高血圧の方
          </li>
          <li>痛風・リュウマチの方
          </li>
          <li>重度の糖尿病の方
          </li>
          <li>心臓の病気を患われている方
          </li>
          <li>脳の病気を患われている方</li>
        </ul>
        <p class="red fadeIn1">
          ※上記事項が守られないお客様は、サービスを中断いたします。<br>
          　その際、返金には応じません。<br>
          　悪質と判断した場合には、警察に届出致します。
        </p>
      </div>
    </div>
  </div>
</main>
<?php include $path . 'components/footer.php';?>