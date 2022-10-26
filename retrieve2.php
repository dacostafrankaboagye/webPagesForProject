<?php
require "db.php";


    // if (!isset($_GET['water_level'])) 
    //     die(" water_level not specified");
    // if ($_GET['water_level']=='')
    //     die(" waterlevel is blank");
    // if (!is_numeric($_GET['water_level']) )
    //     die(" tempdataID is not numeric");
    
    // $data=array(); 
    

//     $theWaterLevel = $_GET['water_level'];
// $theStatus= $_GET['status'];
// $theCustomerNumber= $_GET['customer_number'];

  // SELECT your_column
//FROM your_table
//WHERE your_condition
//LIMIT 5; -- your limit of rows you want to show here

    $a = "SELECT * FROM `raw_data` order by time desc limit 5";
    $q=mysqli_query($con,$a);    
    
    $row=mysqli_fetch_object($q);
    while ($row)
    {         
        
        echo " {$row->water_level} {$row->status} {$row->customer_number} <br/>";
        ?>

        
        <?php
        $row=mysqli_fetch_object($q);
    }       
    
    echo "<br/>success";


?>



