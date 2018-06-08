<?php
      include_once 'dbHandler.php';


      $music="SELECT musicType FROM musicType";
      $results=mysqli_query($conn,$music);
      $resultCheck=mysqli_num_rows($results);
      if($resultCheck>0){
      	while($row=mysqli_fetch_assoc($results)){
            $music_type=$row['musicType'];
      		echo  '<option>'.$music_type.'</option>';
      	}

      }
   
  ?>
