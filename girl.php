<?php
$path = './';
$title = 'ホテルヘルスKIREI';
$templete = 'girl';
include $path . 'components/header.php';
?>
<main class="girl">
  <div class="container">
    <div class="section-title">
      <h2>女の子一覧</h2>
    </div>
    <div>
      <ul class="cast__box__list grid">
        <?php include $path . 'components/girls_card.php';?>
      </ul>
    </div>
  </div>
  </div>
</main>
<?php include $path . 'components/footer.php';?>