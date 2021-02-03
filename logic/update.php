<?php
require "connect.php";

$board_id = $_POST["board-id"];
$card_id = $_POST["card-id"];
$card_name = $_POST["card-name"];
$card_descr = $_POST["card-descr"];
$card_color = $_POST["card-color"];

$sql = "UPDATE cards SET name='$card_name', descr='$card_descr', color='$card_color' WHERE id=$card_id";

if ($conn->query($sql) === TRUE) {
  header("Location: ../index.php?board=".$board_id);
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
