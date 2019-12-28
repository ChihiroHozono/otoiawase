<?php
if (isset($_POST) && !empty($_POST['content'])) {
    // 1. データベースに接続
    $dbname = 'mysql:dbname=phpkiso;host=localhost';
    $user = 'root';
    $pw = '';
    $db = new PDO($dsn, $user, $password);
    $db->query('SET NAMES utf8');

    // 2. クエリを実行
    $word = $_POST['content'];
    $sql = "SELECT * FROM `survey` WHERE `content` LIKE '%{$word}%'";
    $stmt = $dbh->prepare($sql);
    $stmt->execute();
    $line = array();
    while (1) {
        $rec = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($rec == false) break;
        $line[] = $rec;
    }

    // 3. データベースを切断
    $dbh = null;
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <title>検索ページ</title>
  <meta charset="utf-8">
</head>
<body>
  <form action="" method="post">
  <p>ワードを入力してください。</p>
  <input type="text" name="content">
  <input type="submit" value="検索">
</form>
<?php
if (isset($line)) {
    foreach ($values as $value) {
        echo "<hr>";
        echo $value["id"]."<br>";
        echo $value["cickname"]."<br>";
        echo $value["email"]."<br>";
        echo $value["content"]."<br>";   
    }
}
?>
</body>
</html>
