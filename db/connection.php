<?php
//---------------------------mysql db connection ------------//

$hostname='appoinment.cba0t13azydt.us-west-2.rds.amazonaws.com';
$username='team25';
$password='team251234';


/* $hostname='localhost';
$username='ambicacl_vishal';
$password='@v$02581';
 */
try {
		//$dbh = new PDO("mysql:host=$hostname;dbname=ambicacl_appoinment",$username,$password);
        $dbh = new PDO("mysql:host=$hostname;dbname=appoinment",$username,$password);
//    echo 'Connected to Database<br/>';
    }
catch(PDOException $e)
    {
    echo $e->getMessage();
    }
//---------------------------mysql db connection ------------//
/*
if($dbh){
	echo "connection successfully";
}
else{
	echo "connection faile";
}
*/
?>
