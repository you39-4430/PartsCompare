<?php

$hikakuList = [];

if (!empty($_GET['name'])) {
  $file = file('mb.csv');
  foreach ($file as $fline) {
    $line = explode(",", $fline);
    if (in_array($line[0], $_GET['name'])) {
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
  <title>マザーボード比較</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/style.css">
</head>

<body>
  <!-- ここからヘッダー -->
  <div class="header">
    <div class="container">
      <h1><a href="../cpu/cpu.php">PCパーツ比較</a></h1>
    </div>
  </div>
  <!-- ここまでヘッダー -->

  <!-- ここからメインコンテンツ -->
  <div class="main">
    <div class="container">
      <div class="main-wrapper">
        <div class="sidemenu col-3">
          <ul>
            <li><a href="../cpu/cpu.php">cpu</a></li>
            <li><a href="../graphics/graphics.php">グラフィックボード</a></li>
            <li><a href="mb.php">マザーボード</a></li>
            <li><a href="../memory/memory.php">メモリー</a></li>
          </ul>
        </div>
        <div class="maincontent col-9">
          <?php if (!empty($hikakuList)) : ?>
            <form action="/parts/mb/mbhikaku.com">
              <div class="scroll">
                <table class="table table-responsive table-hover">
                  <tr>
                    <th>チップセット</th>
                    <?php foreach ($hikakuList as $list) : ?>
                      <td><?php echo $list[0] ?></td>
                    <?php endforeach; ?>
                  </tr>
                  <tr>
                    <th>ソケット形状</th>
                    <?php foreach ($hikakuList as $list) : ?>
                      <td><?php echo $list[1] ?></td>
                    <?php endforeach; ?>
                  </tr>
                  <tr>
                    <th>OC</th>
                    <?php foreach ($hikakuList as $list) : ?>
                      <td><?php echo $list[2] ?></td>
                    <?php endforeach; ?>
                  </tr>
                  <tr>
                    <th>サポートしているメモリ</th>
                    <?php foreach ($hikakuList as $list) : ?>
                      <td><?php echo $list[3] ?></td>
                    <?php endforeach; ?>
                  </tr>
                  <tr>
                    <th>最大メモリ容量</th>
                    <?php foreach ($hikakuList as $list) : ?>
                      <td><?php echo $list[4] ?></td>
                    <?php endforeach; ?>
                  </tr>
                  <tr>
                    <th>PCI Express 3.0レーン</th>
                    <?php foreach ($hikakuList as $list) : ?>
                      <td><?php echo $list[5] ?></td>
                    <?php endforeach; ?>
                  </tr>
                  <tr>
                    <th>SATA3ポート数</th>
                    <?php foreach ($hikakuList as $list) : ?>
                      <td><?php echo $list[6] ?></td>
                    <?php endforeach; ?>
                  </tr>
                  <tr>
                    <th>RAID構成</th>
                    <?php foreach ($hikakuList as $list) : ?>
                      <td><?php echo $list[7] ?></td>
                    <?php endforeach; ?>
                  </tr>
                </table>
              </div>
            </form>
          <?php else : ?>
            <h1>対象が選択されていません</h1>
          <?php endif ?>
          <a href="mb.php" class="button">マザーボード選択に戻る</a>
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