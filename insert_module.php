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

<html >
<head>
<title>Add Module</title>
        <link rel="stylesheet" href="nano.css" type="text/css">
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
                                <form action = "insert_module.php" method = "post" accept-charset="UTF-8" role="form" class="form-signin">
                                <input type = "hidden" name = "submitted" value = "true" />
                                    <fieldset>
                                        <label class="panel-login">
                                            <div class="login_result"></div>
                                        </label>
                                        <input class="form-control" placeholder="Mcode" name="Mcode" id="Mcode" type="text" /><br></br>
                                        <input class="form-control" placeholder="Title" name="Title" id="Title" type="text"/><br></br>
                                        <input class="form-control" placeholder="Credit_value" name="Credit_value" id="Credit_value" type="number"/><br></br>       
                                        <input class="form-control" placeholder="Diploma" name="Diploma" id="Diploma" type="text"/><br></br>

                                        <input class="form-control" placeholder="Department" name="Department" id="Department" type="text"/><br></br>
                                        <input class="form-control" placeholder="CoordinatorId" name="CoordinatorId" id="CoordinatorId" type="text"/>
                                        <br></br>
    
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
