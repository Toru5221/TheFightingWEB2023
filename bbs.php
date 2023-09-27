<?php
require_once './function.php';
$fh = openFile();
$result = [];
if ( $_SERVER["REQUEST_METHOD"] == "POST") {
    /* POSTをされたかどうかを判定 */

    // validation処理(リクエストの値チェック)
    $result = validationPost($_POST['name'], $_POST['comment'])
    if ($result['name'] && $result['comment']) {
        // 保存処理
        requestPost($fh)
    }
    
}
$bbs = getBbs($fh);
closeFile($fh);

?>

<!DOCTYPE html>
<html>
    <head>
        <title>BBSサンプル</title>
    </head>

    <body>
        <h1>BBS</h1>
            <div>
                <p>これは良い感じのBBSです<br>
                みんな好きに書き込んでね！
                </p>
            </div>
        <form id="ore" action="/bbs.php" method="POST" class="bbs.php">
            <div>
                <!-- 名前 -->
                <label for="name">名前: </label> <br>
                <input type="text" id="name" name="Name" placeholder="名前を入れてください" value="" /> 
            </div>
            
            <div>
                <!-- コメント -->
                <label for="comment">コメント： </label> <br>
                <textarea id="comment" name="Comment" cols="30" rows="10" placeholder="コメントをどうぞ"></textarea>
            </div>
            
            <div>
                <!-- 画像は後で -->                 
            </div>

            <div>
                <input type="submit" value="投稿する"  name="submitbutton" id="submitbutton"/>
            </div>
        </form>
            <hr />
            <h2>書き込み一覧！！！</h2>
                <div>
                    <?php
                    foreach($bbs as $item):
                    ?>
                    <div>
                        <p>name: <?php echo $item['name']; ?></p>
                        <p>comment: <?php echo str_replace(PHP_EOL, '<br>', $item['comment']); ?></p>
                        <p>date time: <?php echo date('Y/m/d H:i:s', $item['date']); ?></p>
                    </div>
                    <hr />
                    <?php
                    endforeach;
                    ?>
                </div>
    </body>
</html>