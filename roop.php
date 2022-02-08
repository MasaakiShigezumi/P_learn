<?php
  $d_array = array(12, 35, 4, 7, 4, 19, 65);
  $count = count($d_array);
  for ($a = 0; $a < $count; $a++) {
    for ($b = $count - 1; $b > 0; $b--) {
      if($d_array[$b] < $d_array[$b-1]) {
        $temp = $d_array[$b];
        $d_array[$b] = $d_array[$b-1];
        $d_array[$b-1] = $temp;
      }
    }
  }
  print_r($d_array);

?>
