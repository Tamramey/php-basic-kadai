<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>課題11</title>
</head>

<body>
    <h1>課題11</h1>
  
    <?php
    $products = ["名前" =>"玉ねぎ", "値段" => 200, "産地" => "北海道"];
    
  
   $products = ["id" => 1, "名前" => "玉ねぎ", "産地" => "北海道", "値段" => 200];
   
       foreach ($products as $key => $value) {
        echo $key . " : " . $value  . "<br>";
    }
    ?>
</body> 
</html>
