<?php

//session_start();

if(isset($_POST['submit'])){

    include_once 'dbHandler.php';    
    $idevent=$_POST['submit'];


    $question=mysqli_real_escape_string($conn, $_POST['question']);
    $answertype=mysqli_real_escape_string($conn, $_POST['typeanswer']);

    $questionid="SELECT questionType_id FROM questiontypes WHERE questionType='$answertype'";


   if(empty($question)){
        header("Location: ../feedBackFromEditor.php?addqu=empty");
        exit();
    }
   else{
                   $sql="INSERT INTO formquestions (events_id,question,questionType_id) VALUES (?,?,?);";
     
                    $stmt = mysqli_stmt_init($conn);

                    if(!mysqli_stmt_prepare($stmt,$sql)){
                     echo"SQL feedback statement failed";
                   }else{
                     mysqli_stmt_bind_param($stmt,"sss", $idevent,$question,$questionid);mysqli_stmt_bind_param($stmt,"sss", $idevent,$question,$questionid);
                    
                     mysqli_stmt_execute($stmt);
        header("Location: ../feedBackFromEditor.php?addqu=success") ;
        exit();
    }
}
//print_r($idevent);


}
?>
