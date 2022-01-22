<?php
if(!empty($_POST)){ 
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$number = $_POST['number'];
$hizmet = $_POST['hizmet'];
}

if(isset($_POST['submit'])){
   // echo $firstName .'welcome to world' . $lastName . ' ' . $email;
   $firstName =mysqli_real_escape_string($conn, $_POST['firstName']);
   $lastName = mysqli_real_escape_string($conn, $_POST['lastName']);
   $email =    mysqli_real_escape_string($conn, $_POST['email']);
   $number =   mysqli_real_escape_string($conn, $_POST['number']);
   $hizmet =   mysqli_real_escape_string($conn, $_POST['hizmet']);
  
   $sql = "INSERT INTO users(firstName,lastName,email,number,hizmet) 
        VALUES ('$firstName','$lastName','$email','$number','$hizmet')";
         

if(mysqli_query($conn,$sql)){
    header('Location: indexhizmet.php');

}else{
    echo 'Error' . mysqli_connect_error($conn);

}

}
?>