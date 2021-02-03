<?php
require "connect.php";

$board_id = $_POST["board-id"];
$list0 = $_POST["list0"];
$list1 = $_POST["list1"];
$list2 = $_POST["list2"];
$list3 = $_POST["list3"];

$sql = "UPDATE boards SET list0='$list0', list1='$list1', list2='$list2', list3='$list3' WHERE id='$board_id'";

if ($conn->query($sql) === TRUE) {
  header("Location: ../index.php?board=".$board_id);
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
