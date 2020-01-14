<?php
require '../function.php';
$file = getMbList();
?> 

<?php getHead("マザーボード比較") ?>

<body>
  <?php getHeader() ?>

  <!-- ここからメインコンテンツ -->
  <div class="main">
    <div class="container">
      <div class="main-wrapper">
        <?php sideMenu() ?>

        <div class="maincontent col-9">
          <form action="/mb/mbhikaku.php">
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
  
  <?php scripts(); ?>
</body>

</html>
