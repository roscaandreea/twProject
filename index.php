<?php
    include_once 'Header.php';
?>

<!-- codul pentru prima sectiune -->
<section id="first-section">
     <h2>Maskedball</h2>
        <p>Welcome to a new dimension!</p>
        <a href="about.php" class="more">Read More</a>
</section>

<!-- codul pentru sectiunea 2 -->
<section id="second-section">
  <div>
    <h1>Our Mission</h1>
    <p id="content">This site aims to organize series of entertainment events such as masked balls in line with predefined themes (examples: cabaret, futurism, mythology ...)</p>
     <h3>FEATURED EVENTS</h3>
     <ul>
            <li>
               <a  href="events.php"><img  src="images/cabaret.png" alt=""></a>
            </li>
            <li>
               <a  href="events.php"><img  src="images/img6.jpg" alt=""></a>
            </li>
            <li>
               <a href="events.php"><img  src="images/futurism.jpg" alt=""></a>
            </li>
            <li>
               <a  href="events.php"><img src="images/img8.jpg" alt=""></a>
            </li>
        </ul>
  </div>
  <!-- codul pentru sectiunea 3 -->
<section id="third-section">
  <div>
    <ul>
      <li>
          <h1>STATISTICS</h1>
                <a href="statistics.php"><img src="images/statistics.jpg" alt=""><span></span></a>
      </li>
      <li>
          <h1>LATEST EVENTS</h1>
            <ul>
                <li>
                   <a href="events.php"><img src="images/img9.jpg" alt=""></a>
                   <h1>Viennese Maskedball</h1>
                   <span>FEBRUARY 15, 2018</span>
                   <a href="events.php" class="more">Read More</a>
                </li>
                <li>
                   <a href="events.php"><img src="images/futurism2.jpg" alt=""></a>
                   <h1>Futuristic Maskedball</h1>
                   <span>MARCH 3, 2018</span>
                   <a href="events.php" class="more">Read More</a>
                </li>
            </ul>
      </li>
    </ul>
 </div>
</section>
<!-- codul pentru sectiunea 4 -->
<div class="fourth-section">
  <h1>THANK YOU AND WAITING YOUR FEEDBACK!</h1>
  <img src="images/feedback.jpg" alt=" ">
 </div> 

<?php
    include_once 'Footer.php';
?>