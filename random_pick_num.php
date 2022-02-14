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
  echo "<p>求めたい数値:$rands[$pick_num]</p>";


  function rand_pick_num($arr, $num) {
    $times = 1;
    $array_start = 0;
    $array_end = count($arr) - 1;

    while ( $array_start <= $array_end) {
      $center = ($array_start + $array_end) / 2;
      $center = (int)$center;

      if ($arr[$center] == $num) {
        return array($num, $times);
      }
      if ($num > $arr[$center]) {
        $array_start = $center + 1;
      }
      if ($num < $arr[$center]) {
        $array_end = $center - 1;
      }
      ++$times;
    }
    break;
  }

  $anser = rand_pick_num( $rands, $rands[$pick_num] );

  echo "求めたい数値:{$anser[0]} <br/>";
  echo "試行回数:{$anser{1}} <br/>";

?>
