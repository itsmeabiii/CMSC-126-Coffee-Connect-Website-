<?php
	   include 'connection.php';

       $name = $_POST['name'];
       $address = $_POST['location'];
       $order  = $_POST['menu'];

    
     if ((isset($_POST['place_order']))){   

        foreach ($order as $item) {
                $query = "INSERT INTO customers (Name, Address, item) 
                        VALUES ('$name', '$address', '$item');";   
                $query_run = $conn-> query($query);
        }          

        if($query_run){            
             header("location: displayOrders.php");
                
        }else{
            echo "Hi $name we're experiencing server problems. Please try again later!";        
        }

              
        
    }
	
$conn -> close();
?>


