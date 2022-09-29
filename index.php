<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type = "text/css" href="style.css">
    <title>4eachblog 掲示板</title>
</head>


<body>

    <?php

    mb_internal_encoding("utf8");
    $pdo = new PDO("mysql:dbname=lesson01;host=localhost","root","");

    $stmt = $pdo->query("select * from 4each_keijiban");

    ?>

    <div class="logo"><img src="4eachblog_logo.jpg"></div>
    <header>
        <ul>
            <li>トップ</li>
            <li>プロフィール</li>
            <li>4eachについて</li>
            <li>登録フォーム</li>
            <li>問い合わせ</li>
            <li>その他</li>
        </ul>
    </header>

    <main>
        <div class="main_left">

            <h1>プログラミングに役立つ掲示板</h1>

            <form method = "post" action = "insert.php" class="toukou">

                <h2>入力フォーム</h2>
                <div>
                    <label>ハンドルネーム</label>
                    <br>
                    <input type = "text" name = "handlename" size = "35">
                </div>

                <div>
                    <label>タイトル</label>
                    <br>
                    <input type = "text" name = "title" size = "35">
                </div>

                <div>
                    <label>コメント</label>
                    <br>
                    <textarea name = "comments" raws = "5" colm = "40"></textarea>
                </div>

                <div>
                    <input type="submit" class = "submit" value="投稿する">
                </div>
            </form>

            <?php

                while($row = $stmt->fetch()){
                echo "<div class='tbox'>";
                    echo "<h2>".$row['title']."</h2>";
                    echo "<div class='comm'>";
                        echo $row['comments'];
                    echo "</div>";
                    echo "<div class='handle'>posted by ".$row['handlename']."</div>";
                echo "</div>";
                }
                
            ?>

        </div>

        <div class="main_right">

            <h2>人気の記事</h2>
            <ul>
                <li>PHPオススメ本</li>
                <li>PHP Myadminの使い方</li>
                <li>今人気のエディタ Top5</li>
                <li>HTMLの基礎</li>
            </ul>

            <h2>オススメリンク</h2>
            <ul>
                <li>インターノウス株式会社</li>
                <li>XAMPPのダウンロード</li>
                <li>Eclipseのダウンロード</li>
                <li>Bracketsのダウンロード</li>
            </ul>

            <h2>カテゴリ</h2>
            <ul>
                <li>HTML</li>
                <li>PHP</li>
                <li>MySQL</li>
                <li>JavaScript</li>
            </ul>
        </div>

    </main>

    <footer>
        copyright © internous 4each blog is the one which provides A to Z about programing
    </footer>
    
</body>

</html>