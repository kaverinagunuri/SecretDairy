<html>
    <head>
       <?php
       include ("login.php");
       ?>
    </head>
    
    <body>
        <form method="post">
            EMAIL ID::<input type="email" name="email" value=" <?php if(isset($_POST['email'])) echo addslashes($_POST['email']); ?>"/><br/>
            PASSWORD::<input type="password" name="password" value=" <?php if(isset($_POST['password'])) echo addslashes($_POST['password']); ?>"/><br/>
            <input type="submit" value="signup" name="submit"/>
            
        </form>   
        
        
        <form method="post">
            EMAIL ID::<input type="email" name="loginemail" value=" <?php if(isset($_POST['loginemail'])) echo addslashes($_POST['loginemail']); ?>"/><br/>
            PASSWORD::<input type="password" name="loginpassword" value=" <?php if(isset($_POST['loginpassword'])) echo addslashes($_POST['loginpassword']); ?>"/><br/>
            <input type="submit" value="login" name="submit"/>
            
        </form>   
        
        
        
    </body>    
    
    
</html>