<?php
require '../function.php';
$hikakuList = [];

if (!empty($_GET['name'])) {
  foreach (getGraphicsList() as $fline) {
    $line = explode(",", $fline);
    if (in_array($line[1], $_GET['name'])) {
      $hikakuList[] = $line;
    }
  }
}

?>

<?php getHead("GraphicsBoard比較") ?>

<body>
  <?php getHeader() ?>

  <!-- ここからメインコンテンツ -->
  <div class="main">
    <div class="container">
      <div class="main-wrapper">
        <?php sideMenu() ?>

        <div class="maincontent col-9">
          <?php if (!empty($hikakuList)) : ?>
            <form action="/graphics/hikaku.php">
              <div class="scroll">
                <table class="table table-responsive table-hover">
                  <tr>
                    <th>製品名</th>
                    <?php foreach ($hikakuList as $list) : ?>
                      <td><?php echo $list[1] ?></td>
                    <?php endforeach; ?>
                  </tr>
                  <tr>
                    <th>ベースクロック</th>
                    <?php foreach ($hikakuList as $list) : ?>
                      <td><?php echo $list[2] ?>Mhz</td>
                    <?php endforeach; ?>
                  </tr>
                  <tr>
                    <th>ブーストクロック</th>
                    <?php foreach ($hikakuList as $list) : ?>
                      <td><?php echo $list[3] ?>Mhz</td>
                    <?php endforeach; ?>
                  </tr>
                  <tr>
                    <th>シェーダー数</th>
                    <?php foreach ($hikakuList as $list) : ?>
                      <td><?php echo $list[4] ?>基</td>
                    <?php endforeach; ?>
                  </tr>
                  <tr>
                    <th>メモリバス幅</th>
                    <?php foreach ($hikakuList as $list) : ?>
                      <td><?php echo $list[5] ?>Mhz</td>
                    <?php endforeach; ?>
                  </tr>
                  <tr>
                    <th>メモリ(VRAM)容量</th>
                    <?php foreach ($hikakuList as $list) : ?>
                      <td><?php echo $list[6] ?>GB</td>
                    <?php endforeach; ?>
                  </tr>
                  <tr>
                    <th>消費電力</th>
                    <?php foreach ($hikakuList as $list) : ?>
                      <td><?php echo $list[7] ?>w</td>
                    <?php endforeach; ?>
                  </tr>
                </table>
              </div>
            </form>
          <?php else : ?>
            <h1>対象が選択されていません</h1>
          <?php endif ?>
          <a href="/graphics/" class="button">グラフィックボード選択に戻る</a>
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
