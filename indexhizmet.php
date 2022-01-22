<?php


include './inc/db.php';
include './inc/form.php';


$sql = 'SELECT * FROM users';
$result= mysqli_query($conn,$sql);
$users = mysqli_fetch_all($result, MYSQLI_ASSOC);



// colse mysql

mysqli_free_result($result);
mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hizmet</title>

        <!--Hizmet Style -->
        <link rel="stylesheet" href="./css/stylehizmet.css">
</head>
<body>
       
<div class="box">
           
           <h2>Hizmet talep formu</h2>
           
           <form action="indexhizmet.php" method="POST">
               
               <div class="inputBox">
                <input type="text" name="firstName" required="">
                <label>Adınız</label>
               </div>
               <div class="inputBox">
                <input type="text" name="lastName" required="">
                <label>soyadınız</label>
               </div>
               <div class="inputBox">
                <input type="text" name="email" required="">
                <label>Email</label>
               </div>
               <div class="inputBox">
                <input type="" name="number" required="">
                <label>Telefon Numarası</label>
               </div>
               <div class="inputBox" >
                   <input type="message" name="hizmet" required="">
                   <label>Hizmet</label>
               </div>
               
               <input type="submit" name="submit" value="gönder">
               
           </form>
       </div>


</body>
</html>