<?php

$connection = mysqli_connect("localhost",'Raghu','root123','bus');

if(!$connection) {
	die("Unable to connect" . mysqli_error($connection));
}

?>