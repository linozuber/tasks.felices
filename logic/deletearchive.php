<?php
require "connect.php";

$board_id = $_POST["board-id"];
$list_id = $_POST["list-id"];

$sql = "DELETE FROM cards WHERE parentId=$list_id AND boardId='$board_id'";

if ($conn->query($sql) === TRUE) {
  header("Location: ../index.php?board=".$board_id);
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
