<?php
require 'function.php';
$file = getCpuList();
?>

<?php getHead("CPU比較") ?>

<body>
  <?php getHeader() ?>

  <div class="container-fluid">
    <div class="row">
      <?php sideMenu() ?>

      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <h2>CPU比較</h2>

        <form action="/cpuhikaku.php">
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>製造元</th>
                  <th>プロダクト名</th>
                  <th>コア数</th>
                  <th>ベースクロック数</th>
                  <th>ブーストクロック</th>
                  <th>消費電力</th>
                  <th>相場</th>
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
                  print '<td>' . $line[3] . 'Mhz' . '</td>';
                  print '<td>' . $line[4] . 'Mhz' . '</td>';
                  print '<td>' . $line[5] . 'W' . '</td>';
                  print '<td>' . $line[6] . '円' . '</td>';
                  print "<td><input type=\"checkbox\" value=\"${line[1]}\" name=\"name[]\"> 追加する</input></td>";
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