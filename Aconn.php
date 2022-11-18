<?php
  $servername = "localhost";
  $username = "root";
  $password= "";
  $dbname = "serenitydb";

  $connect = new mysqli($servername, $username, $password, $dbname);

    if ($connect->connect_error) {
      die("connection failed: ". $connect->connect_error);
        }

  $sql = "SELECT id, fullname, gender, email, username, password FROM loginuser";
  $result = $connect->query($sql);
?>