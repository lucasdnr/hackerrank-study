<?php

function insertionSort(&$arr){
   for($i=0;$i<count($arr);$i++){
      $val = $arr[$i];
      $j = $i-1;
      while($j>0 && $arr[$j] > $val){
         $arr[$j+1] = $arr[$j];
         $j--;
      }
      $arr[$j+1] = $val;
   }
}

$handle = fopen ("php://stdin","r");
$t = fgets($handle);
$arr = explode(' ', fgets($handle));

insertionSort($arr);
foreach($arr as $value) {
  print $value." ";
}
