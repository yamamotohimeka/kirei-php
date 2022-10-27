<?php 
  require(dirname(__FILE__)."/hooks/girls.php");
  $title = '女の子';
  $templete = 'girls';
  $path = './';
  include $path .'components/header.php';
?>
<main class="girls">
  <div class="container">
    <h2 class="section-title">
      <img src="<?php echo $path; ?>assets/images/girls-head.jpeg" alt="GIRL女の子一覧">
    </h2>
    <nav class="girls__nav">
      <ul>
        <?php
          foreach($girls as $id => $girl):
        ?>
        <li>
          <img src="<?php echo $path; ?>assets/images/girl<?php echo $girl['img'];?>.jpeg"
            alt="KIREI(キレイ)の<?php echo $girl['name'];?>の画像">
          <h3><?php echo $girl['name'];?>(<?php echo $girl['age'];?>)</h3>
          <p><?php echo $girl['size'];?></p>
        </li>
        <?php 
          endforeach;
        ?>
      </ul>
    </nav>
  </div>
</main>
<?php  include $path .'components/footer.php';?>