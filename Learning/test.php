<?php
//array() を使用して配列を作成
//作成
$foods = array('そば', 'ラーメン', 'うどん');
//出力
echo $foods[0]."<br/>\n";
echo $foods[1]."<br/>\n";
echo $foods[2]."<br/><br/>\n";
//作成
$foods = array('soba' => 'そば', 'ramen' => 'ラーメン', 'udon' => 'うどん');
//出力
echo $foods['soba']."<br/>\n";
echo $foods['ramen']."<br/>\n";
echo $foods['udon']."<br/><br/>\n";
 
//[ ] を使用して配列を作成
//作成
$fruits[] = 'リンゴ';
$fruits[] = 'バナナ';
$fruits[] = 'オレンジ';
//出力
echo $fruits[0]."<br/>\n";
echo $fruits[1]."<br/>\n";
echo $fruits[2]."<br/><br/>\n";
//作成
$fruits['apple'] = 'リンゴ';
$fruits['banana'] = 'バナナ';
$fruits['orange'] = 'オレンジ';
//出力
echo $fruits['apple']."<br/>\n";
echo $fruits['banana']."<br/>\n";
echo $fruits['orange']."<br/><br/>\n";
?>