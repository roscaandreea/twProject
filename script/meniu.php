<?php
      include_once 'dbHandler.php';


      $meniu="SELECT meniuType FROM meniuType";
      $results=mysqli_query($conn,$meniu);
      $resultCheck=mysqli_num_rows($results);
      if($resultCheck>0){
      	while($row=mysqli_fetch_assoc($results)){
            $meniu_type=$row['meniuType'];
      		echo  '<option>'.$meniu_type.'</option>';
      	}

      }
   
  ?>
