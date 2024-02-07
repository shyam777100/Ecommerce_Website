<?php

$con=mysqli_connect('localhost', 'root','','Mystore');
    if($con){
        echo "";
    }
else{
    die(mysqli_error($con));
}

?>