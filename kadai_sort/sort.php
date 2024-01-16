<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>

<body>
  <p>
    <?php
    $array = [15, 4, 18, 23, 10];
    $order = true;

    function display_array($array)
    {
      foreach ($array as $val) {
        echo "{$val}<br>";
      }
    }

    function sort_2way($array, $order = false)
    {
      if ($order === true) {
        sort($array);
        echo '昇順にソートします。<br>';
      } else {
        rsort($array);
        echo '降順にソートします。<br>';
      }
      display_array($array);
    }

    echo sort_2way($array, $order);
    echo sort_2way($array);

    ?>
  </p>
</body>

</html>