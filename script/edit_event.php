<?php

  	if(isset($_POST['submit'])){

	 include_once 'dbHandler.php';
	 $id_event=$_POST['submit'];
	 $theme=$_POST['theme'];
	 $location=$_POST['location'];
	 $noOfPeople=$_POST['noOfPeople'];
	 $musicType=$_POST['musicType'];
	 $meniuType=$_POST['meniuType'];
	 $description=$_POST['description'];

	 if(empty($theme) || empty($location)){
            header("Location: ../editEvent.php?create_event=empty");
            exit();
      }
      else{

        	$sql="UPDATE events SET theme=? ,location=?,noOfPeople=?,musicType=?,meniuType=?,description=? WHERE events_id='".$id_event."';";
            $stmt = mysqli_stmt_init($conn);

            if(!mysqli_stmt_prepare($stmt,$sql)){
                    echo"SQL createEvent statement failed";
                }else{
                    mysqli_stmt_bind_param($stmt,"ssisss",$theme, $location,$noOfPeople,$musicType,$meniuType,$description);
                    mysqli_stmt_execute($stmt);
                }
           	 header("Location: ../manageEvents.php?create_event=success") ;
                    
      }
    }
    else
    {
    	 header("Location: ../editEvent.php?create_event=error");
        exit();
    }

?>