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
    $contents = htmlspecialchars($_POST['contents']);

    echo $nickname == '' ?'ニックネームが未入力です。' : 'ようこそ'.$nickname.'様\n';
    echo $email == ''  ? 'メールアドレスが未入力です。' : 'メールアドレス：'.$email.'\n';
    echo $contents == '' ?  'お問い合わせが未入力です。' : 'お問い合わせ内容：'.$contents.'\n';

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