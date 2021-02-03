<?php
require "connect.php";

$board_id = $_POST["board-id"];
$card_id = $_POST["card-id"];

$sql = "DELETE FROM cards WHERE id=$card_id AND boardId='$board_id'";

if ($conn->query($sql) === TRUE) {
  header("Location: ../index.php?board=".$board_id);
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
