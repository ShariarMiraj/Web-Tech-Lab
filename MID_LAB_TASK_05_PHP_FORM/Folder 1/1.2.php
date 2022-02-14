<?php 

    $name = "";
    $error="";

    if(isset($_REQUEST['nameSubmit']))
    {

        if($_REQUEST['name'] == null)
        {
            $error="Invalid Name";
        }else
        {
            $name = $_REQUEST['name'];
            $error="Valid name";

        }
    }
?>

<html>
<head>
    <title>1.2</title>
</head>
<body>
    <fieldset>
        <legend>Name</legend>
    <form method="POST" action="">


        <td><input type="name" name="name" value="<?=$name?>" /><br></td>
        <hr style="width:12%;text-align:left;margin-left:2"></hr>
        <input type="submit" name="nameSubmit" value="Submit">
    </form>
    </fieldset>
</body>
</html>