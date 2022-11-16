<?php 
	$mysqli = new mysqli("localhost", "root", "ict315", "db_stu");
	
	$sql = 'SELECT * FROM students';
	$result = mysqli_query($mysqli, $sql);
	// Fetch all
	$rows_student = $result->fetch_all(MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}

#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}


</style>
</head>
<body>
<div class="container">
<table style="width:100%;">
  <tr style="vertical-align: top;">
    <td width="50%">

      <form action="add_student.php">
        <div class="container">
          <h1>Student Register</h1>
          <p>Please fill in this form to create a student.</p>
          <hr>
          <label for="stu_id"><b>Student ID</b></label>
          <input type="text" name="stu_id" id="stu_id" required>

          <label for="stu_title"><b>Title</b></label>
          <input type="text" name="stu_title" id="stu_title" >

          <label for="stu_name"><b>Name</b></label>
          <input type="text" name="stu_name" id="stu_name" >

          <label for="stu_tel"><b>Tel Number</b></label>
          <input type="text" name="stu_tel" id="stu_tel" >

          <label for="stu_byear"><b>Birth Year</b></label>
          <input type="text" name="stu_byear" id="stu_byear" >
          <hr>
          <button type="submit" class="registerbtn">Register</button>
        </div>
      </form>

    </td>
    <td width="50%">
      <div class="">
        <h1>List of Students</h1>
        <hr>
      </div>
       <table style="width:100%;" id="customers">
         <tr>
           <th>stu_id</th>
           <th>stu_title</th>
           <th>stu_name</th>
           <th>stu_tel</th>
           <th>stu_byear</th>
         </tr>
         <?php foreach($rows_student as $row): ?>
         <tr>
         <td><?=$row['stu_id'] ?></td>
         <td><?=$row['stu_title'] ?></td>
         <td><?=$row['stu_name'] ?></td>
         <td><?=$row['stu_tel'] ?></td>
         <td><?=$row['stu_byear'] ?></td>
         </tr>
         <?php endforeach; ?>
       </table>

    </td>
  </tr>
</table>

  <div class="container signin">
    <p>MR.ANUNTHAWIP CHAIMAO | StuID: 63054088 | ICT315</p>
  </div>

</div>
</body>
</html>

