<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>

<body>
  <p>
    <?php
    class Food
    {
      private $name;
      private $price;

      public function __construct(string $name, int $price)
      {
        $this->name = $name;
        $this->price = $price;
      }

      public function show_price()
      {
        echo "{$this->name}の値段は{$this->price}円です。<br>";
      }
    }

    $carrot = new Food('carrot', 800);
    $carrot->show_price(800);

    class Animal
    {
      private $name;
      private $height;
      private $weight;

      public function __construct(string $name, int $height, int $weight)
      {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
      }

      public function show_height()
      {
        echo "{$this->name}の体高は{$this->height}センチです。<br>体重は{$this->weight}キロです。";
      }
    }

    $dog = new Animal('Taro', 50, 5);
    $dog->show_height();
    ?>
  </p>
</body>

</html>