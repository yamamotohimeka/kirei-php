<?php 
  require(dirname(__FILE__)."/hooks/girls.php");
  $title = 'KIREI';
  $templete = 'top';
  $path = './';
  include $path .'components/header.php';

?>
<main class="top">
  <div class="container">
    <ul class="top-banner">
      <li>
        <img src="<?php echo $path; ?>assets/images/banner0.jpeg" alt="一番手割">
      </li>
      <li>
        <img src="<?php echo $path; ?>assets/images/banner1.jpeg" alt="ガーターベルト&ストッキングDAY">
      </li>
      <li>
        <img src="<?php echo $path; ?>assets/images/banner2.jpeg" alt="ご新規様割">
      </li>
      <li>
        <img src="<?php echo $path; ?>assets/images/banner3.jpeg" alt="KIREIの待遇">
      </li>
    </ul>
    <div class="top__pick">
      <h2 class="section-title">
        <img src="<?php echo $path; ?>assets/images/pick-head.jpeg" alt="PICKUP GIRL">
      </h2>
      <nav class="top__pick__nav">
        <ul>
          <?php
            foreach($girls as $id => $girl):
            if($girl['pick'] !== false):
          ?>
          <li>
            <img src="<?php echo $path; ?>assets/images/girl<?php echo $girl['img'];?>.jpeg"
              alt="KIREI(キレイ)の<?php echo $girl['name'];?>の画像">
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
  </div>
</main>
<?php  include $path .'components/footer.php';?>