<?php
	function get_encoderdata(){
		include_once "dbHandler.php";
		$sql= "SELECT * FROM receivedanswers";
        $result = mysqli_query($conn,$sql);
        $answer_arr=array();
        while($row=mysqli_fetch_array($result)){
        	$answer_arr[]=array(
        		'id_a' => $row['receivedAnswers_id'],
        		'id_q' => $row['formQuestions_id'],
        		'answer' => $row['answer'],
        		'id_at' =>$row['answerType_id']

        	);
        }
        	return json_encode($answer_arr);
	}
	$file='data' . '.json';
	if(file_put_contents($file,get_encoderdata())){
		echo $file.'file created';
	}
	else{
		echo 'The file can not be created';
	}
?>