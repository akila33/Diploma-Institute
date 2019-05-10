<?php

	$dbcon = mysqli_connect("127.0.0.1","root","","institute1");

	$sql1="CREATE VIEW AL2015_Student_List AS
        SELECT StdNumber, StdName 
        FROM student
        WHERE Past_Performance = 'AL2015'";
    $result1 =mysqli_query($dbcon, $sql1) or die(" error getting data ".mysqli_error($dbcon));



    $sql1="CREATE VIEW Coordinator_List AS
        SELECT TecId, TecName 
        FROM teacher
        WHERE CFlag = '1'";
    $result1 =mysqli_query($dbcon, $sql1) or die(" error getting data ".mysqli_error($dbcon));



    $sql1="CREATE VIEW IT_Department_Modules AS
        SELECT Mcode,Title,Credit_value,Diploma
        FROM module
        WHERE Department = 'IT'";
    $result1 =mysqli_query($dbcon, $sql1) or die(" error getting data ".mysqli_error($dbcon));

?>