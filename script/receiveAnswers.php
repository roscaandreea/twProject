<?php

    if(isset($_POST['submit'])){
        
        include_once 'dbHandler.php';
        $events="SELECT formQuestions_id, questionType_id FROM formquestions WHERE events_id='".$_POST['currentEvent']."'";
        $results=mysqli_query($conn,$events);
        $temp=0;
        while($row=mysqli_fetch_assoc($results)){
            $question_id=$row['formQuestions_id'];
            $question_type=$row['questionType_id'];
            $temp=mysqli_real_escape_string($conn,$_POST[$question_id]);

            $sql="INSERT INTO receivedanswers (formQuestions_id,answer,answerType_id) VALUES ($question_id,'".$temp."',$question_type);";
            mysqli_query($conn,$sql);
            $temp=$temp+$question_id;
            }
            
        header("Location: ../Feedback.php?".$_POST['currentEvent']) ;
        
    }else{
        header("Location: ../Feedback.php?answer=error");
        exit();
    }

?>