<?php

    $gender="";
    $error="";

    if(isset($_REQUEST['Submit']))
    {
        if($_REQUEST['gender']==null)
        {
            $error="Invalid Gender";
        }
        else
        {
            $error="Valid Gender";
            $DoB=$_REQUEST['gender'];
        }
    }

?>
<html>
<head>
    <title>4.2</title>
</head>
<body>
    <fieldset>
        <legend>Gender</legend>
        <form method="POST" action="">
        <input type="radio" name="gender" value="Male"> Male 
        <input type="radio" name="gender" value="Female"> Female 
        <input type="radio" name="gender" value="Other"> Other 
        <hr style="width:12%;text-align:left;margin-left:2"></hr>
        <input  type="submit" name="Submit" value="Submit">
    
         <?=$error ?>
    </fieldset>
    </form>
</body>
</html>