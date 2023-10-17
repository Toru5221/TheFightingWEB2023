<?php
require_once './function.php';
?>

<!DOCTYPE html>
<html>
    <head>
    </head>
<body>
<?php
// txtファイルを開く
var_dump($a, $b);
$a = fopen("comment.txt", "r");

// 1行読み込む
$b = fgets($a);
echo "$b<br>";

// ファイルを閉じる
fclose($a);
?>
</body>
</html>
