<?php

if(isset($_POST['submitted'])){
    
    include('connect_mysql.php');

    

    $StdNumber = $_POST['StdNumber'];
    $StdName = $_POST['StdName'];
    $Address = $_POST['Address'];
    $Past_Performance = $_POST['Past_Performance'];
    $Password= $_POST['Password'];
    $RepPassword= $_POST['RepPassword'];
    $sqlinsert = "INSERT INTO student(StdNumber,StdName,Address,Past_Performance) VALUES ('$StdNumber', '$StdName', '$Address', '$Past_Performance')";

    
    


    if($Password==$RepPassword)
    {
        if(!mysqli_query($dbcon, $sqlinsert)){
        die(' error inserting new record'.mysqli_error($dbcon));
        }
                                                                                                                               
        



        $sql="insert into student_login values('$StdNumber', '$Password')";
        if (mysqli_query($dbcon, $sql)) 
        {
            echo '<body><script>alert("Record Entered Successfully"); window.location="http://localhost:8080/institute1/insert_data1.php"</script></body>';
        }       
        else 
        {
            echo "Error: " . $sql . "<br>" . mysqli_error($dbcon);
        }
        $newrecord = "1 record added to the database";
    }
        
    else
    {
        echo '<body><script>alert("Passwords Don\'t Match. Please Try Again"); window.location="http://localhost:8080/institute1/insert_data1.php"</script></body>';
    }
}

?>

<html >
<head>
<title>Add Student</title>
        <link rel="stylesheet" href="nano.css">
</head>
        <script src="http://mymaplist.com/js/vendor/TweenLite.min.js"></script>
        <body>
            <div class="container">
                <div class="row vertical-offset-100">
                    <div class="col-md-4 col-md-offset-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">                                
                                <div class="row-fluid user-row">
                                    <img src="icon1.jpg" class="img-responsive" alt="Conxole Admin"/><br>
                                </div>
                            </div>
                            <div class="panel-body">
                                <form action = "insert_data1.php" method = "post" accept-charset="UTF-8" role="form" class="form-signin">
                                <input type = "hidden" name = "submitted" value = "true" />
                                    <fieldset>
                                        <label class="panel-login">
                                            <div class="login_result"></div>
                                        </label>
                                        <input class="form-control" placeholder="Student Number" name="StdNumber" id="StdNumber" type="text" /><br></br>
                                        <input class="form-control" placeholder="Student Name" name="StdName" id="StdName" type="text"/><br></br>
                                        <input class="form-control" placeholder="Address" name="Address" id="Address" type="text"/><br></br>
                                        <input class="form-control" placeholder="Past Performance" name="Past_Performance" id="Past_Performance" type="text"/><br></br>
                                        <input class="form-control" placeholder="Password" name="Password" id="Password" type="password"/><br></br>
                                        <input class="form-control" placeholder="Re-Enter Password" name="RepPassword" id="RepPassword" type="password"/><br></br>
                                        
                                        <button type="submit" value="submit" class="button"/>Submit Entry</button>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </body>
            </div>
</html>
