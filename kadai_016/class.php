<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
  <p>
    <?php
    // クラスFoodを定義する
    class Food {
      // プロパティを定義する
      private $name;
      private $price;

      // メソッドを定義する
      public function show_price() {
          echo $this->price . '<br>';
      }
      // コンストラクタを定義する
      public function __construct(string $name, int $price) {
      $this->name = $name;
      $this->price = $price;
      }
    }
      // インスタンス化する
    $Food = new Food('potato', 250);

    // クラスAnimalを定義する
    class Animal {
      // プロパティを定義する
      private $name;
      private $height;
      private $weight;

      // メソッドを定義する
      public function show_height() {
        echo $this->height;
      }

      // コンストラクタを定義する
      public function __construct(string $name, int $height, int $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
        }
    }
    // インスタンス化する
    $Animal = new Animal('dog', 60, 5000);


    // インスタンスの各プロパティの値を出力する
      print_r($Food);
      echo '<br>';
      print_r($Animal);
      echo '<br>';


    // メソッドにアクセスして実行する
    $Food->show_price();
    $Animal->show_height();


    ?>
  </p>
  </body>

</html>