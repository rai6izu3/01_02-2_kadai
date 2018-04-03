<?php
	$omikuji = rand(1,7);

  if ($omikuji == 1) {
    echo "<h1>今日の運勢は大吉です</h1>";
    echo '<img src="daikichi.jpg" alt="">';

  }elseif ($omikuji == 2) {
    echo "<h1>今日の運勢は中吉です</h1>";
    echo '<img src="chuuchi.jpg" alt="">';
  }
  elseif ($omikuji == 3) {
    echo "<h1>今日の運勢は小吉です</h1>";
		echo '<img src="syoukichi.jpg" alt="">';
  }
  elseif ($omikuji == 4) {
    echo "<h1>今日の運勢は吉です</h1>";
		echo '<img src="kichi.jpg" alt="">';
  }
  elseif ($omikuji == 5) {
    echo "<h1>今日の運勢は末吉です</h1>";
		echo '<img src="suekichi.jpg" alt="">';
  }
  elseif ($omikuji == 6) {
    echo "<h1>今日の運勢は凶です</h1>";
		echo '<img src="kyou.jpg" alt="">';
  }
  elseif ($omikuji == 7) {
    echo "<h1>今日の運勢は大凶です</h1>";
		echo '<img src="daikyou.jpg" alt="">';
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="omikuji.css">
  <title>おみくじアプリ☺︎</title>
</head>
<body>

</body>
</html>
