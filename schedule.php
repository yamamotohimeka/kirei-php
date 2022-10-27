<?php 
  require(dirname(__FILE__)."/hooks/girls.php");
  $title = 'スケジュール';
  $templete = 'schedule';
  $path = './';

  include $path .'components/header.php';
?>
<main class="schedule">
  <div class="container">
    <h2 class="section-title">
      <img src="<?php echo $path; ?>assets/images/schedule-head.jpeg" alt="TODAY GIRL本日出勤の女の子">
    </h2>
    <nav class="schedule__nav">
      <ul>
        <?php
          foreach($girls as $id => $girl):
          if($girl['time'] !== ""):
        ?>
        <li>
          <img src="<?php echo $path; ?>assets/images/girl<?php echo $girl['img'];?>.jpeg"
            alt="KIREI(キレイ)の<?php echo $girl['name'];?>の画像">
          <p><?php echo $girl['time'];?></p>
          <h3><?php echo $girl['name'];?>(<?php echo $girl['age'];?>)</h3>
          <p><?php echo $girl['size'];?></p>
        </li>
        <?php 
          endif;
          endforeach;
        ?>
      </ul>
    </nav>
  </div>
</main>
<?php  include $path .'components/footer.php';?>