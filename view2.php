<?php

$dbcon = mysqli_connect("127.0.0.1","root","","institute1");

if(isset($_POST['submitted'])){

    include('connect_mysql.php');

    if (isset($_POST['TecId']))
    {
    $TecId= $_POST["TecId"];
    $TecId = stripcslashes($TecId);
    $TecId = mysql_real_escape_stringmysql_real_escape_string($TecId);
    } 
    if (isset($_POST['TecName']))
    {
    $TecName= $_POST["TecName"];
    $TecName = stripcslashes($TecName);
    $TecName = mysql_real_escape_stringmysql_real_escape_string($TecName);
    } 
    
    
    
}   
  
    

    $sql="SELECT * FROM Coordinator_List";
    $result =mysqli_query($dbcon, $sql) or die(" error getting data ".mysqli_error($dbcon));

    echo "<link rel='stylesheet' type='text/css' href='table.css' />";

    echo "<table>";
    echo "<tr><th>Teacher Id</th><th>Teacher Name</th></tr>";

    while ($row = mysqli_fetch_array($result)){
        echo '<tr><td align = "center">'.$row['TecId'].'</td><td align = "center">'.$row['TecName'].'</td></tr>';
            
    }  
    
    echo "</table>";

?>