<?php
require '../function.php';

$hikakuList = [];

if (!empty($_GET['name'])) {
  foreach (getMbList() as $fline) {
    $line = explode(",", $fline);
    if (in_array($line[0], $_GET['name'])) {
      $hikakuList[] = $line;
    }
  }
}

?>

<?php getHead("マザーボード比較") ?>

<body>
  <?php getHeader() ?>

  <!-- ここからメインコンテンツ -->
  <div class="container-fluid">
    <div class="row">
      <?php sideMenu() ?>

      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <h2>マザーボード比較</h2>
        <?php if (!empty($hikakuList)) : ?>
          <form action="/parts/mb/mbhikaku.com">
            <div class="scroll">
              <table class="table table-striped table-sm">
                <tr>
                  <th>チップセット</th>
                  <?php foreach ($hikakuList as $list) : ?>
                    <td><?php echo $list[0] ?></td>
                  <?php endforeach; ?>
                </tr>
                <tr>
                  <th>ソケット形状</th>
                  <?php foreach ($hikakuList as $list) : ?>
                    <td><?php echo $list[1] ?></td>
                  <?php endforeach; ?>
                </tr>
                <tr>
                  <th>OC</th>
                  <?php foreach ($hikakuList as $list) : ?>
                    <td><?php echo $list[2] ?></td>
                  <?php endforeach; ?>
                </tr>
                <tr>
                  <th>サポートしているメモリ</th>
                  <?php foreach ($hikakuList as $list) : ?>
                    <td><?php echo $list[3] ?></td>
                  <?php endforeach; ?>
                </tr>
                <tr>
                  <th>最大メモリ容量</th>
                  <?php foreach ($hikakuList as $list) : ?>
                    <td><?php echo $list[4] ?></td>
                  <?php endforeach; ?>
                </tr>
                <tr>
                  <th>PCI Express 3.0レーン</th>
                  <?php foreach ($hikakuList as $list) : ?>
                    <td><?php echo $list[5] ?></td>
                  <?php endforeach; ?>
                </tr>
                <tr>
                  <th>SATA3ポート数</th>
                  <?php foreach ($hikakuList as $list) : ?>
                    <td><?php echo $list[6] ?></td>
                  <?php endforeach; ?>
                </tr>
                <tr>
                  <th>RAID構成</th>
                  <?php foreach ($hikakuList as $list) : ?>
                    <td><?php echo $list[7] ?></td>
                  <?php endforeach; ?>
                </tr>
              </table>
            </div>
          </form>
        <?php else : ?>
          <h1>対象が選択されていません</h1>
        <?php endif ?>
        <a href="/mb/" class="btn btn-primary">マザーボード選択に戻る</a>
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