<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>スタッフ情報の修正</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <style>
  .staff-code span,
  .staff-name span {
    margin-left: 30px;
  }
  </style>
</head>

<body>
  <div class="container">

    <?php
    /*
*/

    $staff_code = $_GET['staffcode'];

    require('db.php');
    $dbh->query('SET NAMES utf8');

    $sql = 'SELECT name FROM mst_staff WHERE code=?';
    //スタッフコードで絞り込み

    $stmt = $dbh->prepare($sql);
    $data[] = $staff_code;
    $stmt->execute($data);

    $rec = $stmt->fetch(PDO::FETCH_ASSOC);
    $staff_name = $rec['name'];

    $dbh = null;

    ?>

    <h1>スタッフ情報修正</h1>

    <p class="staff-code">スタッフコード<span><?php print $staff_code; ?></span></p>
    <p class="staff-name">スタッフ名<span><?php print $staff_name; ?></span></p>

    <div class="delete-check">
      <p>このスタッフを削除してもよろしいですか？</p>
    </div>

    <form action="staff_delete_done.php" method="post">
      <div class="form-group">
        <input type="hidden" name="code" value="<?php print $staff_code; ?>">
        <input type="button" value="戻る" onclick="history.back()" class="btn btn-secondary">
        <input type="submit" value="OK" class="btn btn-primary">
      </div>
    </form>
  </div>


  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
  </script>

</body>

</html>