<?php 

echo("<br /> testing ");

// passing parameter to the php backend



$theWaterLevel = $_GET['water_level'];
$theStatus= $_GET['status'];
$theCustomerNumber= $_GET['customer_number'];

echo("<br/> =================== <br/> ");
echo("The WaterLevel is = " . $theWaterLevel );
echo("<br/> =================== <br/> ");
echo("The Status is = " . $theStatus );



 ?>



<?php


function checkConnection($conn){
    
    if(!$conn){
        die("Error with the coneection" .mysqli_error());
    }else{
        echo("<br/>" . "<br/>". "Sucessful" . " <br/>  ");
    }
 
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projectmidsem";

$conn = mysqli_connect($servername, $username, $password, $dbname);

checkConnection($conn);

echo("<br/>");

echo("<br/>". "Ended" . "<br/>");





// inserting 

$a =  "INSERT INTO raw_data(water_level,status,customer_number) VALUES('{$theWaterLevel}','{$theStatus}','{$theCustomerNumber}')";

if(mysqli_query($conn, $a)){
    echo("The record has been added");
}else{
    echo("Failed!");
}




?>


<br/>







