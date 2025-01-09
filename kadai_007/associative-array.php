<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP基礎編</title>
 </head>
 
 <body>
    <p>
        <?php

        $vegetablel_data = ['name' => 'onion', 'price' => 200, 'weight' => 160];

        // 連想配列の値を出力する
        print_r($vegetablel_data);
        ?>
     </p>
 </body>
 
 </html>