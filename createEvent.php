<?php
    include_once 'Header.php';
?>

<section id="firstSectionCreateEvent">
        <div id="formDiv">
            <form>

                <h1>Create Event</h1>

                    <label><b>Event Name:</b>
                        <div>
                          <input type="text" placeholder="Enter event name" name="name" autofocus required>
                        </div>
                      </label>

                      <label><b>Theme:</b>
                        <div>
                          <input type="text" placeholder="Enter theme" autofocus required>
                        </div>
                      </label>

                      <label><b>Location:</b>
                        <div>
                          <input type="text" placeholder="Enter location" autofocus required>
                        </div>
                      </label>

                      <label><b>Number of people:</b>
                        <select>
                              <option>25</option>
                              <option>50</option>
                              <option>75</option>
                              <option>100</option>
                              <option>150</option>
                              <option>300</option>
                          </select>
                      </label>

                      <label><b>Music:</b>
                        <select>
                              <option>Alternative Music</option>
                              <option>Blues</option>
                              <option>Classical Music</option>
                              <option>Jazz</option>
                          </select>
                      </label>

                      <label><b>Menu types:</b>
                        <select>
                              <option>Traditional</option>
                              <option>Italian</option>
                              <option>German</option>
                              <option>Grill</option>
                              <option>Vegetarian</option>
                              <option>Vegan</option>
                          </select>
                      </label>

                      <label><b>Description:</b>
                        <div>
                          <textarea type="text" placeholder="Describe event" autofocus required></textarea>
                        </div>
                      </label>
      
                    <button type="submit">Create event</button>
            </form>
        </div>
</section>

<?php
    include_once 'Footer.php';
?>
