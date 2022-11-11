<?php
function getmatchesstadium($namestadium){
    @include 'config.php';
    $date = date('Y-m-d',time());
    $sql = "SELECT * FROM matches WHERE DATEDIFF('$date', match_day) < 0 AND numofseats>0 AND stadium = '$namestadium';";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
        return $result;
    }
}