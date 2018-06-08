<?php
    include_once 'Header.php';
?>


<section id="firstSectionEventManager">
        <div id="managerDiv">
           <h1>Your events:</h1>

           <div class="eventsTable"> 

           <table style="width:100%" id="tableManageEvents">
           <?php
              include_once 'script/manageEvents.php';
            
            ?>
            <td id="cellEveManStyle">Create New Event 
            <form action="createEvent.php" method="POST">
              <button type="submit" value=""> <img  id=addIcons src="images/plus-big-512.png" alt=""></button>
            </form>
              </td>
            
          </table> 
          </div>
          
        </div>
</section>

<?php
    include_once 'Footer.php';

        
?>
