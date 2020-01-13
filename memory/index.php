<?php
require '../function.php';
$file = getMemoryList();
?> 

<?php getHead("memory比較") ?>

<body>
  <?php getHeader() ?>

  <!-- ここからメインコンテンツ -->
  <div class="main">
    <div class="container">
      <div class="main-wrapper">
        <?php sideMenu() ?>

        <div class="maincontent col-9">
          <form action="/memory/memoryhikaku.php">
            <div class="scroll">
              <table class="table table-bordered">
                <tr>
                  <th>メモリチップ規格</th>
                  <th>メモリモジュール規格</th>
                  <th>メモリクロック</th>
                  <th>バスクロック</th>
                  <th>転送速度</th>
                  <th>ピンの数</th>

                  <th></th>
                </tr>
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
              </table>
            </div>
            <input type="submit" value="比較" class="button">
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

  <?php scripts(); ?>
</body>

</html>
</body>

</html>
