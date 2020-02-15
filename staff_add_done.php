<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>スタッフ追加</title>
</head>

<body>

  <?php
  /*tryは<?phpのすぐ下に書
*/
  try {

    $staff_name = $_POST['name'];
    $staff_pass = $_POST['pass'];

    $staff_name = htmlspecialchars($staff_name);
    $staff_pass = htmlspecialchars($staff_pass);

    /*データベースに接続する
    */
    require('db.php');
    $dbh->query('SET NAMES utf8');

    $sql = 'INSERT INTO mst_staff(name,password) VALUES (?,?)';
    $stmt = $dbh->prepare($sql);
    $data[] = $staff_name;
    $data[] = $staff_pass;
    $stmt->execute($data);

    $dbh = null;

    print $staff_name;
    print 'さんを追加しました<br>';
  } catch (Exception $e) {

    print 'ただいま障害により大変ご迷惑をおかけしております。';
    exit();
  }

  ?>

  <a href="staff_list.php"></a>

</body>

</html>