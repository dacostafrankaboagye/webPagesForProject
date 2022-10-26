<?php
require "db.php";

$theCustomerNumber= $_GET['customer_number'];

$a = "SELECT * FROM `raw_data` where customer_number='{$theCustomerNumber}' order by time desc limit 5";

$q=mysqli_query($con,$a);

$row=mysqli_fetch_object($q);

while ($row){

    echo " {$row->water_level} {$row->status} {$row->customer_number}";
    echo("\n");
    ?>
    <?php
    $row=mysqli_fetch_object($q);
}       
    
echo "\n" ;
echo "success";

?>



