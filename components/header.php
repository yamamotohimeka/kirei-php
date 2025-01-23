<?php
$path = './';
$url = 'https://kirei-osaka.com/';
?>
<!DOCTYPE html>
<html lang="ja">

<head>

  <meta name="google-site-verification" content="" />
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo $path; ?>assets/css/style.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Island+Moments&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Shippori+Mincho+B1&display=swap" rel="stylesheet">
  <link rel="icon" href="<?php echo $path; ?>assets/img/favicon.ico" />
  <title><?php echo $title; ?> | トップページ</title>

  <!-- SEO設定 -->
  <meta name="description" content="ホテルヘルスKIREIの公式WEBサイト" />
  <link rel="canonical" href="/recruit/" />
  <meta property="og:locale" content="ja_JP" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="ホテルヘルスKIREI" />
  <meta property="og:description" content="-ホテルヘルスKIREI-の公式WEBサイト" />
  <meta property="og:url" content="/" />
  <meta property="og:site_name" content="ホテルヘルスKIREI" />
  <meta property="og:image" content="<?php echo $url; ?>assets/img/ogp.jpg" />
  <meta property="og:image:width" content="1200" />
  <meta property="og:image:height" content="630" />
  <meta name="twitter:card" content="summary_large_image" />
</head>

<body>
  <header class="header">

    <nav class="header__nav">
      <div class="header__logo">
        <a href=""> <img src="<?php echo $path; ?>assets/img/header-logo.png" alt=""></a>
      </div>
      <div class="container">
        <ul class="header__nav__list">
          <li class="header__nav__list-link <?php if ($templete === 'top') echo 'active'; ?>">
            <a href="<?php echo $path; ?>">
              <p>トップ</p>
            </a>
          </li>

          <li class="header__nav__list-link <?php if ($templete=== 'cast') echo 'active'; ?>">
            <a href="<?php echo $path; ?>girl.php">
              <p>女の子一覧</p>
            </a>
          </li>
          <li class="header__nav__list-link <?php if ($templete === 'schedule') echo 'active'; ?>">
            <a href="<?php echo $path; ?>schedule.php">
              <p>出勤情報</p>
            </a>
          </li>
          <li class="header__nav__list-link <?php if ($templete === 'system') echo 'active'; ?>">
            <a href="<?php echo $path; ?>system.php">
              <p>料金システム</p>
            </a>
          </li>
          <li class="header__nav__list-link <?php if ($templete === 'access') echo 'active'; ?>">
            <a href="<?php echo $path; ?>access.php">
              <p>アクセスマップ</p>
            </a>
          </li>
          <li class="header__nav__list-link ">
            <a target="_blank" href="recruit">
              <p>女性求人のお問い合わせ</p>
            </a>
          </li>
        </ul>
      </div>
      <div class="header__tel">
        <a href="tel:0120930538"> <img src="<?php echo $path; ?>assets/img/header-tel.png" alt=""></a>
      </div>
    </nav>
    <div class="tab">
      <div class="header__tab-flex">
        <div class="logo-sp">
          <a href="<?php echo $path; ?>"> <img src="<?php echo $path; ?>assets/img/header-logo.png" alt=""></a>

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
              <a href="<?php echo $path; ?>">
                トップ
              </a>
            </li>
            <li class="header__tabNav__list-link">
              <a href="<?php echo $path; ?>girl.php">
                女の子一覧
              </a>
            </li>
            <li class="header__tabNav__list-link">
              <a href="<?php echo $path; ?>schedule.php">
                出勤情報
              </a>
            </li>
            <li class="header__tabNav__list-link">
              <a href="<?php echo $path; ?>system.php">
                <p>料金システム</p>
              </a>
            </li>
            <li class="header__tabNav__list-link">
              <a href="<?php echo $path; ?>access.php">
                <p>アクセスマップ</p>
              </a>
            </li>
            <li class="header__tabNav__list-link">
              <a target="_blank" href="recruit">
                <p>女性求人のお問い合わせ</p>
              </a>
            </li>

          </ul>
        </div>
      </nav>
    </div>
  </header>