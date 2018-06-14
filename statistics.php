
<?php
    include_once 'Header.php';
?>

<div id="chart-1">

<?php
  include_once 'script/generateStatistics.php';
  ?>
  </div>
  <div id="chart-2">
  <?php
  include_once 'script/generateStatistics.php';
  ?>
  </div>
   <div id="chart-3">
  <?php
  include_once 'script/generateStatistics.php';
  ?>
  </div>
   <form method="get" action="script/gen_csvfile.php">
   <button type="submit" name="submit1"> Dowload as CSV</button>
   </form>
   <form method="get" action="script/gen_jsonfile.php">
   <button type="submit" name="submit"> Dowload as JSON</button>
   </form>
   

<?php
    include_once 'Footer.php';
?>