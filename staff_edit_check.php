<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>スタッフ修正のチェック画面</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>

  <?php
  /*

*/
  $staff_code = $_POST['code'];
  $staff_name = $_POST['name'];
  $staff_pass = $_POST['pass'];
  $staff_pass2 = $_POST['pass2'];


  $staff_name = htmlspecialchars($staff_name);
  $staff_pass = htmlspecialchars($staff_pass);
  $staff_pass2 = htmlspecialchars($staff_pass2);

  if ($staff_name == '') {
    print 'スタッフ名が入力されていません';
  } else {
    print 'スタッフ名';
    print $staff_name;
    print '<br>';
  }

  if ($staff_pass == '') {
    print 'パスワードが入力されていません';
  }

  if ($staff_pass != $staff_pass2) {
    print 'パスワードが一致しません <br>';
  }

  if ($staff_name == '' || $staff_pass == '' || $staff_pass != $staff_pass2) {
    print '<form>';
    print '<input type="button" onclick="history.back()" value="戻る">';
    print '</form>';
  } else {

    $staff_pass = md5($staff_pass);   //暗号化
    print '<form method="post" action="staff_edit_done.php">';
    print '<input type="hidden" name="name" value="' . $staff_name . '">';
    print '<input type="hidden" name="pass" value="' . $staff_pass . '">';
    print '<input type="hidden" name="code" value="' . $staff_code . '">';
    print '<br>';
    print '<input type="button" onclick="history.back()" value="戻る">';
    print '<input type="submit" value="OK">';
    print '</form>';
  }

  ?>



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