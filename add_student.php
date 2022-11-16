<?php
$mysqli = new mysqli("localhost", "root", "ict315", "db_stu");
print_r($_GET);

$g_id = $_GET['stu_id'];
$g_title = $_GET['stu_title'];
$g_name = $_GET['stu_name'];
$g_tel = $_GET['stu_tel'];
$g_byear = $_GET['stu_byear'];

if ($_GET['stu_id'] <> '') {
  // echo "<br>OK OK";
  $insert_sql = "INSERT INTO students VALUE('$g_id', '$g_title', '$g_name', '$g_tel', '$g_byear')";
  // echo '<br>'.$insert_sql;
  // $insert_result = mysqli_query($mysqli, $insert_sql);
  if ($mysqli->query($insert_sql) === TRUE) {
    echo "<br>New record created successfully";
  } else {
    echo "<br>Error: " . $insert_sql . "<br>" . $mysqli->error;
  }
}

// header("Location: index.php");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <a href="index2.php" type="submit"><br>Back to: Register Page</a>
  </body>
</html>
