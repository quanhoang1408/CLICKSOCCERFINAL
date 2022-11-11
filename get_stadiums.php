<?php
function getstadiums(){
    @include 'config.php';
    $sql = "SELECT * FROM stadium;";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
        return $result;
    }
}