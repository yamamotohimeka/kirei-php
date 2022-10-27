<?php 
  $title = 'SYSTEM';
  $templete = 'system';
  $path = './';
  include $path .'components/header.php';
?>
<main class="system">
  <div class="container">
    <h2 class="section-title">
      <img src="<?php echo $path; ?>assets/images/system-head.jpeg" alt="SYSTEM料金システム">
    </h2>
    <div class="system-contents">
      <img class="pc" src="<?php echo $path; ?>assets/images/system-contents.jpeg" alt="SYSTEM料金システム">
      <img class="tab" src="<?php echo $path; ?>assets/images/system-contents-tab.jpeg" alt="SYSTEM料金システム">
    </div>
  </div>
</main>
<?php  include $path .'components/footer.php';?>