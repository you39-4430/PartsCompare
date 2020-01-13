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

  <!-- BootStrap4 JSファイル-->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
