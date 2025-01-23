<?php
require(dirname(__FILE__)."/../hooks/girl.php");

$loopCount = 0;

foreach ($girls as $girl):
    // カウンターが8未満の場合のみループを制限
    if ($loopCount < 10 && $templete === 'top'):
?>
<li class="girlCard fadeIn1 <?php if ($templete !== 'girl') { echo 'none'; } ?> <?php if($girl['sun']) echo 'Sun';?>
      <?php if($girl['mon']) echo 'Mon';?> <?php if($girl['tue']) echo 'Tue';?> <?php if($girl['wed']) echo 'Wed';?>
      <?php if($girl['thu']) echo 'Thu';?> <?php if($girl['fri']) echo 'Fri';?> <?php if($girl['sat']) echo 'Sat';?>">

  <div class="girlCard-frame">
    <!-- <a href="<?php echo $path; ?>profile.php?girl_id=<?php echo $girl['id'];?>"> -->
    <div class="girlCard-frame-flex">

      <?php if ($templete !== 'girl') :?>
      <p class="girlCard-info-store-time"> <?php echo $girl['time'];?></p>
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
    <!-- </a> -->
  </div>
</li>
<?php
    // カウンターをインクリメント
    $loopCount++;
    else:
        // 指定の条件以外の場合は制限なくループ
?>
<li class="girlCard fadeIn1 <?php if ($templete !== 'girl') { echo 'none'; } ?> <?php if($girl['sun']) echo 'Sun';?>
      <?php if($girl['mon']) echo 'Mon';?> <?php if($girl['tue']) echo 'Tue';?> <?php if($girl['wed']) echo 'Wed';?>
      <?php if($girl['thu']) echo 'Thu';?> <?php if($girl['fri']) echo 'Fri';?> <?php if($girl['sat']) echo 'Sat';?>">

  <div class="girlCard-frame">
    <!-- <a href="<?php echo $path; ?>profile.php?girl_id=<?php echo $girl['id'];?>"> -->
    <div class="girlCard-frame-flex">

      <?php if ($templete !== 'girl') :?>
      <p class="girlCard-info-store-time"> <?php echo $girl['time'];?></p>
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
    <!-- </a> -->
  </div>
</li>
<?php
    endif;
endforeach;
?>