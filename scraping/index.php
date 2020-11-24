<?php
$data = file_get_contents('shopee.co.id.json');
$menu = json_decode($data, true);
$menu = $menu["items"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="card">
    <?php foreach ($menu as $row) :?>
      <div class="card-item">
      <a href="https://shopee.co.id/<?= $row["name"];?>-SIZE-i.<?= $row["shopid"]; ?>.<?= $row["itemid"]; ?> ">
  <img src="https://cf.shopee.co.id/file/<?= $row["image"];?>" alt="">
  <p class="text"><?= $row["name"];?></p>
</a>
      </div>
      <?php endforeach ?>
    </div>
  
</body>
</html>