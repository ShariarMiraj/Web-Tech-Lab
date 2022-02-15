<?php

	$a = 1 ;
	$error="";


	if(isset($_REQUEST['Submit']))
	{	
		if($_REQUEST['degree'.$a] == null)
		{
			 $error= "Please,Select Your degree ";
		}
		else
		{
			echo " Previouse degree: ".($_REQUEST['degree'.$a]);			
		}
	}
?>
<html>
<head>
    <title>5.3</title>
</head>
<body>
    <fieldset>
        <legend>Degree </legend>
          <form method="POST" action="">   
          	


    <input type="checkbox" name="degree<?=$a?>" value="SSC">SSC 
		<input type="checkbox" name="degree<?=$a?>" value="HSC">HSC 
		<input type="checkbox" name="degree<?=$a?>" value="BSc">BSc
                       
    <hr style="width:12%;text-align:left;margin-left:2"></hr>
     <input  type="submit" name="Submit" value="Submit">
    </fieldset>
    </form>
</body>
</html>