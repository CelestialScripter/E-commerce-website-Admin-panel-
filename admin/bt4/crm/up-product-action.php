<?php  
// This class is called by ajax from register.php


require 'connect.php';

require 'date.php';
                                                                                         
                             
                            

                              $it_id =  mysqli_real_escape_string($mysqli,$_POST['it_id']);
                              $it_name = mysqli_real_escape_string($mysqli,$_POST['it_name']);
                              $it_desc = mysqli_real_escape_string($mysqli,$_POST['it_desc'];
                              $it_quantity =  mysqli_real_escape_string($mysqli,$_POST['it_quantity']);
                              $discount =  mysqli_real_escape_string($mysqli,$_POST['discount']);
                              $is_active =  mysqli_real_escape_string($mysqli,$_POST['is_active']);
                              $product_pic =  mysqli_real_escape_string($mysqli,$_POST['product_pic']);
                              $price =  mysqli_real_escape_string($mysqli,$_POST['price']);
                              
   	$evnt_date = new DateTime($event_date);

    $evt_date = $evnt_date->format('d-M-Y');
    
   // $date_today = date('d-M-Y');



if(is_array($_FILES))   
 {  
      

      foreach ($_FILES['files']['name'] as $name => $value)  
      {  
           $file_name = explode(".", $_FILES['files']['name'][$name]);  
           $allowed_ext = array("jpg", "jpeg", "png", "gif");  
           if(in_array($file_name[1], $allowed_ext))  
           {  
                $new_name = substr(sha1(mt_rand()),0,50) . '.' . $file_name[1];  
                $sourcePath = $_FILES['files']['tmp_name'][$name];  
                $target = "profile_pic/".$new_name;  
                if(move_uploaded_file($sourcePath, $target))   
                {  
                     
					 
					 $update_event_query = " UPDATE items set it_name='$it_name', it_desc='$it_desc', it_quantity='$it_quantity', discount ='$discount', is_active='$is_active', product_pic='$product_pic',price='$price' ";
					 

					 $update_event_result = mysqli_query( $mysqli, $update_event_query );
					

					 if( !$update_event_result )
					{
						die(mysqli_error($mysqli));
					}

					 echo "pass";
					 exit();
                }                 
           }            
      }   
 }  
else if(!is_array($_FILES))
{
		 $update_event_query = " UPDATE items set it_name='$it_name', it_desc='$it_desc', it_quantity='$it_quantity', discount ='$discount', is_active='$is_active', product_pic='$product_pic',price='$price' ";
					 
					 

					 $update_event_result = mysqli_query( $mysqli, $update_event_query );
					

					 if( !$update_event_result )
					{
						die(mysqli_error($mysqli));
					}

					 echo "pass";
					 exit();
}

else{
	echo "error". mysqli_error($mysqli);
	exit();
}





			
			
		
		


	






?>