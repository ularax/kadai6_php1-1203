<?php

$pname = $_POST['pname'];
$number = $_POST['number'];
$bday = $_POST['bday'];
$species = $_POST['species'];
$neutering = $_POST['neutering'];
$vets = $_POST['vets'];
$insurance = $_POST['insurance'];
$gloomer = $_POST['gloomer'];
$hotel = $_POST['hotel'];
$food = $_POST['food'];
$date = $_POST['date'];
$weight = $_POST['weight'];
$meal = $_POST['meal'];
$memomeal = $_POST['memomeal'];
$medicine = $_POST['medicine'];
$memomedicine = $_POST['memomedicine'];
$poop = $_POST['poop'];
$memopoop = $_POST['memopoop'];
$pee = $_POST['pee'];
$memopee = $_POST['memopee'];
$walk = $_POST['walk'];
$memowalk = $_POST['memowalk'];

// ファイルに書き込み
$file = fopen('data/data.txt', 'a');
fwrite($file, $pname . '/' .  $number . '/' . $bday . '/' . $species . '/' . $neutering . '/' . $vets . '/' . $insurance . '/' . $gloomer . '/' . $hotel . '/' . $food . '/' . $date . '/' . $weight . '/' . $meal . '/' . $memomeal . '/' . $medicine . '/' . $memomedicine . '/' . $poop . '/' . $memopoop . '/' . $pee . '/' . $memopee . '/' . $walk . '/' . $memowalk . "\n");
fclose($file);
//文字作成
?>


<html>

<head>
    <meta charset="utf-8">
    <title>File書き込み</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <h1>PetCare</h1>
    <h2>データを登録しました</h2>
    <h3></h3>
    <table class="button">
        <tr>
            <td><a class="submit" href="read.php">登録内容を確認する</a></td>
            <td><a class="submit" href="post.php" class="btn-write">登録画面に戻る</a></td>
        </tr>
    </table>


</body>

</html>
