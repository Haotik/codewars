/*Задача
https://www.codewars.com/kata/520446778469526ec0000001/php

Complete the function/method (depending on the language) to return true/True 
when its argument is an array that has the same nesting structure as the first array.

For example:

same_structure_as([1, 1, 1], [2, 2, 2]); // => true
same_structure_as([1, [1, 1]], [2, [2, 2]]); // => true
same_structure_as([1, [1, 1]], [[2, 2], 2]); // => false
same_structure_as([1, [1, 1]], [[2], 2]); // => false
same_structure_as([[[], []]], [[[], []]]); // => true
same_structure_as([[[], []]], [[1, 1]]); // => false
You may assume that all arrays passed in will be non-associative.


мое решение далекое от идеала */

function same_structure_as(array $a, array $b): bool {
// создаю описание массивов 
$str1 = $str2 = '';
foreach($a as $element) {
   $str1 .= isElement($element);
}

foreach($b as $element) {
  $str2 .= isElement($element);
}

if ($str1 == $str2) return true;
else return false;
}

function isElement($a){
//если элемент массив возвращаем a и делаем рекурсию с элментами массива
//если элемент - значение возвращаем е
  if (is_array($a)) {
      $cur = "a";
      foreach($a as $element) {
       $cur .= isElement($element);
      }
      return $cur;
   } else {
     return "e";
    }
}
