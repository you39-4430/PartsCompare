<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>GraphicsBoard比較</title>
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
          <form action="/parts/mb/mbhikaku.php">
          <div class="scroll">
            <table class="table table-bordered">
              <tr>
                <th>チップセット</th>
                <th>ソケット形状</th>
                <th>OC</th>
                <th>サポートしているメモリ</th>
                <th>最大メモリ容量</th>
                <th>PCI Express 3.0レーン</th>
                <th>SATA3ポート数</th>
                <th>RAID構成</th>
                <th></th>
              </tr>
              <?php
              $file = file('mb.csv');
              foreach ($file as $fline) {
                $line = explode(",", $fline);
                print '<tr>';
                print '<td>' . $line[0] . '</td>';
                print '<td>' . $line[1] . '</td>';
                print '<td>' . $line[2] . '</td>';
                print '<td>' . $line[3] . '</td>';
                print '<td>' . $line[4] . '</td>';
                print '<td>' . $line[5] . '</td>';
                print '<td>' . $line[6] . '</td>';
                print '<td>' . $line[7] . '</td>';
                print "<td><input type=\"checkbox\" value=\"${line[0]}\" name=\"name[]\">追加する</input></td>";
                print '</tr>';
              }
              ?>
            </table>
          </div>
            <input type="submit" value="比較" class="button">
          </form>
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