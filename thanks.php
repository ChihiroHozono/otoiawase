<?php
$nickname = htmlspecialchars($_POST['nickname']);
$email = htmlentities($_POST['email']);
$content = htmlspecialchars($_POST['content']);

 // １．データベースに接続する
  $dsn = 'mysql:dbname=phpkiso;host=localhost';
  // スペースは入れない
  $user = 'root';
  $password='';
  $dbh = new PDO($dsn, $user, $password);
  $dbh->query('SET NAMES utf8');

  // ２．SQL文を実行する
  $sql = "INSERT INTO `survey` (`cickname`, `email`, `content`,'created') VALUES (?, ?, ?,now());";

  // プリペアードステートメント
  $data = array($nickname,$email,$content,);
  $stmt = $dbh->prepare($sql);
  $stmt->execute($data);
  // この二つは絶対必要

  // ３．データベースを切断する
  $dbh = null;







?>




<!DOCTYPE html>
<html>
<head>
	<title>送信完了</title>
	<meta charset="utf-8">
</head>
<body>
	<h1>お問い合わせありがとうございました</h1>
	<div>
		<h3>お問い合わせ内容</h3>


		<p>ニックネーム<?php echo $nickname; ?></p>
		<p>メアド<?php echo $email; ?></p>
		<p>内容<?php echo $content; ?></p>
	</div>
</body>
</html>