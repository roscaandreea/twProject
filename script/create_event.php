<?php

  	if(isset($_POST['submit'])){

	 include_once 'dbHandler.php';
	 $nameEvent=$_POST['nameEvent'];
	 $id_user=$_POST['submit'];
	 $theme=$_POST['theme'];
	 $location=$_POST['location'];
	 $noOfPeople=$_POST['noOfPeople'];
	 $musicType=$_POST['musicType'];
	 $meniuType=$_POST['meniuType'];
	 $description=$_POST['description'];

	 if(empty($nameEvent) || empty($theme) ||empty($location)){
            header("Location: ../createEvent.php?create_event=empty");
            exit();
      }
      else{
      		$sql="SELECT * FROM events WHERE eventName='$nameEvent'";
            $result=mysqli_query($conn,$sql);
            $resCheck=mysqli_num_rows($result);
            if($resCheck>0){
            	header("Location: ../createEvent.php?create_event=invalidName");
                exit();
            }
            else{

            	$sql="INSERT INTO events (user_id,eventName,theme,location,noOfPeople,musicType,meniuType,description) VALUES (?,?,?,?,?,?,?,?);";
                $stmt = mysqli_stmt_init($conn);

                if(!mysqli_stmt_prepare($stmt,$sql)){
                        echo"SQL createEvent statement failed";
                    }else{
                        mysqli_stmt_bind_param($stmt,"isssisss",$id_user,$nameEvent,$theme, $location,$noOfPeople,$musicType,$meniuType,$description);
                        mysqli_stmt_execute($stmt);
                    }
               	 header("Location: ../manageEvents.php?create_event=success") ;
                    
            }
      }
    }
    else
    {
    	 header("Location: ../createEvent.php?create_event=error");
        exit();
    }

?>