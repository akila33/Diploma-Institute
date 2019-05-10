<?php

if(isset($_POST['submitted'])){

    include('connect_mysql.php');

    if (isset($_POST['TecIdx']))
    {
    $TecIdx= $_POST["TecIdx"];
    $TecIdx = stripcslashes($TecIdx);
    
    } 
    if (isset($_POST['Passwordx']))
    {
    $Passwordx= $_POST["Passwordx"];
    $Passwordx = stripcslashes($Passwordx);
    }  
    
    
}   

    $sql="SELECT tec_login.TecId, teacher.TecName, teacher.LFlag, teacher.CFlag
    FROM tec_login
    INNER JOIN teacher ON tec_login.TecId=teacher.TecId
    WHERE tec_login.TecId='$TecIdx' and tec_login.Password='$Passwordx'";

    $result =mysqli_query($dbcon, $sql) or die(" error getting data".mysqli_error($dbcon));
    
    echo "</table>";

    echo "<link rel='stylesheet' type='text/css' href='table.css' />";

    echo "<table>";
    echo "<tr><th>Teacher Id</th><th>Teacher Name</th><th>LFlag</th><th>CFlag</th></tr>";

    while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
        echo '<tr><td align = "center">'.$row['TecId'].'</td><td align = "center">'.$row['TecName'].'</td><td align = "center">'.$row['LFlag'].'</td><td align = "center">'.$row['CFlag'].'</td></tr>';
            
    }  
    
    echo "</table>";

?>
