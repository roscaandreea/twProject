<section id="firstSectionInvitation">
    <div id="formDiv">

<?php
    $currentEv=16;
    include_once 'Header.php';
    include_once 'script/dbHandler.php';
    //$temp=$_POST['idevent'];
    $events="SELECT formQuestions_id,question, questionType_id FROM formquestions WHERE events_id=".$currentEv;
    $results=mysqli_query($conn,$events);
    $resultCheck=mysqli_num_rows($results);
    if($resultCheck>0){
      echo'<form method="POST" action="script/receiveAnswers.php">
      
      <input type="hidden" name="currentEvent" value='.$currentEv.' ></input>
      
      ';
      
        while($row=mysqli_fetch_assoc($results)){
            $question_id=$row['formQuestions_id'];
            $question=$row['question'];
            $question_type=$row['questionType_id'];
           // print_r($row['questionType_id']);
            if($question_type==1)
            {
              echo '<h4 id="question">'.$question.'
              <div name='.$question_id.'>            
              <input type="text" name="'.$question_id.'"  placeholder="Enter your response" >
              </div>
              </h4>';
            }else 
                  if($question_type==2)
                  {
                    echo '<h4 id="question">'.$question.'
                      <div name='.$question_id.'> 
                        <br>
                        <input type="radio" name='.$question_id.' value="yes"> Yes<br>
                        <input type="radio" name='.$question_id.'  value="no"> No
                      </div>
                      </h4>'
                      ;
                  }else
                  if($question_type==3)
                  {
                    echo '<h4 id="question">'.$question.'
                      
                    <div name='.$question_id.'>
                        <select name='.$question_id.'>
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                              <option>5</option>
                        </select>
                      </div>
                      </h4>';
                  }

             
    }

    echo '<button type="submit" name="submit">Finalize Questionaire</button></form>';
  }
?>
</div>
</section>
