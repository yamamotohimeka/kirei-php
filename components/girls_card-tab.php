<?php require(dirname(__FILE__)."/../hooks/girl.php");

$counter = 0; 
foreach($girls as $girl):
  if (class_exists('block')) {
    continue;
  }
?>


<li class="girlCard fadeIn1 <?php if ($templete !== 'girl') { echo 'none'; } ?> <?php if($girl['sun']) echo 'Sun';?>
      <?php if($girl['mon']) echo 'Mon';?> <?php if($girl['tue']) echo 'Tue';?> <?php if($girl['wed']) echo 'Wed';?>
      <?php if($girl['thu']) echo 'Thu';?> <?php if($girl['fri']) echo 'Fri';?> <?php if($girl['sat']) echo 'Sat';?>">


  <div class="girlCard-frame">

    <div class="girlCard-frame-flex">

      <?php if ($templete !== 'schedule' && $templete !== 'top') : ?>

      <?php endif; ?>
      <?php if ($templete !== 'girl') :?>
      <p class="girlCard-info-store-time"><?php echo $girl['time'];?></p>
      <?php endif; ?>
      <div class="girlCard-img">
        <img src="./assets/img/<?php echo $girl['img'];?>.png" alt="女性の画像">
        <p class="girlCard-info-store">
          <?php echo $girl['store'];?>店
        </p>
      </div>
      <div class="girlCard-info-box">

        <div class="girlCard-info-name">
          <h3><?php echo $girl['name'];?></h3>
          <p><?php echo $girl['age'];?>歳</p>
        </div>
        <div class="girlCard-info-size">
          <p>T.<?php echo $girl['tall'];?> B.<?php echo $girl['bust'];?> W.<?php echo $girl['waist'];?>
            H.<?php echo $girl['height'];?></p>
        </div>

      </div>
    </div>
  </div>
</li>

<?php 

//変数にループ回数分足していく
endforeach;?>