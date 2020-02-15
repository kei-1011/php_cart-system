<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>スタッフ追加</title>
</head>

<body>
  <form method="post" action="staff_add_check.php">
    <p>スタッフ名を入力して下さい</p>
    <input type="text" name="name" style="width:200px;">

    <p>パスワードを入力して下さい</p>
    <input type="password" name="pass" style="width:100px;">

    <p>パスワードをもう一度入力して下さい</p>
    <input type="password" name="pass2" style="width:100px;">
    <br>
    <input type="button" value="戻る" onclick="history.back()">
    <input type="submit" value="OK">
  </form>
</body>

</html>