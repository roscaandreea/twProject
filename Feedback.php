<section id="firstSectionInvitation">
    <div id="formDiv">

<?php
    include_once 'Header.php';
    include_once 'script/dbHandler.php';
    //$temp=$_POST['idevent'];
    $events="SELECT formQuestions_id,question, questionType_id FROM formquestions WHERE events_id=17";
    $results=mysqli_query($conn,$events);
    $resultCheck=mysqli_num_rows($results);
    if($resultCheck>0){
        while($row=mysqli_fetch_assoc($results)){
            $question_id=$row['formQuestions_id'];
            $question=$row['question'];
            $question_type=$row['questionType_id'];
           // print_r($row['questionType_id']);
            if($question_type==1)
            {
              
              echo '<td id="question">'.$question.'
             <form>
             <br>                
              <input type="text" name="response"  placeholder="Enter your response" ><br><br><br><br>
              </form>
              </td>';
               
            }else 
                  if($question_type==2)
                  {
                    echo '<td id="question">'.$question.'
                      <form action="">
                      <br>
                       <input type="radio" name="Yes/No" value="yes"> Yes<br>
                       <input type="radio" name="Yes/No"  value="no"> No
               
                      </form>
                      </td>';
                  }else
                  if($question_type==3)
                  {
                    echo '<td id="question">'.$question.'
                      <form>
                      <br>
                        <select>
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                              <option>5</option>
                        </select><br><br><br><br>
               
                      </form>
                      </td>';
                  }

             
    }}
?>
</div>
</section>
