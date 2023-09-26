<?php

function openFile() {
    $fileName = './bbs/20230924.txt';
    return fopen($fileName, 'a+');
}

function closeFile($fh) {
    fclose($fh);
}

function requestPost($fh) {
    $date = time();

    if(fputcsv($fh, [$_POST['name'], $_POST['comment'], $date]) === false) {
        echo "やばいよ！";
    }
}

function getBbs($fh) {
    $bbsArray = [];

    while (($buffer = fgetcsv($fh, 4096)) !== false) {
        $bbsArray[] = [
            'name' => $buffer[0],
            'comment' => $buffer[1],
            'date' => $buffer[2]
        ];
    }
    return $bbsArray;
}
?>