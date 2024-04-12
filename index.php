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
    <a href="read.php">go live</a>
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
include 'db.php';
include 'create.php';





?>