<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <form action="write.php" method="post">
    <h1>PetCare</h1>
    <h2>ペットケア・マネジメントツール</h2>
    <h3>ペットの基本情報を登録します</h3>
    <table class="form">
        <tr>
            <dl>
                <td>
                    <dt class="form-title">ペットの名前: </dt>
                </td>
                <td>
                    <dd><input type="text" name="pname" placeholder="ペットの名前を記入します" id="pname" required></dd>
                </td>
            </dl>
        </tr>

        <tr>
            <dl>
                <td>
                    <dt class="form-title">マイクロチップ: </dt>
                </td>
                <td>
                    <dd><input class="number" type="number" name="number" placeholder="マイクロチップID番号を記入します"></dd>
                </td>
            </dl>
        </tr>

        <tr>
            <dl>
                <td>
                    <dt class="form-title">生年月日:</dt>
                </td>
                <td>
                    <dd><input type="date" name="bday" id="bday"></dd>
                </td>
            </dl>
        </tr>

        <tr>
            <dl>
                <td>
                    <dt class="form-title">ペットの種類を選択します</dt>
                </td>
                <td>
                    <dd>
                        <input class="radio" type="radio" name="species" value="犬" checked>犬
                        <input class="radio" type="radio" name="species" value="猫">猫
                    </dd>
                </td>
            </dl>
        </tr>

        <tr>
            <dl>
                <td>
                    <dt class="form-title">去勢・避妊手術はしていますか？</dt>
                </td>
                <td>
                    <dd>
                        <input class="radio" type="radio" name="neutering" value="はい" checked>はい
                        <input class="radio" type="radio" name="neutering" value="いいえ">いいえ
                    </dd>
                </td>
            </dl>
        </tr>

    </table>

    <h3>利用サービスを登録します</h3>
    <table class="form">
        <tr>
            <dl>
                <td>
                    <dt class="form-title">動物病院:</dt>
                </td>
                <td>
                    <dd>
                        <input type="text" name="vets" placeholder="動物病院を登録します" id="vets">
                    </dd>
                </td>
            </dl>
        </tr>
        <tr>
            <dl>
                <td>
                    <dt class="form-title">保険会社:</dt>
                </td>
                <td>
                    <dd>
                        <input type="text" name="insurance" placeholder="保険会社を登録します" id="insurance">
                    </dd>
                </td>
            </dl>
        </tr>
        <tr>
            <dl>
                <td>
                    <dt class="form-title">トリミングサロン: </dt>
                </td>
                <td>
                    <dd>
                        <input type="text" name="gloomer" placeholder="トリミングサロンを登録します" id="gloomer">
                    </dd>
                </td>
            </dl>
        </tr>
        <tr>
            <dl>
                <td>
                    <dt class="form-title">ペットホテル: </dt>
                </td>
                <td>
                    <dd>
                        <input type="text" name="hotel" placeholder="ペットホテルを登録します" id="hotel">
                    </dd>
                </td>
            </dl>
        </tr>
        <tr>
            <dl>
                <td>
                    <dt class="form-title">ペットフード: </dt>
                </td>
                <td>
                    <dd>
                        <input type="text" name="food" placeholder="ペットフードを登録します" id="food">
                    </dd>
                </td>
            </dl>
        </tr>
    </table>

    <h3>今日の体調を記録します</h3>
    <table class="form">
        <tr>
            <dl>
                <td>
                    <dt class="form-title">今日の日付:</dt>
                </td>
                <td>
                    <dd>
                        <input class="number" type="date" name="date">
                    </dd>
                </td>
            </dl>
        </tr>
        <tr>
            <dl>
                <td>
                    <dt class="form-title">体重: </dt>
                </td>
                <td>
                    <dd>
                        <input type="number" name="weight" placeholder="今日の体重を記録します" id="weight">
                    </dd>
                </td>
            </dl>
        </tr>
        <tr>
            <dl>
                <td>
                    <dt class="form-title">ごはん: </dt>
                </td>
                <td>
                    <dd>
                        <input class="radio" type="radio" name="meal" value="完食した" checked>完食した
                        <input class="radio" type="radio" name="meal" value="少し食べた">少し食べた
                        <input class="radio" type="radio" name="meal" value="全く食べなかった">全く食べなかった<br>
                        <input type="text" name="memomeal" placeholder="メモを記入します" id="memomeal">
                    </dd>
                </td>
            </dl>
        </tr>
        <tr>
            <dl>
                <td>
                    <dt class="form-title">くすり: </dt>
                </td>
                <td>
                    <dd>
                        <input class="radio" type="radio" name="medicine" value="すべてのんだ" checked>すべてのんだ
                        <input class="radio" type="radio" name="medicine" value="一部のんだ">一部のんだ
                        <input class="radio" type="radio" name="medicine" value="全くのまなかった">全くのまなかった<br>
                        <input type="text" name="memomedicine" placeholder="メモを記入します" id="memomedicine">
                    </dd>
                </td>
            </dl>
        </tr>
        <tr>
            <dl>
                <td>
                    <dt class="form-title">うんち: </dt>
                </td>
                <td>
                    <dd>
                        <input class="radio" type="radio" name="poop" value="ふつう" checked>ふつう
                        <input class="radio" type="radio" name="poop" value="便秘">便秘
                        <input class="radio" type="radio" name="poop" value="下痢">下痢<br>
                        <input type="text" name="memopoop" placeholder="メモを記入します" id="memopoop">
                    </dd>
                </td>
            </dl>
        </tr>
        <tr>
            <dl>
                <td>
                    <dt class="form-title">おしっこ: </dt>
                </td>
                <td>
                    <dd>
                        <input class="radio" type="radio" name="pee" value="ふつう" checked>ふつう
                        <input class="radio" type="radio" name="pee" value="いつもより多い">いつもより多い
                        <input class="radio" type="radio" name="pee" value="いつもより少ない">いつもより少ない<br>
                        <input type="text" name="memopee" placeholder="メモを記入します" id="memopee">
                    </dd>
                </td>
            </dl>
        </tr>
        <tr>
            <dl>
                <td>
                    <dt class="form-title">おさんぽ: </dt>
                </td>
                <td>
                    <dd>
                        <input class="radio" type="radio" name="walk" value="した" checked>した
                        <input class="radio" type="radio" name="walk" value="しなかった">しなかった
                        <input class="radio" type="radio" name="walk" value="少しした">少しした<br>
                        <input type="text" name="memowalk" placeholder="メモを記入します" id="memowalk">
                    </dd>
                </td>
            </dl>
        </tr>
    </table>

    <table class="button">
        <tr>
            <td><input class="submit" type="submit" value="登録する"></input></td>
            <td><input class="reset" type="reset" value="リセット"></input></td>
        </tr>
    </table>

    </form>

    <footer>
        Copyrights Ulara Toma All Rights Reserved.
    </footer>

</body>
</html>
