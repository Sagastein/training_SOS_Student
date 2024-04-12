<?php
include 'db.php';
$query = "SELECT * FROM student";
echo "<table>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>Full Name</th>";
echo "<th>Email</th>";
echo "<th>Age</th>";
echo "<th>Course</th>";
echo "<th>Action</th>";
echo "</tr>";

if(mysqli_query($conn,$query)){
  $result = mysqli_query($conn,$query);
  if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result)){
        # loop and  display students in a table rows
        echo "<tr>";
        echo "<td>".$row['id']."</td>";
        echo "<td>".$row['fullName']."</td>";
        echo "<td>".$row['email']."</td>";
        echo "<td>".$row['age']."</td>";
        echo "<td>".$row['course']."</td>";

        echo "<td><a href='delete.php?uuid=".$row['id']."'>Delete</a></td>";
        echo "</tr>";
        
    }
  }else{
    echo "No student registered";
  }
}
echo "</table>";

?>

<style>
  table{
    width: 100%;
    border-collapse: collapse;
  }
  th,td{
    border: 1px solid black;
    padding: 8px;
    text-align: left;
  }
  th{
    background-color: #f2f2f2;
  }
  tr:nth-child(even){
    background-color: #f2f2f2;
  }
</style>