<?php
// session_start();
// $ip_add = getenv("REMOTE_ADDR");
// include "../db/connect.php";
// if(isset($_POST["GetEvent"])){
// 	$event_query = "SELECT * FROM event_type";
// 	$run_query1 = mysqli_query($con,$event_query);
	
// 	if(mysqli_num_rows($run_query1) > 0){
// 	  while($row = mysqli_fetch_array($run_query1)){
			  
// 		$type_id = $row["type_id"];
// 		$type_title= $row["type_title"];
// 		echo " 
// 		<div class='card'>
// 		<div class='card-header' id='$type_id'>
// 				   <a class='card-link' data-toggle='collapse'  href='#menu$type_id' aria-expanded='false' aria-controls='menu$type_id'>$type_title<span class='collapsed'><i class='icon-plus-circle'></i></span><span class='expanded'><i class='icon-minus-circle'></i></span></a>
// 				   </div> 
// 				   <div id='menu$type_id' class='collapse'>
// 				   <div class='card-body'>
// 					   <div class='row'>";
// 					   $type_query = "SELECT * FROM events,event_type WHERE events.type_id=event_type.type_id";
// 					   $run_query2 = mysqli_query($con,$type_query);
// 					   if(mysqli_num_rows($run_query2) > 0){
   
// 						 while($row = mysqli_fetch_array($run_query2)){
// 							 $newtype_id    = $row['type_id'];
// 							 $event_id   = $row['event_id'];
// 							 $event_title = $row['event_title'];
// 							 $type_title = $row['type_title'];
// 							 $event_price = $row['event_price'];
// 							 $img_link = $row['img_link'];
							
// 						   if($newtype_id==$type_id){

// 							 echo "
				   
						   
								   
// 						   <div class='col-md-6 col-lg-3 ftco-animate'>
// 						   <div class='destination'>
// 							   <a href='#' class='img img-2 d-flex justify-content-center align-items-center' style='background-image: url(./images/$img_link);'>
// 								   <div class='d-flex justify-content-center align-items-center'>
									   
// 								   </div>
// 							   </a>
// 							   <div class='text p-3'>
// 								   <h3><a href='#'>$event_title</a></h3>
// 								   <p class='price' style='font-weight: 400;font-size: 18px;color: #2f89fc;'>
// 									   $event_price
// 									   <span>RS</span>
// 								   </p>
// 								   <p>Far far away, behind the word mountains, far from the countries</p>
// 								   <hr>
// 								   <p class='bottom-area d-flex'>
// 									   <span><i class='icon-map-o'></i> Puneeth</span> 
// 									   <span class='ml-auto'><a href='register.php?event_id='$event_id>Book</a></span>
// 								   </p>
// 							   </div>
// 						   </div>
// 					   </div>";
// 						   }

// 						 }
// 					   }
					   
// 					echo"  
// 					</div>
// 				   </div>
// 				 </div>
// 			   </div>
// 				 ";


// 	  }
	  
	  
// 	}
            
// }

                                            
                                        


?>