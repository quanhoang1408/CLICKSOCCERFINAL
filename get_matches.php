<?php
function getmatches(){
    @include 'config.php';
    $date = date('Y-m-d',time());
    $sql = "SELECT * FROM matches WHERE DATEDIFF('$date', match_day) < 0 AND numofseats>0 LIMIT 5;";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
        return $result;
    }
}