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

<?php getHead("memory比較") ?>

<body>
  <?php getHeader() ?>

  <!-- ここからメインコンテンツ -->
  <div class="main">
    <div class="container">
      <div class="main-wrapper">
        <?php sideMenu() ?>

        <div class="maincontent col-9">
          <?php if (!empty($hikakuList)) : ?>
            <form action="/memory/memoryhikaku.php">
              <div class="scroll">
                <table class="table table-responsive table-hover">
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
          <a href="/memory/" class="button">メモリー選択に戻る</a>

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
