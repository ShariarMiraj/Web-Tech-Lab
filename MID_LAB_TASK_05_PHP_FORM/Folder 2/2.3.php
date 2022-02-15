<?php

	$a = 1 ;
	$error="";


	if(isset($_REQUEST['Submit']))
	{	
		if($_REQUEST['email'.$a] == null)
		{
			 $error= "Please Enter Your Valid email";
		}
		else
		{
			echo "Valid Email is : ".($_REQUEST['email'.$a]);			
		}
	}
?>
<html>
<head>
    <title>2.3</title>
</head>
<body>
    <fieldset>
        <legend>Email</legend>
          <form method="POST" action="">   
          	<input type="name" name="email<?=$a?>" value="">
                       
    <hr style="width:12%;text-align:left;margin-left:2"></hr>
        <input  type="submit" name="Submit" value="Submit">
    </fieldset>
    </form>
</body>
</html>