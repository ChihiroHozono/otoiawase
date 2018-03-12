<!DOCTYPE html>
<html lang="ja">
<head>
	<title>入力内容確認</title>
	<meta charset="utf-8">
</head>
<body>
	<h1>入力内容確認画面</h1>
	<?php


	$nickname = htmlspecialchars($_POST['nickname']);
	$email = htmlentities($_POST['email']);
	$content = htmlspecialchars($_POST['content']);



	if($nickname ==''){
		echo "ニックネームが入力されていません";
	}else{
		echo "ようこそ".$nickname.'様';
		echo "<br>";
	}

	if($email == ''){
		echo 'メールアドレスが入力されていません。';
	}else{
		echo 'メールアドレス：'.$email;
		echo "<br>";
	}

	if($content == ''){
		echo 'お問い合わせが入力されていません';
	}else{
		echo 'お問い合わせ内容：'.$content;
	}
	?>


	<form method="POST" action="thanks.php">

		<input type="hidden" name="nickname" value="<?php echo $nickname; ?>">
  		<input type="hidden" name="email" value="<?php echo $email; ?>">
  		<input type="hidden" name="content" value="<?php echo $content; ?>">


	  	<input type="button" value="戻る" onclick="history.back()">
	  	<input type="submit" value="OK">
	</form>




</body>
</html>