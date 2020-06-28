<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>php課題</title>
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <?php
    // phpのコードを記述
    ?>


    <h1 class=title>じゃんけんげーーむ！！</h1><br>

    <h2 class=sub>あなたの出し手を選択してください<h2><br>
    <form method="get" action="janken_result.php" >
    <div class="form">
    <p class=gu><input type="radio" name="janken" value="グー">グー</p><br>
    <p class=pa><input type="radio" name="janken" value="パー">パー</p><br>
    <p class=choki><input type="radio" name="janken" value="チョキ">チョキ</p><br>
    </div>
    <p class=button><input type="submit" value="勝負！"></p>
    </form>

    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- js -->
    <script src='js/app.js'></script>
  </body>
</html>
