<?php
    session_start();
        //var_dump($_COOKIE);
    require_once './function.php'; 

        //echo '<pre>';
        //var_dump($_SESSION);
        //echo '</pre>';


    // POSTをされたかどうか
    if ($_SERVER ["REQUEST_METHOD"] == "POST") {
        // @todo validation check

        // account情報とPOSTの情報が一致するかどうか
        $result = checkLogin($_POST['id'], $_POST['password']);

        if($result){
        // 一致した場合には、ログイン状態にする
        //setcookie('login', 'admin'); 過去に使用

        $_SESSION['login'] = $_POST['id'];
        }
        // @todo login処理が終わった後リダイレクトをしたしです
        
    }  else{
        // @todo ここどうする？
    }
        //echo '<pre>';
        //var_dump($_SESSION);
        //echo '</pre>';