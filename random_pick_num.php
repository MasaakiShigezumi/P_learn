<?php
  // ランダムの数値を配列に代入
  $rands = array();

  $min = 1;
  $times = 100;
  $max = 10000;

  for($i = $min; $i <= $times; $i++){
    while(true){
      $tmp = mt_rand($min, $max);
      if( ! in_array( $tmp, $rands ) ){
        array_push( $rands, $tmp );
        break;
      }
    }
  }
  sort($rands);
  print_r($rands); // 初期のランダム配列
  echo "<br>";
  $pick_num = array_rand($rands);
  echo "<p>$rands[$pick_num]</p>";
?>
