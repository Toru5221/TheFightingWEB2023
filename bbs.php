<?php
require_once './function.php';
$result = [
    'name' => true,
    'comment' => true
];
// データ型：数値(整数,小数floatなど）、文字・数字（str）※数値と数字は違う
// 配列（先頭は0番目） 連想配列はKEYとVALUEが１セットになっている
// boolean:真偽値（yes,no）
//$fh = openFile(COMMENT_FILE);
$pdo = dbConnect();
//関数名（）:関数を実行するという命令
//returnで返されたものを$pdoに返している

if($_SERVER["REQUEST_METHOD"] == "POST") {
    // validation処理
    $result = validationPost($_POST['comment']);
    if($result['comment']) {
        // 保存処理
        requestPost($pdo);
    }
}
//GETとPOST GET:情報の参照をしたい　POST:データの投函（送ります）


$bbs = getBbs($pdo);
?>
<!DOCTYPE html>
<html>
<head>
    <title>BBSサイト</title>
</head>
<style>
.error-text {
    color: red;
}
.logout-wrap {
    text-align: right;
}
</style>
<body>
    <h1>BBS</h1>
    <div>
        <p>これは良い感じのBBSです<br>
            みんな好きに書き込んでね！
        </p>
    </div>

    <?php if($_SESSION['account']): ?>
        <!-- $_SESSIONの中のKEY（account）の値を参照している  KEYが存在しなければNULLが返る-->
        <div class="logout-wrap"><a href="/logout.php">ログアウトする！</a></div>
        <form action="/bbs.php" method="POST">
            <div>
                <label for="name">
                    名前: <input type="text" id="name" name="name" value="<?php echo $_SESSION['account']['name']; ?>" disabled />
                </label>
            </div>
            <div>
                <label for="comment">
                    コメント:<textarea id="comment" name="comment" ></textarea>
                </label>
                <?php if($result['comment'] === false): ?>
                    <p class="error-text">入力は1024文字までです</p>
                <?php endif; ?>
            </div>
            <input type="submit" value="送信">
        </form>
    <?php else: ?>
        <form action="/login.php" method="POST">
            <div>
                <label for="name">
                    ID: <input type="text" id="name" name="name" value="" />
                </label>
            </div>
            <div>
                <label for="password">
                    Password: <input type="password" id="password" name="password" value="" />
                </label>
            </div>
            <input type="submit" value="Login">
        </form>
    <?php endif; ?>

    <hr />
<h2>書き込み一覧だよー！</h2>
<div>
<?php
foreach($bbs as $item):
?>
    <div>
        <p>name: <?php echo $item['name']; ?></p>
        <p>comment: <?php echo str_replace(PHP_EOL, '<br>', $item['comment']); ?></p>
        <p>date time: <?php echo $item['create_date']; ?></p>
        <?php if($_SESSION['account']['admin_flag'] === 1): ?>
            <form action="delete.php" method="POST">
                <input type="submit" value="削除する">
                <input type="hidden" name="bbs_id" value="<?php echo $item['id']; ?>">
            </form>
        <?php endif; ?>
    </div>
    <hr />
<?php
endforeach;
?>
</div>
</body>
</html>