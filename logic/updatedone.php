<?php
require "connect.php";

$card_done = $_POST["card-done"];
$card_id = $_POST["card-id"];

$sql = "UPDATE cards SET done=$card_done WHERE id=$card_id";

if ($conn->query($sql) === TRUE) {
  header("Location: ../index.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
