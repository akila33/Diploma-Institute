<?php

$dbcon = mysqli_connect("127.0.0.1","root","","institute1");

if(isset($_POST['submitted'])){
    
    include('connect_mysql.php');

    if (isset($_POST['Mcode']))
    {
    $Mcode= $_POST["Mcode"];
    $Mcode = stripcslashes($Mcode);
    $Mcode = mysql_real_escape_stringmysql_real_escape_string($Mcode);
    } 
    if (isset($_POST['Title']))
    {
    $Title= $_POST["Title"];
    $Title = stripcslashes($Title);
    $Title = mysql_real_escape_stringmysql_real_escape_string($Title);
    } 
    if (isset($_POST['Credit_value']))
    {
    $Credit_value= $_POST["Credit_value"];
    $Credit_value = stripcslashes($Credit_value);
    $Credit_value = mysql_real_escape_stringmysql_real_escape_string($Credit_value);
    } 
    if (isset($_POST['Diploma']))
    {
    $Diploma = $_POST["Diploma"];
    $Diploma = stripcslashes($Diploma);
    $Diploma = mysql_real_escape_stringmysql_real_escape_string($Diploma);
    }   

}
    $sql="SELECT * FROM IT_Department_Modules";
    $result =mysqli_query($dbcon, $sql) or die(" error getting data ".mysqli_error($dbcon));

    echo "<link rel='stylesheet' type='text/css' href='table.css' />";

    echo "<table>";
    echo "<tr><th>Module Code</th><th>Title</th><th>Credit Value</th><th>Diploma</th></tr>";

    while ($row = mysqli_fetch_array($result)){
        echo '<tr><td align = "center">'.$row['Mcode'].'</td>
        <td align = "center">'.$row['Title'].'</td>
        <td align = "center">'.$row['Credit_value'].'</td>
        <td align = "center">'.$row['Diploma'].'</td></tr>';
            
    }  
    
    echo "</table>";

?>