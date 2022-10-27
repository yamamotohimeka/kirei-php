<?php 
  $title = 'アクセス';
  $templete = 'access';
  $path = './';
  include $path .'components/header.php';
?>
<main class="access">
  <div class="container">
    <h2 class="access-title">
      <img src="<?php echo $path; ?>assets/images/access-head.jpeg" alt="ACCESSアクセス">
    </h2>
    <div class="access-contents">
      <img class="pc" src="<?php echo $path; ?>assets/images/access-contents.jpeg" alt="ACCESSアクセス">
      <img class="tab" src="<?php echo $path; ?>assets/images/access-contents-tab.jpeg" alt="ACCESSアクセス">
    </div>
  </div>
</main>
<?php  include $path .'components/footer.php';?>