<?php 

echo("<br /> testing ");

// passing parameter to the php backend



$level = $_GET['level'];
$cid = $_GET['cid'];


echo("<br/> =================== <br/> ");
echo("current level = " . $level );
echo("<br/> =================== <br/> ");
echo("The customer id is  = " . $cid);


 ?>


<!--  testing the v=connecting to the Database
 -->

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


// $data=array();
// $query = "select * from sensordata ";
// $q=mysqli_query($conn, $query);
// while ($row=mysqli_fetch_object($q)){
//     $data[]=$row;
// }

// echo json_encode($data);


echo("<br/>". "Ended" . "<br/>");





// inserting 

$a =  "INSERT INTO raw_data(water_level,customer_number) VALUES('{$level}','{$cid}')";

if(mysqli_query($conn, $a)){
    echo("The record has been added");
}else{
    echo("Failed!");
}


// // deleting 
// // $q=mysqli_query($conn,"insert into temp");
// $sql= "delete from tempdata where tempdataID={$_GET['tempdataID']}";



// if(mysqli_query($conn, $sql)){
//     echo("The record has been deleted");
// }else{
//     echo("deletion Failed!");
// }


?>

<!-- fetching from the datat base -->
<br/>




<!--  -->


