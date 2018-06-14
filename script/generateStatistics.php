<?php
	include_once 'dbHandler.php';
	include('vendor/fusioncharts.php');
    $sql="SELECT answer ,count(answer) as 'number' FROM receivedanswers where answer='yes' union  SELECT answer,count(answer) as 'number' FROM receivedanswers where answer='no'";
    $sql2="SELECT meniuType,count(meniuType) as 'num' FROM meniutype WHERE meniuType='vegetarian' union SELECT meniuType,count(meniuType) as 'num' FROM meniutype WHERE meniuType=' not vegetarian'";
    $result=mysqli_query($conn,$sql);
    $result2=mysqli_query($conn,$sql2);

    if ($result) {
    	$arrData = array(
                  "chart" => array(
                  "caption" => "Number of answer yes/no",
                  "showValues" => "0",
                  "theme" => "zune"
                  )
               );
           }
      if ($result2) {
           $arrData2 = array(
                  "chart" => array(
                  "caption" => "Number of meniuType",
                  "showValues" => "0",
                  "theme" => "zune"
                  )
               );
           }

         $arrData["data"] = array();
         $arrData2["data"]=array();

        while($row = mysqli_fetch_array($result)) {
               array_push($arrData["data"], array(
                  "label" => $row["answer"],
                  "value" => $row["number"]
                  )
               );
            }


          while($row = mysqli_fetch_array($result2)) {
               array_push($arrData2["data"], array(
                  "label" => $row["meniuType"],
                  "value" => $row["num"]
                  )
               );
            }
        $jsonEncodedData = json_encode($arrData);
        $jsonEncodedData2 = json_encode($arrData2);

       $lineChart = new FusionCharts("column2D", "myFirstChart" , 900, 300, "chart-1", "json", $jsonEncodedData);
       $Chart2 = new FusionCharts("column2D", "Chart" ,900, 300, "chart-2", "json", $jsonEncodedData2);

       $lineChart->render();
        $Chart2->render();

  

?>