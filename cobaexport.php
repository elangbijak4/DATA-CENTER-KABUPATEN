<?php
  $data = array("a" => "orange", "b" => "banana", "c" => "apple");
  header("Content-Type: text/plain");

  $flag = false;
  foreach($data as $row) {
    if(!$flag) {
      // display field/column names as first row
      echo implode("\t", array_keys($row)) . "\r\n";
      $flag = true;
    }
    echo implode("\t", array_values($row)) . "\r\n";
  }
  exit;
?>