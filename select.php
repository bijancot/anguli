<?php
include_once("database.php");


$qoro = $mysqli->query("SELECT id,nama,kelas FROM nono ");

    while ($row = $qoro->fetch_assoc()) {

      $output[] = $row;
    }

    echo json_encode($output);
?>