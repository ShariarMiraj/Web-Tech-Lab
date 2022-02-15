<?php

	$a = 1 ;
	$error="";


	if(isset($_REQUEST['Submit']))
	{	
		if($_REQUEST['name'.$a] == null)
		{
			 $error= " Enter Your name";
		}
		else
		{
			echo "Name is : ".($_REQUEST['name'.$a]);			
		}
	}
?>
<html>
<head>
    <title>1.3</title>
</head>
<body>
  <fieldset>
    <legend>Name</legend>
      <form method="POST" action="">


   <input type="name" name="name<?=$a?>" value="">
   <hr style="width:12%;text-align:left;margin-left:2"></hr>
    <input  type="submit" name="Submit" value="Submit">
    </fieldset>
    </form>
</body>
</html>