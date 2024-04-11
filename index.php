<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Registration</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<main>
    <h1>Registration form</h1>
  <form method="post">
 <div>
  <label for="fName">Full Name</label>
  <input type="text" name="fName" id="fName" required>
 </div>
 <div>
  <label for="email">Email</label>
  <input type="email" name="email" id="email" required>
 </div>
 <div>
  <label for="age">Age</label>
  <input type="number" name="age">
 </div>
 <div>
  <label for="course">Course</label>
  <select name="course">
    <option value="NET">NET</option>
    <option value="SOD">SOD</option>
    <option value="ELS">ELS</option>
  </select>
 </div>
 <div>
  <button name="submit">Submit</button>
 </div>

  </form>
</main>
</body>
</html>

<?php 
$DB_Name= "SOS";
$DB_Server= "localhost";
$DB_Username= "root";
$DB_Password= "";
//127.0.0.1
$conn=mysqli_connect($DB_Server, $DB_Username, $DB_Password, $DB_Name);

if($conn){
  echo("Connected to the database");
}else{
  echo("Failed to connect to the database");
}


if($_SERVER["REQUEST_METHOD"] == "POST"){
  $fname = $_POST['fName'];
  $age = $_POST['age'];
  $email = $_POST['email'];
  $course = $_POST['course'];
 $query = "INSERT INTO student (fullName,email,age,course) VALUES('$fname','$email','$age','$course')";


 if(mysqli_query($conn,$query)){
  echo "New Student registered";
 }else{
   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
 }
}


?>