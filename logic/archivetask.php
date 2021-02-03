<?php
require "connect.php";

$list_id = $_POST["list-id"];
$card_id = $_POST["card-id"];
$board_id = $_POST["board-id"];

$sql = "UPDATE cards SET parentId=$list_id WHERE id=$card_id";

if ($conn->query($sql) === TRUE) {
  header("Location: ../index.php?board=".$board_id);
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

?>
