<?php
function createstadium($name, $capacity, $location, $link){
    $element = "
    <form class=\"div-box\"  action=\"stadium.php\" method=\"POST\" >
      <div class=\"child1\"><img id=\"img_stadium\" src=\"$link\"></div>
      <div class=\"child2\">
        <p>$name</p>
        <p>Capacity : $capacity</p>
        <p>Location : $location</p>
        <input class=\"submitbtn\" type=\"submit\" name=\"find\" value=\"Find Match\"></input>
        <input type=\"hidden\" name =\"namesta\" value=\"$name\">
      </div>
    </form>
    ";
    echo $element;
}