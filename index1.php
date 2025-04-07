<?php

echo"<h3> V1 </h3>";

$v1 = range(0,12);
$v2 = range(0,100,10);
$v3 = range("a","i");
$v4 = range("e","a");

foreach ($v1 as $var) {
    echo $var . ", ";
}

echo"<br> <h3> V2 </h3>";

foreach ($v2 as $var) {
    echo $var . ", ";
}

echo"<br> <h3> V3 </h3>";

foreach ($v3 as $var) {
    echo $var . ", ";
}

echo"<br> <h3> V4 </h3>";

foreach ($v4 as $var) {
    echo $var . ", ";
}
?>