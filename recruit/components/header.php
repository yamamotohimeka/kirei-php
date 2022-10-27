<?php

  
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
  <link rel="stylesheet" href="<?php echo $path; ?>assets/css/style.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
  <link rel="icon" href="<?php echo $path; ?>assets/images/favicon.ico" />

  <title><?php echo $title; ?>キレイ 求人</title>

  <meta name="description" content="大阪 キレイの求人サイトです｡当店は女の子第一主義のお店です!そして10代の女の子が稼げるお店です!" />
  <link rel="canonical" href="/recruit/" />
  <meta property="og:locale" content="ja_JP" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="キレイ 求人" />
  <meta property="og:description" content="大阪 キレイの求人サイトです｡当店は女の子第一主義のお店です!そして10代の女の子が稼げるお店です!" />
  <meta property="og:url" content="/" />
  <meta property="og:site_name" content="キレイ 求人" />
  <!-- <meta property="og:image" content="../wp-content/uploads/2022/02/ogp-stop-recruit.png" /> -->
  <meta property="og:image:width" content="1200" />
  <meta property="og:image:height" content="630" />
  <meta property="og:image:type" content="image/png" />
  <meta name="twitter:card" content="summary_large_image" />
</head>

<body>
  <header class="header">
    <div class="container">
      <p class="header-atte">
        <span>KIREIって？ | 大阪　風俗　求人　キレイ</span>18歳未満の方は<a href="http://www.yahoo.co.jp/">こちら</a>から退出お願いいたします
      </p>
      <h1 class="header-top">
        <a href="<?php echo $path; ?>">
          <img class="pc" src="<?php echo $path; ?>assets/images/header-top.png" alt="大阪 ホテルヘルス KIREI(キレイ)">
          <img class="tab" src="<?php echo $path; ?>assets/images/header-top-tab.png" alt="大阪 ホテルヘルス KIREI(キレイ)">
        </a>
      </h1>
      <ul class="header__menu flex">
        <li>
          <a href="<?php echo $path; ?>index.php">
          </a>
        </li>
        <li>
          <a href="<?php echo $path; ?>about.php">
          </a>
        </li>
        <li>
          <a href="<?php echo $path; ?>service.php">
          </a>
        </li>
      </ul>
      <ul class="header__menuTab flex">
        <li>
          <a href="<?php echo $path; ?>index.php">
            <img class="tab" src="<?php echo $path; ?>assets/images/header-menu0-tab.png" alt="KIREIって?">
          </a>
        </li>
        <li>
          <a href="<?php echo $path; ?>about.php">
            <img class="tab" src="<?php echo $path; ?>assets/images/header-menu1-tab.png" alt="お仕事、お給料について">
          </a>
        </li>
        <li>
          <a href="<?php echo $path; ?>service.php">
            <img class="tab" src="<?php echo $path; ?>assets/images/header-menu2-tab.png" alt="充実の好待遇">
          </a>
        </li>
      </ul>
      <ul class="header__info flex">
        <li>
          <a href="tel:0120-930-538">
            <img class="pc" src="<?php echo $path; ?>assets/images/header-info0.png" alt="tel">
            <img class="tab" src="<?php echo $path; ?>assets/images/header-info0-tab.png" alt="tel">
          </a>
        </li>
        <li>
          <a href="mailto:kireikobosyu@i.softbank.jp">
            <img class="pc" src="<?php echo $path; ?>assets/images/header-info1.png" alt="mail">
            <img class="tab" src="<?php echo $path; ?>assets/images/header-info1-tab.png" alt="mail">
          </a>
        </li>
        <li>
          <a href="http://line.me/ti/p/ugm3_3-hN3" target="_blank" rel="noopener">
            <img class="pc" src="<?php echo $path; ?>assets/images/header-info2.png" alt="line">
            <img class="tab" src="<?php echo $path; ?>assets/images/header-info2-tab.png" alt="line">
          </a>
        </li>
      </ul>
    </div>
  </header>