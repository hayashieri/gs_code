<?php
//最初にsessionを開始！
session_start();

//0.外部ファイル読み込み
include("funcs.php");
$lid = $_POST["lid"];
$lpw = $_POST["lpw"];

//1.  DB接続を行う
$pdo = db_con(); //$pdoの定義はfuncs.phpに記述

//2. 繝��繧ｿ逋ｻ骭ｲSQL菴懈�
$sql = "SELECT * FROM gs_user_table WHERE lid=:lid AND life_flg=0"; //0(管理者の人）しかアクセスできない仕様に
$stmt = $pdo->prepare($sql);  //$pdoにsqlを代入する
$stmt->bindValue(':lid', $lid, PDO::PARAM_STR);
// $stmt->bindValue(':lpw', $lpw, PDO::PARAM_STR);
$res = $stmt->execute(); //SQL繧貞ｮ溯｡�

//3. SQL実行時にファイルがある場合
if($res==false){
  $error = $stmt->errorInfo();
  exit("QueryError:".$error[2]);
}

//4. 謚ｽ蜃ｺ繝��繧ｿ謨ｰ繧貞叙蠕�
//$count = $stmt->fetchColumn(); //SELECT COUNT(*)縺ｧ菴ｿ逕ｨ蜿ｯ閭ｽ()
$val = $stmt->fetch(); //1繝ｬ繧ｳ繝ｼ繝峨□縺大叙蠕励☆繧区婿豕�


//hash蛹悶☆繧句燕縺ｮ繧ｳ繝ｼ繝�
//5. 隧ｲ蠖薙Ξ繧ｳ繝ｼ繝峨′縺ゅｌ縺ｰSESSION縺ｫ蛟､繧剃ｻ｣蜈･
// if( $val["id"] != "" ){
//   $_SESSION["chk_ssid"]  = session_id(); 
//   $_SESSION["kanri_flg"] = $val['kanri_flg'];
//   $_SESSION["name"]      = $val['name'];
//   header("Location: select.php");
// }else{
//   //logout蜃ｦ逅�ｒ邨檎罰縺励※蜈ｨ逕ｻ髱｢縺ｸ
//   header("Location: login.php");
// }


//password_verify関数を使用してパスワードを比較
//hash化した後のコード
if( password_verify($lpw,$val["lpw"])){
  $_SESSION["chk_ssid"] = session_id();
  $_SESSION["kanri_flg"] = $val['kanri_flg'];
  $_SESSION["name"] = $val['name'];
  header("Location: select.php");
}else{
  //logout蜃ｦ逅�ｒ邨檎罰縺励※蜑咲判髱｢縺ｸ
  header("Location: login.php");
}

exit();
?>

