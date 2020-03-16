<?php
require '../function.php';

$hikakuList = [];

if (!empty($_GET['name'])) {
  foreach (getMemoryList() as $fline) {
    $line = explode(",", $fline);
    if (in_array($line[1], $_GET['name'])) {
      $hikakuList[] = $line;
    }
  }
}

?>

<?php getHead("メモリー比較") ?>

<body>
  <?php getHeader() ?>

  <!-- ここからメインコンテンツ -->
  <div class="container-fluid">
    <div class="row">
      <?php sideMenu() ?>

      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <h2>メモリー比較</h2>
          <?php if (!empty($hikakuList)) : ?>
            <form action="/parts/memory/memoryhikaku.php">
            <div class="scroll">
              <table class="table table-striped table-sm">
                  <tr>
                    <th>メモリチップ規格</th>
                    <?php foreach ($hikakuList as $list) : ?>
                      <td><?php echo $list[0] ?></td>
                    <?php endforeach; ?>
                  </tr>
                  <tr>
                    <th>メモリモジュール規格</th>
                    <?php foreach ($hikakuList as $list) : ?>
                      <td><?php echo $list[1] ?></td>
                    <?php endforeach; ?>
                  </tr>
                  <tr>
                    <th>メモリクロック</th>
                    <?php foreach ($hikakuList as $list) : ?>
                      <td><?php echo $list[2] ?>Mhz</td>
                    <?php endforeach; ?>
                  </tr>
                  <tr>
                    <th>バスクロック</th>
                    <?php foreach ($hikakuList as $list) : ?>
                      <td><?php echo $list[3] ?>Mhz</td>
                    <?php endforeach; ?>
                  </tr>
                  <tr>
                    <th>転送速度</th>
                    <?php foreach ($hikakuList as $list) : ?>
                      <td><?php echo $list[4] ?>GB/s</td>
                    <?php endforeach; ?>
                  </tr>
                  <tr>
                    <th>ピンの数</th>
                    <?php foreach ($hikakuList as $list) : ?>
                      <td><?php echo $list[5] ?></td>
                    <?php endforeach; ?>
                  </tr>
                </table>
              </div>
            </form>
          <?php else : ?>
            <h1>対象が選択されていません</h1>
          <?php endif ?>
          <a href="/memory/" class="btn btn-primary">メモリー選択に戻る</a>

          <script>
            function addItem(itemName) {
              alert(itemName)
            }
          </script>
        </div>
      </div>
    </div>
    <!-- ここまでメインコンテンツ -->

    <?php scripts(); ?>
</body>

</html>