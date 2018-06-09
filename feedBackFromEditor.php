<?php
    include_once 'Header.php';
?>


<section id="firstSectionInvitation">
    <div id="formDiv">
       <form class="feedback" method="POST" action="script/feedbackEditor.php">
                <h1>Feedback Form Creator</h1>
               
                

                <label><b>Question</b>
                    <div>
                      <textarea type="text" name="question" placeholder="Enter Question." autofocus required></textarea>
                    </div>
                  </label>

                  <label><b>Answer Type</b>
                <select >
                   
                    <option>Add a question that should be answered as a text .</option>
                    <option>Add a question that should be answered by choosing from multiple choices.</option>
                    <option>Add a question that should be answered with yes or no.</option>
                    <option>Add a question that should be answered on a scale from 1 to 5.</option>
                </select>
            </label>
                    
                <button type="Add Question" value="submit">Add Question</button>




           <?php

            if(!isset($_GET['addqu'])){
                exit();
            }else{
                $submitCheck=$_GET['addqu'];

                if($submitCheck == "empty"){
                    echo "You did not fill all the fields!";
                }else if($submitCheck=="errorInvalidChar"){
                    echo "You have used invalid characters!";
                    exit();
                }else if($submitCheck=="succes"){
                    echo "Your form was successfully submitted!";
                }
            }
            
            ?>

                
        
        </form>
        
    </div>

    

</section>

<?php
    include_once 'Footer.php';
?>