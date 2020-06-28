<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>結果</title>
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/style.css" />
</head>
<body>

<?php
    //index.phpで選択された手の値を取得
    $yourhand=$_GET["janken"];


    $result="";
    

    //コンピュータの出し手を配列で登録。
    $com=array(
        "グー",
        "チョキ",
        "パー"
    );

    $yourhandpic="";
    $comhandpic="";

    //array_randで配列のキーをランダムに発生させる（comの出し手）
    $comhand=$com[array_rand($com)];

    if ($yourhand === 'グー' && $comhand === 'チョキ') {
        $result = '勝ち';
        $yourhandpic="<img src='img/gu.png'>";
        $comhandpic="<img src='img/choki.png'>";
    } elseif ($yourhand === 'グー' && $comhand === 'グー') {
        $result = 'あいこ';
        $yourhandpic="<img src='img/gu.png'>";
        $comhandpic="<img src='img/gu.png'>";
    } elseif ($yourhand === 'グー' && $comhand === 'パー') {
        $result = '負け';
        $yourhandpic="<img src='img/gu.png'>";
        $comhandpic="<img src='img/pa.png'>";
    } elseif ($yourhand === 'チョキ' && $comhand === 'グー') {
        $result = '負け';
        $yourhandpic="<img src='img/choki.png'>";
        $comhandpic="<img src='img/gu.png'>";
    } elseif ($yourhand === 'チョキ' && $comhand === 'チョキ') {
        $result = 'あいこ';
        $yourhandpic="<img src='img/choki.png'>";
        $comhandpic="<img src='img/choki.png'>";
    }elseif ($yourhand === 'チョキ' && $comhand === 'パー') {
        $result = '勝ち';
        $yourhandpic="<img src='img/choki.png'>";
        $comhandpic="<img src='img/pa.png'>";
    }elseif ($yourhand === 'パー' && $comhand === 'グー') {
        $result = '勝ち';
        $yourhandpic="<img src='img/pa.png'>";
        $comhandpic="<img src='img/gu.png'>";
    }elseif ($yourhand === 'パー' && $comhand === 'チョキ') {
        $result = '負け';
        $yourhandpic="<img src='img/pa.png'>";
        $comhandpic="<img src='img/choki.png'>";
    }elseif ($yourhand === 'パー' && $comhand === 'パー') {
        $result = 'あいこ';
        $yourhandpic="<img src='img/pa.png'>";
        $comhandpic="<img src='img/pa.png'>";
    }

    echo "<p class=text>あなたの手は？</p>"."<br>";
    echo $yourhand."<br>";
    echo $yourhandpic."<br>";
    echo "<br>";
    echo "<p class=text>コンピュータの手は？</p>"."<br>";
    echo $comhand."<br>";
    echo $comhandpic."<br>";
 

    echo "<br>";
    echo "<p class=text>結果は・・・</p>"."<br>";
    echo "<br>";
    echo "<br>";
    echo "<h1 id='result'>$result</h1>";
    echo "<br>";

    echo "<a href='index.php' class='btn-vertical-border'>もう一度チャレンジ！！</a>";

?>
    
</body>
</html>

