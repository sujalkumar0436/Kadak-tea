<!-- this is database configure file  -->


<?php
$HOSTNAME='localhost';
$USERNAME = 'root';
$PASSWORD = '';
$DATABASE = 'kadakdb';

$con=mysqli_connect($HOSTNAME, $USERNAME, $PASSWORD, $DATABASE);

if(!$con){
    die(mysqli_error($con));
}
?>