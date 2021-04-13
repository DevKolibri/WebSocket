<?php
$dbc = mysqli_connect("localhost","root","root","test") or die("Error connect");
$result = [];
$select = mysqli_query($dbc,"SELECT * FROM `test` ");
while ($rs = mysqli_fetch_assoc($select)){
    $result[] = $rs;
}
print_r($result);