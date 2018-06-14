<?php 
include_once 'dbHandler.php';
?>

<html>
    <head>
        <title>Makitweb - How to Export MySQL Table data as CSV file in PHP</title>

    </head>
    <body>
        <div class="container">
            
            <form method='post' action='generate_csv.php'>
            <input type='submit' value='Export' name='Export'>
                
            <table border='1' style='border-collapse:collapse;'>
                <tr>
                    <th>Id Answer</th>
                    <th>Id Question</th>
                    <th>Answer</th>
                    <th>Id Answer Type</th>
                </tr>
            <?php 
            $query = "SELECT * FROM receivedanswers";
            $result = mysqli_query($conn,$query);
            $answer_arr=array();
            while($row=mysqli_fetch_array($result)){
                $id_a=$row['receivedAnswers_id'];
                $id_q=$row['formQuestions_id'];
                $answer=$row['answer'];
                $id_at=$row['answerType_id'];
                $answer_arr[] =array($id_a,$id_q,$answer,$id_at);
            ?>
                <tr>
                    <td><?php echo $id_a; ?></td>
                    <td><?php echo $id_q; ?></td>
                    <td><?php echo $answer; ?></td>
                    <td><?php echo $id_at; ?></td>
                </tr>
            <?php
            }
            ?>
            </table>
            <?php 
            $serailze_answer_arr = serialize($answer_arr);
            ?>
            <textarea name='export_data' style='display: none;'><?php echo $serailze_answer_arr; ?></textarea>
            </form>
        </div>
    </body>
</html>
