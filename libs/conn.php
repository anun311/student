<?php
  // $mysqli = new mysqli("localhost", "root", "ict315", "db_stu");
  $mysqli = new mysqli("localhost", "root", "passc0de", "db_stu");
  if($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
  }
  // else {
  //   printf("Connect successful");
  //   exit ();
  // }

  if(!$mysqli->set_charset("utf8")) {
      printf("Error loading character set utf8: %s\n", $mysqli->error);
      exit();
  }

?>
