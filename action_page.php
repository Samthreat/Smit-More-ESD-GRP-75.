<?php 
$db = mysqli_connect('localhost','root','','buildingprocess');

if (isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $number = $_POST['number'];
    $State = $_POST['State'];
    $subject = $_POST['subject'];

    mysqli_query($db, "INSERT INTO feedbackform VALUES ('$fname' , '$lname' , '$number' , '$State' , '$subject') ");
  }
  header("location: index.html");

?>