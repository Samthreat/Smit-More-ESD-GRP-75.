<?php 
$db = mysqli_connect('localhost','root','','orders');

if (isset($_POST['submit'])) {
    $Username = $_POST['Username'];
    $material = $_POST['material'];
    $Quantity = $_POST['Quantity'];
    $accountno = $_POST['accountno'];
    $address = $_POST['address'];
    $phno = $_POST['phno'];

    mysqli_query($db, "INSERT INTO materials VALUES ('$Username' , '$material' , '$Quantity' , '$accountno' , '$address' , '$phno') ");
  }
  header("location: index.html");

?>