<?php
  // ������ο��ͤ����������
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
  print_r($rands); // ����Υ���������
  echo "<br>";
  $pick_num = array_rand($rands);
  echo "<p>$rands[$pick_num]</p>";
?>
