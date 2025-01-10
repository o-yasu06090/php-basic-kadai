<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        // ソートする配列を宣言
        $nums = [15, 4, 18, 23, 10 ];

        // 独自のソート関数
        function sort_2way(&$array, $order) {
            if ($order === true) {
                sort($array); // 昇順にソート
            } elseif ($order === false) {
                rsort($array); // 降順にソート
            } else {
                echo "無効なソート順です。TRUE または FALSE を指定してください。<br>";
                return;
            }
            
            foreach ($array as $value) {
                echo $value . "<br>"; // 結果を1行ずつ表示
            }
        }

        // 昇順にソートして表示
        echo "昇順にソートします。<br>";
        sort_2way($nums, true);

        // 再度ソートする配列を宣言（配列を初期化）
        $nums = [15, 4, 18, 23, 10 ];

        // 降順にソートして表示
        echo "降順にソートします。<br>";
        sort_2way($nums, false);
        ?>
    </p>
</body>

</html>
