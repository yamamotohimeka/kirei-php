<?php
$path = './';
$url = 'https://kirei-php.tribe-webtest.xyz/recruit/';

  session_start();
  header('X-Frame-Options: DENY');
  $token = sha1(uniqid(rand(), true));
  $_SESSION['key'] = $token;  

  $RECAPTUER = $_ENV["V3_SECRETKEY"];
$message = null;

if (isset($_REQUEST["recaptchaToken"]) == true)	/* 送信ボタンが押された ? */
{
	/** トークンチェック */
	$token = $_REQUEST["recaptchaToken"];

	if (token_chk($token) == true)	/* トークンチェックOK */
	{
		$message = "<p class=\"OK\">reCAPTCHAチェックOKです。</p>";
	}
	else
	{
		$message = "<p class=\"NG\">reCAPTCHAチェックNGです。</p>";
	}
}

function token_chk($token)
{
	global $RECAPTUER;

	/** ステータス初期化 */
	$sts = false;

	$result = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=${RECAPTUER}&response=${token}");
	$chk = json_decode($result);

	if ($chk->success == true)	/* トークンエラー */
	{
		$sts = true;
	}

	/** 処理終了 */
	return $sts;
}

    ?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta property="og:locale" content="ja_JP" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="ホテルヘルスKIREIの求人サイトです。" />
  <meta property="og:description"
    content="大阪のホテルヘルス求人サイトKIREIの求人サイトです。在籍の8割が未経験からスタート。日給3万円以上も可能！24時間365日･年中無休で受付中、お気軽にお問い合わせ下さい。" />
  <meta property="og:url" content="http://speed-recruit.net/" />
  <meta property="og:site_name" content="ホテルヘルスKIREI" />
  <meta property="og:image" content="<?php echo $url; ?>assets/img/ogp.jpg" />
  <meta property="og:image:width" content="1200" />
  <meta property="og:image:height" content="630" />
  <meta name="twitter:card" content="summary_large_image" />
  <link rel="stylesheet" href="<?php echo $path; ?>assets/css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@300&family=Pinyon+Script&display=swap"
    rel="stylesheet">
  <link rel="icon" href="<?php echo $path; ?>assets/img/favicon.ico" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Zen+Maru+Gothic:wght@300;400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
  <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
  <script src="https://cdn.jsdelivr.net/npm/flatpickr/dist/l10n/ja.js"></script>
  <title>KIREI女性求人</title>
  <script>
  (function(d) {
    var config = {
        kitId: 'flw8oia',
        scriptTimeout: 3000,
        async: true
      },
      h = d.documentElement,
      t = setTimeout(function() {
        h.className = h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive";
      }, config.scriptTimeout),
      tk = d.createElement("script"),
      f = false,
      s = d.getElementsByTagName("script")[0],
      a;
    h.className += " wf-loading";
    tk.src = 'https://use.typekit.net/' + config.kitId + '.js';
    tk.async = true;
    tk.onload = tk.onreadystatechange = function() {
      a = this.readyState;
      if (f || a && a != "complete" && a != "loaded") return;
      f = true;
      clearTimeout(t);
      try {
        Typekit.load(config)
      } catch (e) {}
    };
    s.parentNode.insertBefore(tk, s)
  })(document);
  </script>
</head>

<body>
  <header class="header">
    <nav class="header__nav pc">
      <div class="header__logo-sub">
        <img src="<?php echo $path; ?>assets/img/main-logo.png" alt="">
      </div>
      <div class="container">
        <ul class="header__nav__list">
          <div class="header__logo">
            <img src="<?php echo $path; ?>assets/img/main-logo.png" alt="">
          </div>
          <li class="header__nav__list-link">
            <a href="#concept" class="header__link">

              <p>コンセプト</p>
            </a>
          </li>
          <li class="header__nav__list-link">
            <a href="#salary" class="header__link">

              <p>お給料について</p>
            </a>
          </li>
          <li class="header__nav__list-link">
            <a href="#about" class="header__link">
              <p>待遇について
              </p>
            </a>
          </li>
          <li class="header__nav__list-link">
            <a href="#job" class="header__link">

              <p>お仕事について</p>
            </a>
          </li>
          <li class="header__nav__list-link">
            <a href=" #contact" class="header__link">

              <p>応募</p>
            </a>
          </li>
          <div class="header__tel">
            <a href="tel:0120-930-538"> <img src="<?php echo $path; ?>assets/img/header-tel.png" alt=""></a>
          </div>
        </ul>
        <div class="header__tel-sub">
          <a href="tel:0120-930-538"> <img src="<?php echo $path; ?>assets/img/header-tel.png" alt=""></a>
        </div>
      </div>
    </nav>
    <div class="tab">
      <div class="header__tab-flex">
        <div class="logo-sp">
          <img src="<?php echo $path; ?>assets/img/main-logo.png" alt="">
        </div>
        <div class="header__tabButton-bg">

          <div class="header__tabButton">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>
      </div>



      <nav class="header__tabNav tab">
        <div class="container">
          <ul class="header__tabNav__list">
            <li class="header__tabNav__list-link">
              <a href="#concept">
                コンセプト
              </a>
            </li>
            <li class="header__tabNav__list-link">
              <a href="#salary">
                お給料について
              </a>
            </li>
            <li class="header__tabNav__list-link">
              <a href="#about">
                待遇について
              </a>
            </li>
            <li class="header__tabNav__list-link">
              <a href="#job">
                お仕事について
              </a>
            </li>
            <li class="header__tabNav__list-link">
              <a href="#contact">
                応募
              </a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </header>