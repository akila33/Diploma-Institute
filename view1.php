<?php

$dbcon = mysqli_connect("127.0.0.1","root","","institute1");

if(isset($_POST['submitted'])){

    include('connect_mysql.php');
    /*include('insert_data1.php');*/

    if (isset($_POST['StdNumber']))
    {
    $StdNumber= $_POST["StdNumber"];
    $StdNumber = stripcslashes($StdNumber);
    $StdNumber = mysql_real_escape_stringmysql_real_escape_string($StdNumber);
    } 
    if (isset($_POST['StdName']))
    {
    $StdName= $_POST["StdName"];
    $StdName = stripcslashes($StdName);
    $StdName = mysql_real_escape_stringmysql_real_escape_string($StdName);
    } 
    if (isset($_POST['Address']))
    {
    $Address= $_POST["Address"];
    $Address = stripcslashes($Address);
    $Address = mysql_real_escape_string($Address);
    } 
    if (isset($_POST['Past_Performance']))
    {
    $Past_Performance= $_POST["Past_Performance"];
    $Past_Performance = stripcslashes($Past_Performance);
    $Past_Performance = mysql_real_escape_string($Past_Performance);
    } 
    if (isset($_POST['Password']))
    {
    $Password= $_POST["Password"];
    $Password = stripcslashes($Password);
    $Password = mysql_real_escape_string($Password);
    } 

    if (isset($_POST['StdNumberx']))
    {
    $StdNumberx= $_POST["StdNumberx"];
    $StdNumberx = stripcslashes($StdNumberx);
    
    } 
    if (isset($_POST['Passwordx']))
    {
    $Passwordx= $_POST["Passwordx"];
    $Passwordx = stripcslashes($Passwordx);
    
    } 
    
    
}   
  
    

    $sql="SELECT * FROM AL2015_Student_List";
    $result =mysqli_query($dbcon, $sql) or die(" error getting data ".mysqli_error($dbcon));

    echo "<link rel='stylesheet' type='text/css' href='table.css' />";

    echo "<table>";
    echo "<tr><th>StdNumber</th><th>StdName</th></tr>";

    while ($row = mysqli_fetch_array($result)){
        echo '<tr><td align = "center">'.$row['StdNumber'].'</td><td align = "center">'.$row['StdName'].'</td></tr>';
            
    }  
    
    echo "</table>";

?>
