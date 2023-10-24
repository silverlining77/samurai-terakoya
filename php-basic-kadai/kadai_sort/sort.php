<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p> 
        <?php
        $numbers = array(15,4,18,23,10 );
        function sort_2way($array, $order ) {
         if ($order == 'asc' ) {
              sort($array);
         } elseif ($order === 'desc') {
          rsort($array);
         }
        }
        // 昇順でソート
        sort($numbers);
        echo "昇順にソートします<br> ";
        foreach ($numbers as $number) {
          echo $number . "<br>";
        }
          // 降順でソート
          rsort($numbers);
          echo "降順にソートします<br>";
          foreach ($numbers as $number) {
            echo $number . "<br>";
          }

        ?>    
    </p>
</body>

</html>