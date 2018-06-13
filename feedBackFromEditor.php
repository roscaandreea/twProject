<?php
    include_once 'Header.php';
    include_once 'script/dbHandler.php';
    $temp=$_POST['idevent'];
      
?>


<section id="firstSectionInvitation">
    <div id="formDiv">
       <form   action="script/feedbackEditor.php" method="POST">



                <h1>Feedback Form Creator</h1>
               
                

                <label><b>Question</b>
                    <div>
                      <textarea type="text" name="question" placeholder="Enter Question." autofocus required></textarea>
                    </div>
                  </label>

                  <label><b>Answer Type</b>
                  <?php
                    echo '<select name="typeanswer">
                    <option value="1">Add a question that should be answered as a text.</option>
                    <option value="2">Add a question that should be answered by choosing from multiple choices.</option>
                    <option value="3">Add a question that should be answered with yes or no.</option>
                    <option value="4">Add a question that should be answered on a scale from 1 to 5.</option>
                    </select>'
                  ?>
                  </label>       
               
                <?php   
                echo '<button type="Add Question" name="submit" value="'.$temp.'">Add Question</button>';             
                ?>
        
        </form>
        
    </div>

    

</section>

<?php
    include_once 'Footer.php';
   // print_r($temp);
?>