<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        function sort_2way($array, $order) 
            if ($order) {
                // 昇順
                echo '昇順にソート<br>';
                sort($array); // 引数に直接配列を渡す
            }
            
                // 降順
            else{
                echo '降順にソート<br>'
                rsort($array); 
            }


            // ソート結果を表示
            foreach ($array as $num) {
                echo $num . ' ';
            }
            echo '<br>'; // 各ソート毎に改行
        

        // ソートする配列を宣言
        $nums = [15, 4, 18, 23, 10];

        // 昇順ソートの出力
        sort_2way($nums, true);

        // 降順ソートの出力
        sort_2way($nums, false);
        ?>
    </p>
</body>

</html>
        ?>
    </p>
</body>

</html>