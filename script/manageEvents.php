<?php
      include_once 'dbHandler.php';

      $temp=$_SESSION['user_identity'];

      $events="SELECT eventName,events_id FROM events WHERE user_id='$temp'";
      $results=mysqli_query($conn,$events);
      $resultCheck=mysqli_num_rows($results);
      if($resultCheck>0){
      	while($row=mysqli_fetch_assoc($results)){
      		$id_event=$row['events_id'];
            $event_name=$row['eventName'];
      		echo  '<td id="cellEveManStyle">'.$event_name.
               '<form action="invitation.php" method="POST">
  					<button type="submit" value=" '. $id_event.'" name="idevent"><img  id=managerIcons src="images/mail-512.png" alt=""></button>
  				</form>
  				<form action="editEvent.php" method="POST">
  					<button type="submit" value=" '. $id_event.'" name="idevent"><img id=managerIcons src="images/box_edit-512.png" alt=""></button>
  				</form>
  				<form action="feedBackFromEditor.php" method="POST">
  					<button type="submit" value=" '. $id_event.'" name="idevent"><img  id=managerIcons src="images/Form2-512.png" alt=""></button>
  				</form>

            	</td>';
      	}

      }
   
  


    
?>
