<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>PHP基礎編</title>
</head>

<body>
   <p>
      <?php
      // クラスを定義
      class Food {
          // プロパティを定義
          private $name;
          private $price;

          // コンストラクタを定義
          public function __construct(string $name, int $price) {
              $this->name = $name;
              $this->price = $price;
          }
      }
      // インスタンス化
      $food = new Food('potato',250);
      // メソッドにアクセスして実行する
    
      print_r($food);
      ?>
      </p>
</body>

</html>