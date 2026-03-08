<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        // sort_2way を定義
        function sort_2way($array, $order) {
            
            if ($order) {
                // 昇順ソート
                echo '昇順にソートします。<br>';
                sort($array);
            } 
            else {
                // 降順ソート
                echo '降順にソートします。<br>';
                rsort($array);
            }

            // ソートの結果の出力
            foreach ($array as $num) {
                echo $num . '<br>';
            }
        }

        // ソートする配列を宣言
        $nums = [15, 4, 18, 23, 10];

        // 昇順ソートの呼び出し
        sort_2way($nums, true);

        // 降順ソートの呼び出し
        sort_2way($nums, false);
        ?>
    </p>
</body>

</html>