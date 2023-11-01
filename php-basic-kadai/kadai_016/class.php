
<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP基礎編</title>
 </head>
 
 <body>
  
 <p>
 <?php

class Food {
    private $name;
    private $price;

    public function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }

    public function show_price() {
        return $this->price;
    }
}

class Animal {
    private $name;
    private $height;
    private $weight;

    public function __construct($name, $height, $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
    }

    public function show_height() {
        return $this->height;
    }
}

// Foodクラスのインスタンスを作成し、プロパティを出力
$food_instance = new Food('potato', 250);
print_r($food_instance);
echo "<br>";

// Animalクラスのインスタンスを作成し、プロパティを出力
$animal_instance = new Animal('dog', 60, 5000);
print_r($animal_instance);
echo "<br>";

echo  $food_instance->show_price(); 
echo"<br>";
echo $animal_instance->show_height();
?>
     </p>

  
    
</body>

</html>

