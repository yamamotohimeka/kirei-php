<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $title; ?> | 「KIREI(キレイ)」の公式WEBサイト</title>

  <!-- SEO設定 -->
  <meta name="description" content="「KIREI(キレイ)」の公式WEBサイト" />
  <link rel="canonical" href="/recruit/" />
  <meta property="og:locale" content="ja_JP" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="KIREI(キレイ)" />
  <meta property="og:description" content="「KIREI(キレイ)」の公式WEBサイト" />
  <meta property="og:url" content="/" />
  <meta property="og:site_name" content="KIREI(キレイ)" />
  <meta property="og:image" content="<?php echo $path; ?>assets/images/OGP.png" />
  <meta property="og:image:width" content="1200" />
  <meta property="og:image:height" content="630" />
  <meta property="og:image:type" content="image/png" />
  <meta name="twitter:card" content="summary_large_image" />

  <link rel="stylesheet" href="<?php echo $path; ?>assets/css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
  <link rel="icon" href="<?php echo $path; ?>assets/images/favicon.ico" />
</head>

<body>
  <header class="header">
    <p class="header-atte tab">
      18歳未満の方は<a href="http://www.yahoo.co.jp/">コチラから退場</a>下さい。
    </p>
    <div class="container">
      <h1 class="header-top">
        <img class="pc" src="<?php echo $path; ?>assets/images/header-top.jpeg" alt="大阪 ホテルヘルス KIREI(キレイ)">
        <img class="tab" src="<?php echo $path; ?>assets/images/header-top-tab.jpeg" alt="大阪 ホテルヘルス KIREI(キレイ)">
      </h1>
      <nav class="header__nav pc">
        <ul>
          <li>
            <a href="<?php echo $path; ?>">
              <img src="<?php echo $path; ?>assets/images/header-nav0.jpeg" alt="TOP">
            </a>
          </li>
          <li>
            <a href="<?php echo $path; ?>girls.php">
              <img src="<?php echo $path; ?>assets/images/header-nav1.jpeg" alt="GIRLS">
            </a>
          </li>
          <li>
            <a href="<?php echo $path; ?>schedule.php">
              <img src="<?php echo $path; ?>assets/images/header-nav2.jpeg" alt="SCHEDULE">
            </a>
          </li>
          <li>
            <a href="<?php echo $path; ?>system.php">
              <img src="<?php echo $path; ?>assets/images/header-nav3.jpeg" alt="SYSTEM">
            </a>
          </li>
          <li>
            <a href="<?php echo $path; ?>access.php">
              <img src="<?php echo $path; ?>assets/images/header-nav4.jpeg" alt="ACCESS">
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </header>