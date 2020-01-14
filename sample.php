<?php
require 'function.php';
$file = getCpuList();
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <title>Dashboard Template · Bootstrap</title>

  <!-- Bootstrap core CSS -->
  <link href="https://getbootstrap.com/docs/4.4/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <meta name="msapplication-config" content="https://getbootstrap.com/docs/4.4/assets/img/favicons/browserconfig.xml">

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>
  <!-- Custom styles for this template -->
  <link href="https://getbootstrap.com/docs/4.4/examples/dashboard/dashboard.css" rel="stylesheet">
</head>

<body>
  <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="/">PCパーツ比較</a>
  </nav>

  <div class="container-fluid">
    <div class="row">
      <nav class="col-md-2 d-none d-md-block bg-light sidebar">
        <div class="sidebar-sticky">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" href="#">
                CPU<span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                グラフィックボード
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                マザーボード
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                メモリ
              </a>
            </li>
          </ul>
        </div>
      </nav>

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
                print "<td><input type=\"checkbox\" value=\"${line[1]}\" name=\"name[]\"> 比較</input></td>";
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
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://getbootstrap.com/docs/4.4/dist/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
</body>

</html>
