<?php

	$a = 1 ;
	$error="";


	if(isset($_REQUEST['Submit']))
	{	
		if($_REQUEST['gender'.$a] == null)
		{
			 $error= "Please,Select Your Gender ";
		}
		else
		{
			echo " Previouse Gender : ".($_REQUEST['gender'.$a]);			
		}
	}
?>
<html>
<head>
    <title>4.3</title>
</head>
<body>
    <fieldset>
        <legend>Gender </legend>
          <form method="POST" action="">   
          	


    <input type="radio" name="gender<?=$a?>" value="Male"> Male 
		<input type="radio" name="gender<?=$a?>" value="Female"> Female 
		<input type="radio" name="gender<?=$a?>" value="Other"> Other
                       
    <hr style="width:12%;text-align:left;margin-left:2"></hr>
     <input  type="submit" name="Submit" value="Submit">
    </fieldset>
    </form>
</body>
</html>
