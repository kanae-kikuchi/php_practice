<?php
$name = "Kanae";
if ($name = "Kanae") {
    echo "私は $name です。";
}
    else {
        "私は $name ではありません。";

}

$total = 0;
for ($i = 0; $i <= 10000; $i++){
    $total += $i;
}
echo $total;

$fruits = array("apple","peach","strawberry","orange","banana");
foreach($fruits as $fruit){
    echo "要素は" . $fruit;
    echo "\n";
}

$start = 1;
$end = 100;

for($i = $start; $i < $end; $i++){

  if($i % 5 == 0){
    echo $i;
 }
}
?>