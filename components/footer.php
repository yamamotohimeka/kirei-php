<footer class="footer">
  <div class="footer__main">
    <?php if ($templete == 'top') :?>
    <nav class="footer__banner container">
      <ul>
        <li>
          <a href="https://work-mikke.jp/" target="_blank" rel="noopener">
            <img src="<?php echo $path; ?>assets/images/mikke.jpg">
          </a>
        </li>
        <li>
          <a href="https://happyhellowork.com/rank.php?s=4" target="_blank" rel="noopener">
            <img src="<?php echo $path; ?>assets/images/happy.gif">
          </a>
        </li>
        <li>
          <a href="https://www.bwork.net/" target="_blank" rel="noopener">
            <img src="<?php echo $path; ?>assets/images/b_1.gif">
          </a>
        </li>
        <li>
          <a href="https://q-pri.com/shop_list/area/102/102" target="_blank" rel="noopener">
            <img src="<?php echo $path; ?>assets/images/q_1.png">
          </a>
        </li>
        <li>
          <a href="https://q-pri.com/shop_list/area/102/102" target="_blank" rel="noopener">
            <img src="<?php echo $path; ?>assets/images/q_2.png">
          </a>
        </li>
        <li>
          <a href="https://q-pri.com/shop_list/area/102/102" target="_blank" rel="noopener">
            <img src="<?php echo $path; ?>assets/images/q_3.png">
          </a>
        </li>
        <li>
          <a href="https://www.46job.jp/" target="_blank" rel="noopener">
            <img src="<?php echo $path; ?>assets/images/yj.gif">
          </a>
        </li>
        <li>
          <a href="https://www.kosyunyu.com/kansai/kita_umeda_togano/" target="_blank" rel="noopener">
            <img src="<?php echo $path; ?>assets/images/kc.gif">
          </a>
        </li>
        <li>
          <a href="https://www.fucolle.com/kansai/" target="_blank" rel="noopener">
            <img src="<?php echo $path; ?>assets/images/f.gif">
          </a>
        </li>
        <li>
          <a href="https://www.yorutomo.net" target="_blank" rel="noopener">
            <img src="<?php echo $path; ?>assets/images/yt.jpg">
          </a>
        </li>
        <li>
          <a href="https://fujoho.jp/" target="_blank" rel="noopener">
            <img src="<?php echo $path; ?>assets/images/kuti.gif">
          </a>
        </li>
        <li>
          <a href="https://fuzoku.jp/kirei3/" target="_blank" rel="noopener">
            <img src="<?php echo $path; ?>assets/images/fj.jpg">
          </a>
        </li>
        <li>
          <a href="https://mens-qzin.jp/" target="_blank" rel="noopener">
            <img src="<?php echo $path; ?>assets/images/mv.gif">
          </a>
        </li>
      </ul>
    </nav>
    <?php endif; ?>

    <div class="container pc">
      <img class="footer-logo" src="<?php echo $path; ?>assets/img/header-logo.png" alt="">
      <nav class="footer__main__nav pc">
        <ul class="footer__main__nav__list">

          <li><a href="<?php echo $path; ?>">トップ</a></li>
          <li><a href="<?php echo $path; ?>girl.php">女の子一覧</a>
          <li><a href="<?php echo $path; ?>schedule.php">出勤情報</a>
          </li>
          <li><a href="<?php echo $path; ?>system.php">料金システム</a></li>
          <li><a href="<?php echo $path; ?>access.php">アクセス</a></li>
          <li class="recruit"> <a target="_blank" href="recruit">
              求人サイトはコチラから
            </a></li>
        </ul>
      </nav>
      <div>
        <nav class="tab footer__nav-tab">
          <ul>
            <li><a href="<?php echo $path; ?>"><img src="<?php echo $path; ?>assets/img/footer-link-top.png" alt="">
                <p>トップ</p>
              </a></li>
            <li><a href="<?php echo $path; ?>concept.php"><img
                  src="<?php echo $path; ?>assets/img/footer-link-concept.png" alt="">
                <p>コンセプト</p>
              </a></li>
            <li><a href="<?php echo $path; ?>system.php"><img
                  src="<?php echo $path; ?>assets/img/footer-link-system.png" alt="">
                <p>料金システム</p>
              </a></li>

            <li><a href="<?php echo $path; ?>girl.php"><img src="<?php echo $path; ?>assets/img/footer-link-girl.png"
                  alt="">
                <p>在籍女性</p>
              </a></li>
            <li><a href="<?php echo $path; ?>schedule.php"><img
                  src="<?php echo $path; ?>assets/img/footer-link-schedule.png" alt="">
                <p>スケジュール</p>
              </a></li>
            <li><a href="<?php echo $path; ?>event.php"><img src="<?php echo $path; ?>assets/img/footer-link-event.png"
                  alt="">
                <p>学校行事</p>
              </a></li>
            <li> <a target="_blank" href="recruit"><img src="<?php echo $path; ?>assets/img/footer-link-recruit.png"
                  alt="">
                <p>求人サイト</p>
              </a></li>
          </ul>
        </nav>

      </div>
      <div class="footer__space tab"></div>
      <div class="footer-top"><img src="<?php echo $path; ?>assets/img/go-top.png" alt=""></div>
    </div>
    <div class="tab">
      <a href="tel:0120930538">
        <img src="<?php echo $path; ?>assets/img/footer-tel.png" alt="">
      </a>

    </div>
  </div>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/locale/ja.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/protonet-jquery.inview/1.1.2/jquery.inview.min.js"></script>
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script type="text/javascript" src="<?php echo $path; ?>/assets/js/index.js"></script>
<?php if ($templete === 'top') :?>
<script type="text/javascript" src="<?php echo $path; ?>/assets/js/girls.js"></script>
<?php endif; ?>
</body>

</html>