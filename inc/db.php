<?php 

$conn = mysqli_connect('localhost','root',null,'Ekim_Staj2');

if(!$conn){
    echo 'Error' . mysqli_connect_error();
}