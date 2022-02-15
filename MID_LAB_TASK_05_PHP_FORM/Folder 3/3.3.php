<?php

	$a = 1 ;
	$error="";


	if(isset($_REQUEST['Submit']))
	{	
		if($_REQUEST['DoB'.$a] == null)
		{
			 $error= "Please Enter Your";
		}
		else
		{
			echo " Date of Birth is : ".($_REQUEST['DoB'.$a]);			
		}
	}
?>
<html>
<head>
    <title>2.3</title>
</head>
<body>
    <fieldset>
        <legend>Date of Birth</legend>
          <form method="POST" action="">   
          	<input type="date" name="DoB<?=$a?>" value="">
                       
    <hr style="width:12%;text-align:left;margin-left:2"></hr>
        <input  type="submit" name="Submit" value="Submit">
    </fieldset>
    </form>
</body>
</html>