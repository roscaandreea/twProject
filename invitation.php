<?php
    include_once 'Header.php';
?>

<section id="firstSectionInvitation">
    <div id="formDiv">
        <form>
                <h1>Invitation</h1>

                <label><b>To:</b>
                  <div>
                    <input type="text" placeholder="Enter Name" name="name" autofocus required>
                  </div>
                </label>
          
                <label><b>From:</b>
                    <div>
                      <input type="text" placeholder="Enter Name" name="name" autofocus required>
                    </div>
                  </label>

                  
                <label><b>Email Receiver</b> 
                    <div > 
                        <input class="usrimput" placeholder="name@domain.com" required="" type="email"> 
                    </div>
                </label>     
                    
          
                  <label><b>Messege</b>
                    <div>
                      <textarea type="text" placeholder="Enter Messege" autofocus required></textarea>
                    </div>
                  </label>

                  <button type="submit">Submit</button>
        
        </form>
    </div>
</section>

<?php
    include_once 'Footer.php';
?>