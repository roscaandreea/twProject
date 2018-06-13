<?php





    include_once 'dbHandler.php';    
    
    $idevent=mysqli_real_escape_string($conn, $_POST['submit']); 

    if(!isset($idevent))
    {
        $idevent=$_SESSION["currently_editing"];
    }

//$idevent=$_SESSION["currently_editing"];


    $question=mysqli_real_escape_string($conn, $_POST['question']);
    $answertype=mysqli_real_escape_string($conn, $_POST['typeanswer']);

  


   if(empty($question)){
        header("Location: ../feedBackFromEditor.php?question_add=empty");
        exit();
    }
   else{
                   $sql="INSERT INTO formquestions (events_id,question,questionType_id) VALUES (?,?,?);";
     
                    $stmt = mysqli_stmt_init($conn);

                    if(!mysqli_stmt_prepare($stmt,$sql)){
                     echo"SQL feedback statement failed";
                   }else{
                     mysqli_stmt_bind_param($stmt,"isi", $idevent,$question,$answertype);
                    
                     mysqli_stmt_execute($stmt);
        header("Location: ../feedBackFromEditor.php?question_add=succes") ;
        exit();
    }
}

?>
