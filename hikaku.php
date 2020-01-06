<?php

$hikakuList = [];
if (!empty($_GET['name'])) {
  $file = file('graphics/graphics.csv');
  foreach ($file as $fline) {
    $line = explode(",", $fline);
    if (in_array($line[1], $_GET['name'])) {
      $hikakuList[] = $line;
    }
  }
}

?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>CPU比較</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <!-- ここからヘッダー -->
  <div class="header">
    <div class="container">
      <h1><a href="cpu/cpu.php">PCパーツ比較</a></h1>
    </div>
  </div>
  <!-- ここまでヘッダー -->

  <!-- ここからメインコンテンツ -->
  <div class="main">
    <div class="container">
      <div class="main-wrapper">
        <div class="sidemenu col-3">
          <ul>
            <li><a href="cpu/cpu.php">cpu</a></li>
            <li><a href="graphics/graphics.php">グラフィックボード</a></li>
            <li><a href="mb/mb.php">マザーボード</a></li>
            <li><a href="memory/memory.php">メモリー</a></li>
          </ul>
        </div>
        <div class="maincontent col-9">
          <?php if (!empty($hikakuList)) : ?>
            <form action="/parts/hikaku.php">
              <div class="scroll">
                <table class="table table-responsive table-hover">
                  <tr>
                    <th>製品名</th>
                    <?php foreach ($hikakuList as $list) : ?>
                      <td><?php echo $list[1] ?></td>
                    <?php endforeach; ?>
                  </tr>
                  <tr>
                    <th>ベースクロック</th>
                    <?php foreach ($hikakuList as $list) : ?>
                      <td><?php echo $list[2] ?>Mhz</td>
                    <?php endforeach; ?>
                  </tr>
                  <tr>
                    <th>ブーストクロック</th>
                    <?php foreach ($hikakuList as $list) : ?>
                      <td><?php echo $list[3] ?>Mhz</td>
                    <?php endforeach; ?>
                  </tr>
                  <tr>
                    <th>シェーダー数</th>
                    <?php foreach ($hikakuList as $list) : ?>
                      <td><?php echo $list[4] ?>基</td>
                    <?php endforeach; ?>
                  </tr>
                  <tr>
                    <th>メモリバス幅</th>
                    <?php foreach ($hikakuList as $list) : ?>
                      <td><?php echo $list[5] ?>Mhz</td>
                    <?php endforeach; ?>
                  </tr>
                  <tr>
                    <th>メモリ(VRAM)容量</th>
                    <?php foreach ($hikakuList as $list) : ?>
                      <td><?php echo $list[6] ?>GB</td>
                    <?php endforeach; ?>
                  </tr>
                  <tr>
                    <th>消費電力</th>
                    <?php foreach ($hikakuList as $list) : ?>
                      <td><?php echo $list[7] ?>w</td>
                    <?php endforeach; ?>
                  </tr>
                </table>
              </div>
            </form>
          <?php else : ?>
            <h1>対象が選択されていません</h1>
          <?php endif ?>
          <a href="graphics/graphics.php" class="button">グラフィックボード選択に戻る</a>
          <script>
            function addItem(itemName) {
              alert(itemName)
            }
          </script>
        </div>
      </div>
    </div>
  </div>
  <!-- ここまでメインコンテンツ -->

  <!-- BootStrap4 JSファイル-->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>