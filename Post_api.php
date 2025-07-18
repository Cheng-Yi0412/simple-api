<?php
  // 宣告變數 comments 為空陣列
  $comments = array(
    "comments" =>[
    [
    "id" => 1,
    "username" => "aaa",
    "content" => "123",
    ],
    [
    "id" => 2,
    "username" => "bbb",
    "content" => "456",
    ]
    ]
  );
  // 把資料放到陣列 $comments，裡面再建立陣列 array
 

  $response = json_encode($comments);
  // 讓瀏覽器知道我們要印出 JSON 格式
  header('Content-Type: application/json; charset=utf-8');
  echo $response;
?>
