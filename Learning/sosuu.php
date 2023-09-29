<?php
for($i = 2; $i <= 100 ; $i++) {
    $flg = false;
    // 成立する時
    if($i == 2){
      $flg = false;
    } else {
        for($j = 2; $j<$i; $j++){
            //echo "i;", $i . PHP_EOL;
            //echo "j;", $j . PHP_EOL;
            if($i % $j == 0){
                //echo "分岐2" . PHP_EOL;
                $flg = true; //それ以外で割り切れる = 素数じゃないフラグ
                break;
            }else{
                //echo "分岐3" . PHP_EOL;
                $flg = false;
            }
        }
        //echo is_bool($flg) . PHP_EOL;
        //echo "flg:", $flg . PHP_EOL;
    }
    if($flg === false){
        echo $i . PHP_EOL;
    }
}
?>