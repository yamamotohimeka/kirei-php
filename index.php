<?php
$path = './';
$title = 'ホテルヘルスKIREI';
$templete = 'top';
include $path . 'components/header.php';
?>


<main class="top">

  <div class="top__main fadeIn1">
    <div class="top-swiper ">
      <div class="swiper">
        <!-- 必要に応じたwrapper -->
        <div class="swiper-wrapper">
          <!-- スライド -->
          <div class="swiper-slide"><img src="<?php echo $path; ?>assets/img/event1.png" alt=""></div>
          <div class="swiper-slide"><img src="<?php echo $path; ?>assets/img/event2.png" alt=""></div>
          <div class="swiper-slide"><img src="<?php echo $path; ?>assets/img/event3.png" alt=""></div>
        </div>
        <div class="swiper-button-outer">
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </div>
  </div>
  <div class="top__schedule">
    <div class="container">
      <div class="section-title">
        <h2>本日の出勤</h2>
      </div>
      <!-- <h3 class="date"><?php echo date('m/d');  ?>
        (
        <?php $week = array( '日', '月', '火', '水', '木', '金', '土' );
        echo $week[date('w')];
        ?>
        )
      </h3> -->
      <div class="pc">
        <ul class="cast__box__list grid">
          <?php include $path . 'components/girls_card.php';?>
        </ul>
        <a class="link-girl" href="<?php echo $path; ?>girl.php">
          <p>全てを表示</p>
        </a>
      </div>
      <div class="tab">
        <ul class="cast__box__list grid">
          <?php include $path . 'components/girls_card-tab.php';?>
        </ul>
        <a href="<?php echo $path; ?>schedule.php">
          <p>全てを表示</p>
        </a>
      </div>

      <div class="bottom-space"></div>
    </div>
  </div>
  <div class="top__ranking">
    <div class="container">
      <div class="section-title">
        <h2>Pickup Girl</h2>
      </div>
    </div>
    <div class="scrool fadeIn1">

      <!-- Swiper -->
      <div class="swiper-container">
        <div class="swiper-wrapper">

          <?php include $path . 'components/girls_card-ranking.php';?>

        </div>
        <!-- Add Navigation -->
        <div class="swiper-button-next3"></div>
        <div class="swiper-button-prev3"></div>
      </div>
      <div class="tab recruit-link-tab">
        <a href="recruit"> <img src="<?php echo $path; ?>assets/img/recruit-link.png" alt=""></a>

      </div>
    </div>
  </div>



</main>


<?php include $path . 'components/footer.php';?>