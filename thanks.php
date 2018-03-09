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

		<?php
		$nickname = $_POST['nickname'];
		$email = $_POST['email'];
		$content = $_POST['content'];
		?>
		<p>ニックネーム<?php echo $nickname; ?></p>
		<p>メアド<?php echo $email; ?></p>
		<p>内容<?php echo $content; ?></p>
	</div>
</body>
</html>