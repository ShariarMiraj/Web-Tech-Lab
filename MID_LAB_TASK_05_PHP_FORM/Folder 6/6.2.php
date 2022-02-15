<?php

    $ou="";

    if(isset($_REQUEST['Submit']))
    {
        if($_REQUEST['Blood']==null)
        {
            $error="Please,Select Your Blood  group";
        }
        else
        {
            $ou="Valid Blood group";
            
        }
    }

?>
<html>
<head>
    <title>6.2</title>
</head>
<body>
    <fieldset>
        <legend>Blood Group</legend>
        <form method="POST" action="">
            
            <td>
            <select name="Blood" id="">
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="B+">B+</option>
            <option value="B-">B-</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
            </select>
            </td>
        
        <hr style="width:12%;text-align:left;margin-left:2"></hr>
        <input  type="submit" name="Submit" value="Submit">
    
         <?=$ou ?>
    </fieldset>
    </form>
</body>