<?php
// 課題１
$name = "Ryo";
if ($name == "Ryo") {
  echo "私は あなたの名前 です";
} else {
  echo "あなたの名前ではありません";
}

// 課題２
$total = 0 ;
for ($i = 0 ; $i <= 10000 ; $i++) {
  $total += $i ;  
}
echo $total ; 

// 課題３
$fruits = array("mango", "pineapple", "orange", "papaya", "watermelon") ; 
foreach($fruits as $fruit) {
  echo " 好きなフルーツは" . $fruit;
  echo "\n" ; 
}

// 課題４
/* for文の始めの値を定義する */
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;
for($i = $start; $i <= $end; $i++){
  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i ;
  }
}