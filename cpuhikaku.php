<?php
require 'function.php';

$hikakuList = [];

if (!empty($_GET['name'])) {
  foreach (getCpuList() as $fline) {
    $line = explode(",", $fline);
    if (in_array($line[1], $_GET['name'])) {
      $hikakuList[] = $line;
    } 
  }
}

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
          <?php  if(!empty($hikakuList)): ?>
            <form action="/parts/cpuhikaku.php">
              <div class="scroll">
              <table class="table table-bordered">
                <tr>
                  <th>製品名</th>
                  <?php foreach ($hikakuList as $list):?>
                    <td><?php echo $list[1] ?></td>
                  <?php endforeach; ?>
                </tr>
                <tr>
                  <th>コア/スレッド</th>
                  <?php foreach ($hikakuList as $list) : ?>
                    <td><?php echo $list[2] ?></td>
                  <?php endforeach; ?>
                </tr>
                <tr>
                  <th>ベースクロック</th>
                  <?php foreach ($hikakuList as $list) : ?>
                    <td><?php echo $list[3] ?>Ghz</td>
                  <?php endforeach; ?>
                </tr>
                <tr>
                  <th>ブーストクロック</th>
                  <?php foreach ($hikakuList as $list) : ?>
                    <td><?php echo $list[4] ?>Ghz</td>
                  <?php endforeach; ?>
                </tr>
                <tr>
                  <th>消費電力</th>
                  <?php foreach ($hikakuList as $list) : ?>
                    <td><?php echo $list[5] ?>W</td>
                  <?php endforeach; ?>
                </tr>
              </table>
                  </div>
            </form>
            <?php else :?>
              <h1>対象が選択されていません</h1>
          <?php endif ?>
          <a href="/" class="button">CPU選択に戻る</a>

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
