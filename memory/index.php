<?php
require '../function.php';
$file = getMemoryList();
?> 

<?php getHead("memory比較") ?>

<body>
  <?php getHeader() ?>

  <div class="container-fluid">
    <div class="row">
      <?php sideMenu() ?>

      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <h2>メモリー比較</h2>

        <form action="/memory/memoryhikaku.php">
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>メモリチップ規格</th>
                  <th>メモリモジュール規格</th>
                  <th>メモリクロック</th>
                  <th>バスクロック</th>
                  <th>転送速度</th>
                  <th>ピンの数</th>
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
                  print '<td>' . $line[2] . 'Mhz' . '</td>';
                  print '<td>' . $line[3] . 'Mhz' . '</td>';
                  print '<td>' . $line[4] . 'GB/s' . '</td>';
                  print '<td>' . $line[5] . '</td>';
                  print "<td><input type=\"checkbox\" value=\"${line[1]}\" name=\"name[]\">追加する</input></td>";
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