<?php
	include_once 'dbHandler.php';
	include('vendor/fusioncharts.php');
    $sql="SELECT answer ,count(answer) as 'number' FROM receivedanswers where answer='yes' union  SELECT answer,count(answer) as 'number' FROM receivedanswers where answer='no'";
    $sql2="SELECT answer,count(answer) as 'num' FROM receivedanswers WHERE answer='1' union SELECT answer,count(answer) as 'num' FROM receivedanswers WHERE answer='3'union SELECT answer,count(answer) as 'num' FROM receivedanswers WHERE answer='4' union SELECT answer,count(answer) as 'num' FROM receivedanswers WHERE answer='5'";
    $sql3="SELECT meniuType,count(meniuType) as 'num' FROM meniutype where meniuType='suedez' union SELECT meniuType,count(meniuType) as 'num' FROM meniutype where meniuType='vegetarian'";
    $result=mysqli_query($conn,$sql);
    $result2=mysqli_query($conn,$sql2);
    $result3=mysqli_query($conn,$sql2);


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
                  "caption" => "Number of answer 1...5",
                  "showValues" => "0",
                  "theme" => "zune"
                  )
               );
           }

        if ($result3) {
           $arrData3 = array(
                  "chart" => array(
                  "caption" => "Number of meniuType",
                  "showValues" => "0",
                  "theme" => "zune"
                  )
               );
           }

         $arrData["data"] = array();
         $arrData2["data"]=array();
         $arrData3["data"]=array();

        while($row = mysqli_fetch_array($result)) {
               array_push($arrData["data"], array(
                  "label" => $row["answer"],
                  "value" => $row["number"]
                  )
               );
            }


          while($row = mysqli_fetch_array($result2)) {
               array_push($arrData2["data"], array(
                  "label" => $row["answer"],
                  "value" => $row["num"]
                  )
               );
            }

           while($row = mysqli_fetch_array($result3)) {
               array_push($arrData3["data"], array(
                  "label" => $row["meniuType"],
                  "value" => $row["num"]
                  )
               );
            }
        $jsonEncodedData = json_encode($arrData);
        $jsonEncodedData2 = json_encode($arrData2);
        $jsonEncodedData3 = json_encode($arrData3);

       $lineChart = new FusionCharts("column2D", "myFirstChart" , 900, 300, "chart-1", "json", $jsonEncodedData);
       $Chart2 = new FusionCharts("pie2D", "Chart" ,900, 300, "chart-2", "json", $jsonEncodedData2);
       $Chart3 = new FusionCharts("area2D", "Chart3" ,900, 300, "chart-3", "json", $jsonEncodedData2);

       $lineChart->render();
        $Chart2->render();
        $Chart3->render();

  

?>