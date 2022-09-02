<?php
$conn = mysqli_connect("localhost", "root", "","scholarship");
if($conn) {
    echo "success"; 
} 
else {
    die("Error". mysqli_connect_error()); 
} 
?>