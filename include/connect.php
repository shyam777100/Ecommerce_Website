<?php

$con=mysqli_connect('localhost', 'root','','Mystore');
    if($con){
        echo "connection successful";
    }
else{
    die(mysqli_error($con));
}

?>