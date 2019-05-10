<!DOCTYPE html>
<html>
<head>
<title>Get Student</title>
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
                                <form action = "process2.php" method = "post" accept-charset="UTF-8" role="form" class="form-signin">
                                <input type = "hidden" name = "submitted" value = "true" />
                                    <fieldset>
                                        <label class="panel-login">
                                            <div class="login_result"></div>
                                        </label>
                                        <input class="form-control" placeholder="Student Number" name="StdNumberx" id="StdNumberx" type="text" /><br></br>                                  
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