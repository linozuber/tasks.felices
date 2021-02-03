<?php
require "connect.php";

$board_id = $_POST["board-id"];
$card_name = $_POST["card-name"];
$card_descr = $_POST["card-descr"];
$card_color = $_POST["card-color"];

$sql = "INSERT INTO cards (id, parentId, boardId, name, descr, color, done)
VALUES (NULL, 0, '$board_id', '$card_name', '$card_descr', '$card_color', 0)";

if ($conn->query($sql) === TRUE) {
  header("Location: ../index.php?board=".$board_id);
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
