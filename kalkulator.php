<?php
$op = $_GET["op"] ?? "blank";
$x = $_GET["x"] ?? "blank";
$y = $_GET["y"] ?? "blank";
if ($x=="blank"||$y=="blank"||$op=="blank"){
    echo "<center><h1>Incorrect or incomplete data</h1></center>";
}
else if ($op=="sum"){
    $equals = $x + $y;
    $char = "+";
}
else if ($op=="subtract"){
    $equals = $x - $y;
    $char = "-";
}
else if ($op=="multiply"){
    $equals = $x * $y;
    $char = "*";
}
else if ($op=="divide"){
    if($y==0){
            echo "<h1>Tried to divide by zero</h1>";
    }
    else{
        $equals = $x / $y;
        $char = "/";
    }
}
else{
    echo "<h1>Unrecognized operation: $op</h1>";
}
echo "<h1>$x $char $y = $equals</h1>";