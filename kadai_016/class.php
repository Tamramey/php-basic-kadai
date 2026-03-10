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
      public function show_price() {
        echo $this->price . '<br>';
      }
      }
      // インスタンス化
      $food = new Food('potato',250);
      // メソッドにアクセスして実行する
      $food->show_price();
    
      print_r($food);

    class Animal {
    
        private $name;
        private $height;

        // コンストラクタを定義する
        public function __construct(string $name, int $height) {
          $this->name = $name;
          $this->height = $height;
        }
        public function show_height() {
          echo $this->height . '<br>';
        }
    }
      // インスタンス化
      $animal = new Animal('dog',60);

      
      
      $animal->show_height();
      print_r($animal);
      

      ?>
      </p>
</body>

</html>