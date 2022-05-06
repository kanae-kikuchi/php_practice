<?php
// 1.引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください/ 
 function sum(){
  $result * 2;
  return $result;
}

// 2.$a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成してください
function add($a, $b){
 return $a + $b;
}

// 3.$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた結果を返す関数を作成してください
 array(1,3,5,7,9)
 foreach ($arr as array){
  $result multiply $arr;
  return $result;
}

// 4.下記のプログラムは、配列の中で1番大きい値を返す max_array という関数を実装しようとしています。途中の部分を完成させてください
function max_array($arr){
 $max_number = $arr[0];
 foreach ($arr as $a){
arsort($array);
print_r($array);

 }

 return $max_number;
 }

// 5.下記のビルトイン関数の用途、使い方を調べて実際に使ってみてください
strip_tags = HTMLタグを取り除く
$string = `<a href="http://google.com">Google</a>`;
$result = strip_tags($string);
echo $result;

array_push = 末尾にデータを追加する
$data = array("A", "B", "C");
array_push($data, "D", "E");
print_r($data);

array_merge = 配列を統合する
$data = array("TV1" => "500", "TV2" => "1000", "RADIO1" => "800");
$add_data = array("TV1" => "2000", "RADIO2" => "600");
$result = array_merge($data, $add_data);
print_r($result);

time, mktime　= 日付をUNIXのタイムスタンプとして取得する
$timestamp = mktime(0, 0, 0, 20, 11, 2015);
print $timestamp;

date = UNIXタイムスタンプを日付にする
$timestamp = time() + (60 * 60 * 24) * 7;
$next_week = date('Y年m月d日H時i分s秒', $timestamp);
print $next_week;

?>