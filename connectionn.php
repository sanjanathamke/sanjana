
<?php
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$db="sanju";
$userName= $_POST['name'];
$userPhone= $_POST['phone'];
$conn= mysqli_connect($dbhost,$dbuser,$dbpass,$db);
//check connection

if(!$conn)
{
	echo "connection was failed: ". mysqli_connect_error();
}
//else
//{
//	echo "connection successful";
//}
//error_reporting(0);
//taking values from the form

//if the values are submitted blank.
if(empty($userName)||  empty($userPhone)){

	echo "all fields are required";
}
else{
//inserting data in db.
$sql= "INSERT into Data(name, phone)
values('$userName','$userPhone')";
 


 if(mysqli_query($conn, $sql)){
echo "your data has been submitted";
}
else{
echo "something went wrong";
}
}








?>