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
  /*
入力されたデータを、POSTから取り出して変数にいれる
htmlspecialcharsでサニタイズ
エラー表示
OKボタンがクリックされたら、staff_add_done.phpへ飛ぶ
input hiddenでデータを引き渡す

*/
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
    print '<input type="button" onclick-"history.back()" value="戻る">';
    print '</form>';
  } else {

    $staff_pass = md5($staff_pass);   //暗号化
    print '<form method="post" action="staff_add_done.php">';
    print '<input type="hidden" name="name" value="' . $staff_name . '">';
    print '<input type="hidden" name="pass" value="' . $staff_pass . '">';
    print '<br>';
    print '<input type="button" onclick="history.back()" value="戻る">';
    print '<input type="submit" value="OK">';
    print '</form>';
  }

  ?>



</body>

</html>