<?php

if(isset($_POST['submitted'])){
    
    include('connect_mysql.php');

    
    $StdNumber = $_POST['StdNumber'];
    $Mcode = $_POST['Mcode'];
    $Grade = $_POST['Grade'];
    $sqlinsert = "INSERT INTO student_module(StdNumber,Mcode,Grade) VALUES ('$StdNumber', '$Mcode', '$Grade')";
    
    if(!mysqli_query($dbcon, $sqlinsert)){
        die('error inserting new record'.mysqli_error($dbcon));
    }
                                                                                                                               
    $newrecord = "1 record added to the database";
}

?>

<html >
<head>
<title>Add Student Module</title>
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
                                <form action = "insert_student_module.php" method = "post" accept-charset="UTF-8" role="form" class="form-signin">
                                <input type = "hidden" name = "submitted" value = "true" />
                                    <fieldset>
                                        <label class="panel-login">
                                            <div class="login_result"></div>
                                        </label>
                                        <input class="form-control" placeholder="Student Number" name="StdNumber" id="StdNumber" type="text" /><br></br>
                                        <input class="form-control" placeholder="Mcode" name="Mcode" id="Mcode" type="text"/><br></br>
                                        <input class="form-control" placeholder="Grade" name="Grade" id="Grade" type="text"/><br></br>
                                      
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
