<?php
    include_once 'Header.php';
?>

<section id="firstSectionInvitation">
    <div id="formDiv">
        <div id="title_c">
            <h1>Get in touch with us</h1>
        </div>
    
        <p>Hosting a good party is almost all about preparation, so if you get everything ready ahead of time you can be assured that you and your guests will have a good time all night. Our team are here to help!</p>
        
        <p>Feel free to contact us by email on masked_ball@gmail.com or telephone on 0764 856 321.</p>

        <p>Or leave us a message right here:</p>
                    
        <form  method="POST" action="script/contactUs.php" >

            <label for="fname">First Name</label>
            <input type="text" id="fname" name="fname" placeholder="Your name..">
  
            <label for="lname">Last Name</label>
            <input type="text" id="lname" name="lname" placeholder="Your last name..">
  
            <label for="country">Country</label>
            <select id="country" name="country">
                <option value="australia">Australia</option>
                <option value="canada">Canada</option>
                <option value="usa">USA</option>
            </select>
  
            <label for="subject">Subject</label>
            <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
  
            <button type="submit" name="submit"> Send</button>
  
        </form>
            
    </div>
</section>

<h3 id="likeUsOnFaceBook">Have you found and liked us on Facebook yet? What are you waiting for? <a href="https://ro-ro.facebook.com/" target="_blank">We are right here!</a></h3>

<?php
    include_once 'Footer.php';
?>
