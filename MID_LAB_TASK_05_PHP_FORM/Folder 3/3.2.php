<?php

    $DoB="";
    $error="";

    if(isset($_REQUEST['Submit']))
    {
        if($_REQUEST['DoB']==null)
        {
            $error="Invalid DoB";
        }
        else
        {
            $error="Valid DoB";
            $DoB=$_REQUEST['DoB'];
        }
    }

?>
<html>
<head>
    <title>3.2</title>
</head>
<body>
    <fieldset>
        <legend>Date of Birth</legend>
        <form method="POST" action="">
            <input type="date" name="DoB" value="" /><br>
            <hr style="width:12%;text-align:left;margin-left:2"></hr>
        <input  type="submit" name="Submit" value="Submit">
    
         <?=$error ?>
    </fieldset>
    </form>
</body>
</html>