<?php
$conn = mysqli_connect('localhost','root','','prasanna');
if($conn){
    echo "DB connected";
}else{
    echo "DB not connected";
}
?>