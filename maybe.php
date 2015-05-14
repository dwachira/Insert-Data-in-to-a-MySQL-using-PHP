<?php

//set up for mysql Connection

$servername="localhost";
$username="root";
$password="";

$servername = 'localhost';
$username = 'root';
$password = '';
$conn = mysql_connect($servername, $username, $password);
//test if the connection is established successfully then it will proceed in next process else it will throw an error message
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}

//we specify here the Database name we are using
mysql_select_db('members');
	$name = $_POST['name'];
	$email	= $_POST['email'];
	$password = md5($_POST['password']);
	$repassword = md5($_POST['repassword']);

//It will insert a row to our members`
$sql = "INSERT INTO `members`.`register` (`name`, `email`, `password`, `repassword`) 
		VALUES ('{$name}', '{$email}', '{$password}', '{$repassword}');";
//we are using mysql_query function. it returns a resource on true else False on error
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}
?>
					<script type="text/javascript">
						alert("New Record is Added to the Database");
						window.location = "new.html";
					</script>
					<?php
//close of connection
mysql_close($conn);
?>
