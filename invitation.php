<?php
    include_once 'Header.php';
?>
<section id="firstSectionInvitation">
    <div id="formDiv">
        <form action="script/invite.php" method="POST">
                <h1>Invitation</h1>

                <label><b>To:</b>
                  <div>
                    <input name="mail" placeholder="name@domain.com" required="" type="email"> 
                  </div>
                </label>
          
                <label><b>From:</b>
                    <div>
                      <input type="text" placeholder="Enter Name" name="name" autofocus required>
                    </div>
                  </label>
  
				<label><b>Subject</b>
                    <div>
                      <input type="text" name="subject" placeholder="Enter Subject" autofocus required></textarea>
                    </div>
                </label>
				  
                <label><b>Message</b>
                    <div>
                      <textarea type="text" name="message" placeholder="Enter Message" autofocus required></textarea>
                    </div>
                </label>

                  <button type="submit" name="submit">Submit</button>
        
        </form>
    </div>
</section>

<?php
    include_once 'Footer.php';
?>