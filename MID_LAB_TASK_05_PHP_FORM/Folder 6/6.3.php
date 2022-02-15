<?php

	$a = 1 ;
	$error="";


	if(isset($_REQUEST['Submit']))
	{	
		if($_REQUEST['Blood'.$a] == null)
		{
			 $error= "Please,Select Your Blood group ";
		}
		else
		{
			echo " Previouse  Blood group: ".($_REQUEST['Blood'.$a]);			
		}
	}
?>
<html>
<head>
    <title>6.3</title>
</head>
<body>
    <fieldset>
        <legend>Blood Group</legend>
          <form method="POST" action="">   
          	


 

            <td>
            <select name="Blood<?=$a?>" id="">
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
    </fieldset>
    </form>
</body>
</html>