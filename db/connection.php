<?php
//---------------------------mysql db connection ------------//

$hostname=getenv('DB_HOSTNAME');
$username='team25';
$password='team251234';


try {
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
