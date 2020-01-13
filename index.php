<?php
require 'function.php';
$file = getCpuList();
?> 

<?php getHead("CPU比較") ?>

<body>
  <?php getHeader() ?>

  <!-- ここからメインコンテンツ -->
  <div class="main">
    <div class="container">
      <div class="main-wrapper">
        <?php sideMenu() ?>

        <div class="maincontent col-9">
          <form action="/cpuhikaku.php">
            <div class="scroll">
              <table class="table table-bordered">
                <tr>
                  <th>製造元</th>
                  <th>プロダクト名</th>
                  <th>コア数</th>
                  <th>ベースクロック</th>
                  <th>ブーストクロック</th>
                  <th>消費電力</th>
                  <th>相場</th>
                  <th></th>
                </tr>
                <?php
                foreach ($file as $fline) {
                  $line = explode(",", $fline);
                  print '<tr>';
                  print '<td>' . $line[0] . '</td>';
                  print '<td>' . $line[1] . '</td>';
                  print '<td>' . $line[2] . '</td>';
                  print '<td>' . $line[3] . 'Mhz' . '</td>';
                  print '<td>' . $line[4] . 'Mhz' . '</td>';
                  print '<td>' . $line[5] . 'W' . '</td>';
                  print '<td>' . $line[6] . '円' . '</td>';
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
