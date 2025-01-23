<?php
require(dirname(__FILE__)."/../hooks/girl.php");

// データのファイルパス
$dataFile = 'random_girls.json';

// データの読み込み
if (file_exists($dataFile)) {
    $data = json_decode(file_get_contents($dataFile), true);
} else {
    $data = array();
}

// 現在の日付と曜日を取得
$currentDate = date("Y-m-d");
$currentDayOfWeek = date("N"); // 1 (Monday) to 7 (Sunday)

// ランダムなデータの生成
$girls = array_filter($girls, function($girl) {
    return !in_array($girl['img'], ['ng', 'trial']);
});

// 月曜日でない場合かつ random_girls.json が存在しない場合は新たなランダムなデータを生成
if ($currentDayOfWeek != 1 && !file_exists($dataFile)) {
    shuffle($girls);
    $randomGirls = array_slice($girls, 0, 7);

    // データの更新
    $data = array(
        'date' => $currentDate,
        'random_girls' => $randomGirls
    );

    // データの保存
    file_put_contents($dataFile, json_encode($data));
} elseif ($currentDayOfWeek == 1 && (!isset($data['date']) || $data['date'] !== $currentDate)) {
    // 月曜日の場合かつ日付が更新されている場合は新たなランダムなデータを生成
    shuffle($girls);
    $randomGirls = array_slice($girls, 0, 5);

    // データの更新
    $data = array(
        'date' => $currentDate,
        'random_girls' => $randomGirls
    );

    // データの保存
    file_put_contents($dataFile, json_encode($data));
} else {
    // 既存のデータを取得
    $randomGirls = isset($data['random_girls']) ? $data['random_girls'] : array();
}

// データの表示
$counter = 1;
foreach ($randomGirls as $girl) {
    // 表示するHTMLコード
    ?>
<div class="swiper-slide">
  <li class="recommend">
    <div class="girlCard-frame">

      <div class="girlCard-frame-flex">
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
            <p>T.<?php echo $girl['tall'];?> B.<?php echo $girl['bust'];?>
              W.<?php echo $girl['waist'];?>
              H.<?php echo $girl['height'];?></p>
          </div>
        </div>
      </div>

    </div>
  </li>
</div>
<?php
    $counter++;
}
?>