<?php
session_start();

// ユーザー登録画面の前に以下処理が必要
$pw = password_hash("test1", PASSWORD_DEFAULT);
echo $pw;
?>