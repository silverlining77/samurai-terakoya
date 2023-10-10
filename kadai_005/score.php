<?php
//テストの得点を配列として格納
$test_scores = [ 85,92,78,95,88];

//合計点を計算
$total_score = array_sum($test_scores) ;

//平均点を計算
$average_score = $total_score / count($test_scores);

// 結果を出力
echo "合計点: " . $total_score . "点
<br>";
echo "平均点: " . $average_score . "点";
?>