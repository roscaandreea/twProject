<?php
	include_once 'dbHandler.php';
	include('vendor/fusioncharts.php');
    $sql="SELECT receivedAnswers_id,count(answer) as 'answers' FROM receivedanswers where answer='yes' union  SELECT receivedAnswers_id,count(answer) as 'answers' FROM receivedanswers where answer='no'";
    $result=mysqli_query($conn,$sql);
    if ($result) {
    	$arrData = array(
                  "chart" => array(
                  "caption" => "Number of answer yes/no",
                  "showValues" => "0",
                  "theme" => "zune"
                  )
               );

         $arrData["data"] = array();

          while($row = mysqli_fetch_array($result)) {
               array_push($arrData["data"], array(
                  "label" => $row["answers"],
                  "value" => $row["receivedAnswers_id"]
                  )
               );
            }
        $jsonEncodedData = json_encode($arrData);
        $lineChart = new FusionCharts("column2D", "myFirstChart" , 900, 300, "chart-1", "json", $jsonEncodedData);
        $lineChart->render();
    }

?>