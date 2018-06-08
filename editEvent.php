<?php
    include_once 'Header.php';
    include_once 'script/dbHandler.php';

      $temp=$_POST['idevent'];

      $events='SELECT theme,location,noOfPeople,musicType,meniuType,description FROM events WHERE events_id='.$temp.';';
      $results=mysqli_query($conn,$events);

      $row=mysqli_fetch_assoc($results);
      $eveTheme=$row['theme'];
      $eveLocation=$row['location'];
      $eveNoOfPeople=$row['noOfPeople'];
      $eveMusicType=$row['musicType'];
      $eveMenuType=$row['meniuType'];
      $eveDescription=$row['description'];
      
?>
<section id="firstSectionCreateEvent">
        <div id="formDiv">
            <form action="script/edit_event.php" method="POST">

                <h1>Edit Event</h1>

                      <label><b>Theme:</b>
                        <div>
                          <?php echo '<input type="text" name="theme" value='.$eveTheme.'>' ?>
                        </div>
                      </label>

                      <label><b>Location:</b>
                        <div>
                        <?php echo '<input type="text"  name="location" value="'.$eveLocation.'">' ?>
                        </div>
                      </label>

                      <label><b>Number of people:</b>
                        <?php 
                          echo '<select name="noOfPeople" value="'.$eveNoOfPeople.'">
                              <option>25</option>
                              <option>50</option>
                              <option>75</option>
                              <option>100</option>
                              <option>150</option>
                              <option>300</option>
                          </select>'

                        ?>
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
                          <?php echo '<textarea type="text" name="description" value='.$eveDescription.'></textarea>' ?>
                        </div>
                      </label>
                     <?php
                    	echo '<button type="submit" name="submit" value="'.$_SESSION["user_identity"].'">Finalize edit</button>';
                    ?>
            </form>
        </div>
</section>

<?php
    include_once 'Footer.php';
?>
