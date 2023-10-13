<?php
require_once("class-dsn.php");
$source = new dataSourceName();


$host = $source::host;
$dbname = $source::dbname;
$user = $source::user;
$pass = $source::pass;


try {

  // 接続
  $link = mysqli_connect($host, $user, $pass, $dbname);

  echo 'データベース接続成功';

} catch (Throwable $e) {

  echo "データベース接続失敗" . PHP_EOL;
  echo "errno: " . mysqli_connect_errno() . PHP_EOL;
  echo "error: " . mysqli_connect_error() . PHP_EOL;
  echo $e->getMessage() . PHP_EOL;
  exit;

}

// 切断
mysqli_close($link);

?>