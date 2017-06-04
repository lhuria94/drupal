<?php

class Test {
  public function add($a,$b) {
   return $a+$b;
  }
}
$a = new Test();
  $a = $a->add(2,2);
  print $a;
?>
