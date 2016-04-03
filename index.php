
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>SECRET DAIRY</title>

       
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="styles.css" rel="stylesheet">
         <?php
       include ("login.php");
       ?>
    </head>
    <body>
        <div class="navbar navbar-default">

            <div class="container">

                <div class="navbar-header">

                    <a href="" class="navbar-brand">Secert Dairy</a>

                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target=".navbar-collapse">

                        <span class="sr-only">Toggle navigation</span>

                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>


                    </button>

                </div>

                <div class="collapse navbar-collapse">

                   
                    <form class="navbar-form navbar-right" method="post">
                        <div class="form-group">
                            <input type="email" name="loginemail" class="form-control" placeholder="EmailId" value="<?php if(isset($_POST['loginemail'])) echo addslashes($_POST['loginemail']); ?>"/>
                        </div>
                        <div class="form-group">
                            <input type="password" name="loginpassword" class="form-control" placeholder="password" value="<?php if(isset($_POST['loginpassword'])) echo addslashes($_POST['loginpassword']); ?>"/>
                        </div>
                        <input type="submit" class="btn btn-success" name="submit" value="login">
                    </form>
                </div>
            </div>

        </div>
        <div class="container contentContainer" id="topContainer">

            <div class="row center" id="content">
                <div class="col-md-6 col-md-offset-3 center">
                     <h1>Secert Dairy</h1>
                    <p class="lead center">With You wherever you go!</p>
                    <?php
                    if($error)
                    {
                        echo '<div class="alert alert-danger">'.addslashes($error).'</div>';
                    }
                    if($msg)
                    {
                        echo '<div class="alert alert-success">'.addslashes($msg).'</div>';
                    }
                    
                    
                    
                    ?>
                    <label class="center "> Interested Sign up here!</label>
                    <form class="marginTop " method="post">
                        <div class="form-group">
                        <label for="email">Email Id::
                        </label>
                        <input type="email" name="email" class="form-control" value="<?php if(isset($_POST['email'])) echo addslashes($_POST['email']); ?>"/><br/>
                        </div>
                        <div class="form-group">
                        <label for="password">Password::
                        </label><input type="password" name="password" class="form-control" value="<?php if(isset($_POST['password'])) echo addslashes($_POST['password']); ?>"/><br/>
                        </div>
                        <input type="submit" name="submit" value="submit" class="btn btn-success" />
                    </form>


             

            </div>
        </div>
       
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
        <script>

            $(".contentContainer").css("min-height", $(window).height());
        </script>
    </body>
</html>
