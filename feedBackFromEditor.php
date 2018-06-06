<?php
    include_once 'Header.php';
?>


<section id="firstSectionInvitation">
    <div id="formDiv">
        <form>
                <h1>Feedback Form Creator</h1>

                <button> <a href="Feedback.php">finalizeFeedBackForm </a></button>
               
                

                <label><b>Question</b>
                    <div>
                      <textarea type="text" placeholder="Enter Question." autofocus required></textarea>
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
                    
                <button type="Add Question">Add Question</button>

                
        
        </form>
        
    </div>

    

</section>

<?php
    include_once 'Footer.php';
?>