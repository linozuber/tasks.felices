<?php
require "connect.php";

$list_id = $_POST["list-id"];
$card_id = $_POST["card-id"];

$sql = "UPDATE cards SET columnId=$list_id WHERE id=$card_id";

if ($conn->query($sql) === TRUE) {
  echo "chard moved successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
