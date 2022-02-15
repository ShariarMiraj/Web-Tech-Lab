<?php

    $Degree="";
    $error="";

    if(isset($_REQUEST['Submit']))
    {
        if($_REQUEST['degree']==null)
        {
            $error="Please,Select Your  degree";
        }
        else
        {
            $error="Valid degree";
            $Degree=$_REQUEST['degree'];
        }
    }

?>
<html>
<head>
    <title>5.2</title>
</head>
<body>
    <fieldset>
        <legend>Degree</legend>
        <form method="POST" action="">
        <input type="checkbox" name="degree" value="SSC">SSC 
        <input type="checkbox" name="degree" value="HSC"> HSC
        <input type="checkbox" name="degree" value="BSc"> BSc 
        <hr style="width:12%;text-align:left;margin-left:2"></hr>
        <input  type="submit" name="Submit" value="Submit">
    
         <?=$error ?>
    </fieldset>
    </form>
</body>