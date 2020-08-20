<?php
// 課題１
function number($value) {
   echo $value * 2;
}
number(16);
?>

<?php
// 課題２
function sum($a, $b) {
   echo $a + $b;
}
sum(6, 3);
?>

<?php
// 課題３
$arr = array(1, 3, 5, 7, 9); 

function multi($arr) {
    $value = 1;
      foreach ($arr as $ar){ 
      $value *= $ar; 
}
    echo $value;
}

multi($arr);
?>

<?php
// 課題４ 
// 全くわかりません。メンタリングにて解説お願いいたします。
echo 'メンタリングにて解説お願いいたします'
?> 

<?php
// 課題５.1
//strip_tags
$string = '<a href="https://tech-boost.jp/common/books/322?course=1">PHP,HTMLタグを取り除く</a>';
$result = strip_tags($string);
echo $result;
echo "\n"
?>

<?php
// 課題５.２
//array_push
$array = array(1, 10, 100);
$array_add= array_push($array, 1000, 10000);
print_r($array);
echo "\n";
?>

<?php
// 課題５.３
//array_merge
$country = array('Japan', 'Spain', 'UK');
$city = array ('Osaka', 'Barcelona', 'London');
$food = array ('Takoyaki', 'Tapas', 'Fish&Chips');
$reps_merge = array_merge($country, $city, $food);
print_r($reps_merge);
?>

<?php
// 課題５.４
//time
$date = time();  
  echo  $date;
?>

<?php
// 課題５.５
//mktime
echo date("Y/m/d H:i:s",mktime(7,0,30,8,4,2020));
?>

<?php
// 課題５.６
//date
echo date("Y/m/d H:i:s");
?>