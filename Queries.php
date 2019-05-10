<?php

if(isset($_POST['submitted'])){
    
    include('connect_mysql.php');

    

    $Mcode = $_POST['Mcode'];
    $Title = $_POST['Title'];
    $Credit_value = $_POST['Credit_value'];
    $Diploma = $_POST['Diploma'];
    $Department= $_POST['Department'];
    $CoordinatorId= $_POST['CoordinatorId'];
    $sqlinsert = "INSERT INTO module(Mcode,Title,Credit_value,Diploma,Department,CoordinatorId) VALUES ('$Mcode', '$Title', '$Credit_value','$Diploma','$Department','$CoordinatorId')";
    
    if(!mysqli_query($dbcon, $sqlinsert)){
        die('error inserting new record'.mysqli_error($dbcon));
    }
                                                                                                                               
    $newrecord = "1 record added to the database";
}

?>

<html>
<head>
<title>Queries</title>
        
</head>
        
        <body bgcolor="#DCF1EC">
            <h1>Queries</h1>
            <p>
                Query 1 :  SELECT * FROM student WHERE Address = 'Matara'; : <a href="http://localhost:8080/institute1/query1.php" target="_blank" >Click to execute</a><br><br>
                Query 2 :  UPDATE student SET StdName = 'Amal', Address = 'Ampara' WHERE StdNumber = 'S005'; : <a href="http://localhost:8080/institute1/query2.php" target="_blank">Click to execute</a><br><br>
                Query 3 :  DELETE FROM student_module WHERE StdNumber = 'S008'; : <a href="http://localhost:8080/institute1/query3.php" target="_blank" >Click to execute</a><br><br>

            </p>
            <h1>Views</h1>
            <p>
                View 1 :  Student List (AL2015) : <a href="http://localhost:8080/institute1/view1.php" target="_blank">Click to execute</a><br><br>
                View 2 :  Cordinator List : <a href="http://localhost:8080/institute1/view2.php" target="_blank">Click to execute</a><br><br>
                View 3 :  IT Department Module List : <a href="http://localhost:8080/institute1/view3.php" target="_blank">Click to execute</a><br><br>

            </p>
        </body>
        
</html>
