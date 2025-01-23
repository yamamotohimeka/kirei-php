<?php
$path = './';
$title = 'ホテルヘルスKIREI';
$templete = 'schedule';
include $path . 'components/header.php';
?>
<main class="schedule">
  <div class="container">
    <div class="section-title">
      <h2>本日の出勤</h2>
    </div>
    <div class="schedule__btn">
      <ul class="schedule__btn__list">
        <?php 
        $date = "<li class='schedule__btn__list-link'>
        <div class='schedule__btn__list-link_date'>
          <div class='schedule__btn__list-link_month'></div>
          <div class='schedule__btn__list-link_day'></div>
          <div class='schedule__btn__list-link_week'></div>
          </div>
      </li>";
            echo str_repeat($date, 7);
          ?>
      </ul>
      <h3 class="date"><?php echo date('m/d');  ?>
        (
        <?php $week = array( '日', '月', '火', '水', '木', '金', '土' );
        echo $week[date('w')];
        ?>
        )の出勤情報
      </h3>
    </div>
    <ul class="cast__box__list grid">
      <?php include $path . 'components/girls_card.php';?>
    </ul>

  </div>
</main>
<?php include $path . 'components/footer.php';?>