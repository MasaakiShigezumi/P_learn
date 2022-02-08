<?php
  function localCounter() {
    $counter++;
  }
  $counter = 10;
  localCounter();
  echo $counter;

  function globalCounter() {
    global $counter;
    $counter;
  }
  $counter = 10;
  globalCounter();
  echo $counter;

  function globalsCounter() {
    $GLOBALS[counter]++;
  }
  $counter = 10;
  globalsCounter();
  echo $counter;

  function staticCounter() {
    static $counter = 0;
    $counter++;
    echo "static Counter is {$counter}.\n";
  }
  $counter = 10;
  staticCounter();
  staticCounter();
  echo "global Counter is {$counter}.\n";
?>
