<?php

// ファイルを開く
$openFile = fopen('./data/data.txt', 'r');

// ファイル内容を1行ずつ読み込んで出力
// fgets($openFile)で、1行を読み込み、それを$strに代入
// 何も読み込むものがなくなると、while文が終了する
while ($str = fgets($openFile)) {
    // nl2br ... textファイルの改行を<br>に変換する関数
$result =  explode("/", $str);
    echo nl2br($result[0]);
    echo "<br>";
    echo nl2br($result[1]);
    echo "<br>";
    echo nl2br($result[2]);
    echo "<br>";
    echo nl2br($result[3]);
    echo "<br>";
    echo nl2br($result[4]);
    echo "<br>";
    echo nl2br($result[5]);
    echo "<br>";
    echo nl2br($result[6]);
    echo "<br>";
    echo nl2br($result[7]);
    echo "<br>";
    echo nl2br($result[8]);
    echo "<br>";
    echo nl2br($result[9]);
    echo "<br>";
    echo nl2br($result[10]);
    echo "<br>";
    echo nl2br($result[11]);
    echo "<br>";
    echo nl2br($result[12]);
    echo "<br>";
    echo nl2br($result[13]);
    echo "<br>";
    echo nl2br($result[14]);
    echo "<br>";
    echo nl2br($result[15]);
    echo "<br>";
    echo nl2br($result[16]);
    echo "<br>";
    echo nl2br($result[17]);
    echo "<br>";
    echo nl2br($result[18]);
    echo "<br>";
    echo nl2br($result[19]);
    echo "<br>";
    echo nl2br($result[20]);
    echo "<br>";
    echo nl2br($result[21]);
    echo "<br>";
    echo nl2br($result[22]);
    echo "<br>";
};

fclose($openFile);
