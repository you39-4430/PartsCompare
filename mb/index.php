<?php
require '../function.php';
$file = getMbList();
?>

<?php getHead("マザーボード比較") ?>

<body>
  <?php getHeader() ?>

  <div class="container-fluid">
    <div class="row">
      <?php sideMenu() ?>

      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <h2>マザーボード比較</h2>

        <form action="/mb/mbhikaku.php">
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
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
              </thead>
              <tbody>
                <?php
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
              </tbody>
            </table>
          </div>
          <button type="submit" class="btn btn-primary">比較</button>
        </form>
      </main>
    </div>
  </div>
</body>

</html>