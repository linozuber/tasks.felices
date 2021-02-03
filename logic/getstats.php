<?php

$expired_ids = [];
$empty_ids = [];
$board_count = [
  "all" => 0,
  "expired" => 0,
  "empty" => 0,
  "week" => 0,
  "month" => 0
];

$sql = "SELECT id FROM boards";
$result = $conn->query($sql);
if ($result->num_rows > 0){
  while($row = $result->fetch_assoc()){
    $board_count["all"] += 1;
    $brd = $row["id"];
    $sqlr = "SELECT id FROM cards WHERE boardId='$brd'";
    $resultr = $conn->query($sqlr);
    if ($resultr->num_rows <= 0){
      array_push($empty_ids, $row["id"]);
      $board_count["empty"] += 1;
    }
  }
}
$date = date("Y-m-d", strtotime("-2 months"));
$sql = "SELECT id FROM boards WHERE lastVisit<'$date'";
$result = $conn->query($sql);
if ($result->num_rows > 0){
  while($row = $result->fetch_assoc()){
    $board_count["expired"] += 1;
    array_push($expired_ids, $row["id"]);
  }
}
$date = date("Y-m-d", strtotime("-1 months"));
$sql = "SELECT id FROM boards WHERE lastVisit>'$date'";
$result = $conn->query($sql);
if ($result->num_rows > 0){
  while($row = $result->fetch_assoc()){
    $board_count["month"] += 1;
  }
}
$date = date("Y-m-d", strtotime("-7 days"));
$sql = "SELECT id FROM boards WHERE lastVisit>'$date'";
$result = $conn->query($sql);
if ($result->num_rows > 0){
  while($row = $result->fetch_assoc()){
    $board_count["week"] += 1;
  }
}
?>
