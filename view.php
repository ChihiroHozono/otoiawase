<?php
// １．データベースに接続する
$dsn = 'mysql:dbname=phpkiso;host=localhost';
$user = 'root';
$password = '';
$dbh = new PDO($dsn, $user, $password);
$dbh->query('SET NAMES utf8');

// ２．SQL文を実行する
$sql = 'SELECT * FROM `survey` ORDER BY `created` DESC';
$stmt = $dbh->prepare($sql);
$stmt->execute();

while (1) {
  $rec = $stmt->fetch(PDO::FETCH_ASSOC);
  if ($rec == false) {
    break;
  }
  echo $rec['id'] . '<br>';
  echo $rec['cickname'] . '<br>';
  echo $rec['email'] . '<br>';
  echo $rec['content'] . '<br>';
  echo $rec['created']. '<br>';
  echo '<hr>';
}

// ３．データベースを切断する
$dbh = null;

?>
