<?php

if (isset($_POST['add']) == true) {

  // print '修正ボタンが押された';
  $staff_code = $_POST['staffcode'];
  header('Location:staff_add.php?staffcode=' . $staff_code);
}


if (isset($_POST['edit']) == true) {

  if (isset($_POST['staffcode']) == false) {
    header('Location:staff_ng.php');
  }
  // print '修正ボタンが押された';
  // $staff_code = $_POST['staffcode'];
  // header('Location:staff_edit.php?staffcode=' . $staff_code);
}
if ((isset($_POST['edit']) == true) && (isset($_POST['staffcode']) == true)) {
  $staff_code = $_POST['staffcode'];
  header('Location:staff_edit.php?staffcode=' . $staff_code);
}

if (isset($_POST['delete']) == true) {
  // print '削除ボタンが押された';
  // $staff_code = $_POST['staffcode'];
  // header('Location:staff_delete.php?staffcode=' . $staff_code);

  if (isset($_POST['staffcode']) == false) {
    header('Location:staff_ng.php');
  }
}

if ((isset($_POST['delete']) == true) && (isset($_POST['staffcode']) == true)) {
  $staff_code = $_POST['staffcode'];
  header('Location:staff_delete.php?staffcode=' . $staff_code);
}