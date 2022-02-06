<?php
  $bigLongVariableName = "PHP";
  $short =& $bigLongVariableName;
  $bigLongVariableName .= " rocks!";
  print "\$short is $short\n";
  print "Long is $bigLongVariableName\n";

  $short = "Programming $short";
  print "\$short is $short\n";
  print "Long is $bigLongVariableName\n";

  $white = "snow";
  $black =& $white;
  unset($white);
  print $black;
 ?>
