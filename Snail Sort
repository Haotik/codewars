/*
Задача 
https://www.codewars.com/kata/521c2db8ddc89b9b7a0000c1/php
Given an n x n array, return the array elements arranged from outermost elements to the middle element, traveling clockwise.
NOTE: The idea is not sort the elements from the lowest value to the highest; the idea is to traverse the 2-d array in a clockwise snailshell pattern.
NOTE 2: The 0x0 (empty matrix) is represented as en empty array inside an array [[]].
*/

function snail(array $array): array {

 
  if(empty($array[0][0])) {
    return $array[0];
  }
  
  $start = 0; 
  $last = count($array) - 1;
  $result = [];
  
  while ($start <= $last) {

    for($i = $start; $i <= $last;$i++) {
    $result[] = $array[$start][$i];
    }
    for($i = $start+1; $i <= $last;$i++) {
    $result[] = $array[$i][$last];
    }
    
    for($i = $last-1; $i >= $start;$i--) {
    $result[] = $array[$last][$i];
    }
    
    for($i = $last-1; $i > $start;$i--) {
    $result[] = $array[$i][$start];
    }
  
  $start++;
  $last--;
  }

  return $result;
}
