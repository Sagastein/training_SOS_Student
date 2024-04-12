<?php 
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