<?php
  require 'config.php';

  $data = [
    "name" => "John Doe",
    "age" => 30,
    "email" => "john.doe@example.com"
  ];

  echo json_encode($data);
?>
