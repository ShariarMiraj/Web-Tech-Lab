<?php

    $Email="";
    $error="";

    if(isset($_REQUEST['Submit']))
    {
        if($_REQUEST['Email']==null)
        {
            $error="Invalid Email";
        }
        else{
            $error="Valid Email";
            $Email=$_REQUEST['Email'];
        }
    }

?>



<html>
<head>
    <title>2.2</title>
</head>
<body>
    <fieldset>
        <legend>Email</legend>
          <form method="POST" action="">   
            <input type="email" name="Email" value="">            
    <hr style="width:12%;text-align:left;margin-left:2"></hr>
        <input  type="submit" name="Submit" value="Submit">
    
         <?=$error ?>
    </fieldset>
    </form>
</body>
</html>