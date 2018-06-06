<?php
    include_once 'Header.php';
?>

<section id="firstSectionFeedBack">
        <div id="formDiv">
            <form>

                <h1>FeedBack</h1>

 

                    <label  >Your name:</label>
                          <input type="text" name="name"  placeholder="Enter your name" ><br><br><br><br>
                    
                    <label  >Event Name:</label>
                       <input type="text" name="name"  placeholder="Enter the name of the event that you participated in" autofocus required><br><br><br><br>
                    
                        
					  <label  >Please rate the following aspects of the event (from 1 being very unsatisfactory to 5 being very satisfactory):</label>
							<label  >Date and time</label>
								<select>
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                              <option>5</option>
                          </select><br><br><br><br>
						  
							<label  >Location</label>	
								<select>
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                              <option>5</option>
                          </select><br><br><br><br>
						  
							<label  >Food and beverages</label>	
								<select>
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                              <option>5</option>
                          </select><br><br><br><br>
						  
						    <label	>Music</label>
								<select>
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                              <option>5</option>
                          </select><br><br><br><br>
						  
							<label	>Theme</label>
								<select>
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                              <option>5</option>
                          </select><br><br><br><br>
						  
						<label	>What did you enjoy the most about this event?</label>
                          <input type="text" name="name" ><br><br><br><br>
						  
						<label	>What did you enjoy the least about this event?</label>
                          <input type="text" name="name" ><br><br><br><br>
						  
						<label	>How do you think it could have been improved?</label>
                          <input type="text" name="name" ><br><br><br><br>
						  
						<label	>Was this the first time you attended an event organized by us?</label>
                           <input type="radio" name="location" value="yes"> Yes<br>
                           <input type="radio" name="location"  value="no"> No<br><br><br><br>
						   
						<label	>Based on this experience, how likely are you to attend future events (from 1 being very unlikely to 5 being very likely)?</label>
							<select>
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                              <option>5</option>
                          </select><br><br><br><br>
						  
						<label	>How likely are you to recommend our events to a friend or a colleague (from 1 being very unlikely to 5 being very likely)?</label>
							<select>
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                              <option>5</option>
                          </select><br><br><br><br>
						  
                      
                      <label>Overall, how would you rate the event (from 1 being very unsatisfactory to 5 being very satisfactory)?</label>
                        <select>
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                              <option>5</option>
                          </select><br><br><br><br>
                  

                      <label>Description:</label>
                      
                          <input type="text" placeholder="Describe event from your point of view"><br><br><br><br>
                      

                   
                   <button type="submit"  value="Submit">Submit</button><br><br><br>
                   <button type="reset" value="Reset">Reset</button>
            </form>
        </div>
</section>

<?php
    include_once 'Footer.php';
?>
