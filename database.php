<?php
//connect to Mysql
$con = mysqli_connect("localhost", "root", "root", "shoutit");

//test
if(mysqli_connect_errno()){
	echo 'Failed to connect to MySQL: ' .mysqli_connect_error();

}