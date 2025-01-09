<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>foreach文を使って連想配列の値とキーを出力しよう</title>
</head>

<body>
    <p>
    <?php
$variable_name = ['名前' => '玉ねぎ', '値段' => 200, '場所' => '北海道'];

foreach ($variable_name as $key => $value) {
    echo "{$key}: {$value}<br>";
}
?>

    </p>
</body>

</html>
