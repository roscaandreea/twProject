<?php
    include_once 'Header.php';
?>
<section id="firstSectionCreateEvent">
        <div id="formDiv">
            <form action="script/create_event.php" method="POST">

                <h1>Create Event</h1>

                    <label><b>Event Name:</b>
                        <div>
                          <input type="text" placeholder="Enter event name" name="nameEvent" autofocus required>
                        </div>
                      </label>

                      <label><b>Theme:</b>
                        <div>
                          <input type="text" placeholder="theme" name="theme" autofocus required>
                        </div>
                      </label>

                      <label><b>Location:</b>
                        <div>
                          <input type="text" placeholder="location" name="location" autofocus required>
                        </div>
                      </label>

                      <label><b>Number of people:</b>
                        <select name="noOfPeople">
                              <option>25</option>
                              <option>50</option>
                              <option>75</option>
                              <option>100</option>
                              <option>150</option>
                              <option>300</option>
                          </select>
                      </label>

                      <label><b>Music:</b>
                        <select name="musicType">
                        	<option>None</option>
                             <?php
                             	include_once 'script/music.php';
                             ?>
                          </select>
                      </label>

                      <label><b>Menu types:</b>
                        <select name="meniuType">
                        	<option>None</option>
                               <?php
                             	include_once 'script/meniu.php';
                             ?>
                          </select>
                      </label>

                      <label><b>Description:</b>
                        <div>
                          <textarea type="text" placeholder="Describe event" name="description" autofocus required></textarea>
                        </div>
                      </label>
                     <?php
                    	echo '<button type="submit" name="submit" value="'.$_SESSION["user_identity"].'">Create event</button>';
                    ?>
            </form>
        </div>
</section>

<?php
    include_once 'Footer.php';
?>
