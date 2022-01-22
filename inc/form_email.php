<?php
if(!empty($_POST)){ 
$email = $_POST['email'];
}

if(isset($_POST['submit'])){

   $email =    mysqli_real_escape_string($conn, $_POST['email']);

   $sql = "INSERT INTO yenihaber(email) 
        VALUES ('$email')";
         

if(mysqli_query($conn,$sql)){
    header('Location: index.php');

}else{
    echo 'Error' . mysqli_connect_error($conn);

}

}
?>