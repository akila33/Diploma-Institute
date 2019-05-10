<?php

if(isset($_POST['submitted'])){
    include('connect_mysql.php');

    
    $TecId = $_POST['TecId'];
    $TecName = $_POST['TecName'];
    $Qualifications = $_POST['Qualifications'];
    $Password= $_POST['Password'];
    $RepPassword= $_POST['Password'];
    


    

    


    $sqlinsert = "INSERT INTO teacher(TecId,TecName) VALUES ('$TecId', '$TecName')";
     if(!mysqli_query($dbcon, $sqlinsert)){
        die('error inserting new record'.mysqli_error($dbcon));
    }

    if (isset($_POST['CFlag'])){
        $LFlag = $_POST['CFlag'];
        mysqli_query($dbcon,"UPDATE teacher SET CFlag='1' WHERE TecId='$TecId'");
        
    }
    
    $sqlinsert1="INSERT INTO qualification(TecId,Qualifications) VALUES ('$TecId', '$Qualifications')";
    if(!mysqli_query($dbcon, $sqlinsert1)){
        die('error inserting new record'.mysqli_error($dbcon));
    }
    
    
    
    if($Password==$RepPassword)
    {
        $sql="insert into tec_login values('$TecId', '$Password')";
        if (mysqli_query($dbcon, $sql)) 
        {
            echo '<body><script>alert("Record Entered Successfully"); window.location="http://localhost:8080/institute1/insert_teacher.php"</script></body>';
        }       
        else 
        {
            echo "Error: " . $sql . "<br>" . mysqli_error($dbcon);
        }
    }
        
    else
    {
        echo '<body><script>alert("Passwords Don\'t Match. Please Try Again"); window.location="http://localhost:8080/institute1/insert_teacher.php"</script></body>';
    }
    
    

}

?>

<html >
<head>
<title>Add Teacher</title>
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
                                    <img src="icon1.jpg"" class="img-responsive" alt="Conxole Admin"/><br>
                                </div>
                            </div>
                            <div class="panel-body">
                                <form action = "insert_teacher.php" method = "post" accept-charset="UTF-8" role="form" class="form-signin">
                                <input type = "hidden" name = "submitted" value = "true" />
                                    <fieldset>
                                        <label class="panel-login">
                                            <div class="login_result"></div>
                                        </label>
                                        <input class="form-control" placeholder="Teacher Id" name="TecId" id="TecId" type="text" /><br></br>
                                        <input class="form-control" placeholder="Teacher Name" name="TecName" id="TecName" type="text"/><br></br>
                                        <input class="form-control" placeholder="Qualifications" name="Qualifications" id="Qualifications" type="text"/><br></br>
                                        <input class="form-control" placeholder="Password" name="Password" id="Password" type="password"/><br></br>
                                        <input class="form-control" placeholder="Re-Enter Password" name="RepPassword" id="RepPassword" type="password"/><br></br>
                                        Coordinator
                                        <input type="radio" name="CFlag" id="CFlag" value="CFlag" />
                                        
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

