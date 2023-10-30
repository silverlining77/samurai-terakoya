
<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP基礎編</title>
 </head>
 
 <body>
  
 <p>
 <?php
    // クラスを定義する
    class Food {
        // プロパティを定義する
        public $name;
        public $price;

        // コンストラクタを定義する
        public function __construct(string $name, int $price) {
            $this->name = $name;
            $this->price = $price;
        }
        
        public function set_price(int $price) {
            $this->price = $price;
        }
        
        public function show_name() {
            echo $this->name;
        }
    }

    // インスタンス化する
    $food = new Food('potato', 250);

    // インスタンス$foodの各プロパティの値を出力する
    print_r($food);

    echo "<br>";

    // クラスを定義する
    class Animal {
        // プロパティを定義する
        public $name;
        public $height;
        public $weight;

        // コンストラクタを定義する
        public function __construct(string $name, int $height, int $weight) {
            $this->name = $name;
            $this->height = $height;
            $this->weight = $weight;
        }
    }

    // インスタンス化する
    $animal = new Animal('dog', 60, 5000);

    // インスタンス$animalの各プロパティの値を出力する
    print_r($animal);

    echo "<br>";

     // $food オブジェクトの price プロパティの値を表示
     echo  $food->price;

     echo "<br>";

     // $animal オブジェクトの height プロパティの値を表示
     echo $animal->height;
    ?>
     </p>

  
    
</body>

</html>

