<?php

//参照画面
if (isset($_POST['disp']) == true) {
  if (isset($_POST['staffcode']) == false) {  //　修正ボタンが押され、staffcodeが選択されてなかった時
    header('Location:staff_ng.php');
  }
}
if ((isset($_POST['disp']) == true) && (isset($_POST['staffcode']) == true)) {
  $staff_code = $_POST['staffcode'];
  header('Location:staff_disp.php?staffcode=' . $staff_code);
}


//追加画面
if (isset($_POST['add']) == true) {
  $staff_code = $_POST['staffcode'];
  header('Location:staff_add.php?staffcode=' . $staff_code);
}

//修正画面
if (isset($_POST['edit']) == true) {  //修正ボタンが押された時
  if (isset($_POST['staffcode']) == false) {  //　修正ボタンが押され、staffcodeが選択されてなかった時
    header('Location:staff_ng.php');
  }
}
if ((isset($_POST['edit']) == true) && (isset($_POST['staffcode']) == true)) {  //　スタッフが選択され、修正ボタンが押された時
  $staff_code = $_POST['staffcode'];
  header('Location:staff_edit.php?staffcode=' . $staff_code);
}

//削除画面
if (isset($_POST['delete']) == true) {

  if (isset($_POST['staffcode']) == false) {
    header('Location:staff_ng.php');
  }
}
if ((isset($_POST['delete']) == true) && (isset($_POST['staffcode']) == true)) {
  $staff_code = $_POST['staffcode'];
  header('Location:staff_delete.php?staffcode=' . $staff_code);
}