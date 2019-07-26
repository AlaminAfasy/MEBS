
<?php
$dbhost="localhost";
$dbuser="root";
$dbpass="root";
$dbname ="maaelectronic";

$con=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if($con)
{
	echo "Connect Successful";
}else{
	echo "Connention Problem";
}
?>