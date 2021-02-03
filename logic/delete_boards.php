<?php
require "connect.php";
require "getstats.php";

foreach($empty_ids as $_mpt){
  $sql = "DELETE FROM boards WHERE id='$_mpt'";
  if ($conn->query($sql) === TRUE) {

  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
foreach($expired_ids as $_exp){
  $sql = "DELETE FROM cards WHERE boardId='$_exp'";
  if ($conn->query($sql) === TRUE) {
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  $sql = "DELETE FROM boards WHERE id='$_exp'";
  if ($conn->query($sql) === TRUE) {
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
header("Location: ../stats.php?backlinkdata=".$_GET["backlinkdata"]);


?>
