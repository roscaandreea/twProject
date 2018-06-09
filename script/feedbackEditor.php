<?php

//session_start();

if(isset($_POST['submit'])){

    include_once 'dbHandler.php';


    $question=mysqli_real_escape_string($conn, $_POST['question']);
    $idevent=$_POST['idevent'];

    if(empty($question) ||empty($answertype)){
        header("Location: ../feedBackFromEditor.php?addqu=empty");
        exit();
    }else{
         
            if(!preg_match("/^[a-zA-Z\s]*$/",$question))
            {
                header("Location: ../feedBackFromEditor.php?addqu=errorInvalidChar");
                exit();
            }            
          }
}   else{
        header("Location: ../feedBackFromEditor.php?addqu=success") ;
        exit();
    }
    print_r($idevent);

?>
