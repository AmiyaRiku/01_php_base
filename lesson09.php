<?php
// 配列に「10,60,90,70,50」を点数として格納し
// それぞれをif文で

// 80点以上なら「優」
// 60点以上なら「良」
// 40点以上なら「可」
// それ以下なら「不可」

// という形で区別し、
// ○○点は「○」です。と出力してください。

$points = [10, 60, 90, 70, 50];

foreach ($points as $point) {
  if ($point >= 80) {
    $grade = "優";
  } elseif ($point >= 60) {
    $grade = "良";
  } elseif ($point >= 40) {
    $grade = "可";
  } else {
    $grade = "不可";
  }

  echo $point."点は「".$grade."」です。"."<br>";
}
