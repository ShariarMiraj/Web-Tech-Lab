<?php  

    if(isset($_REQUEST['Submit']))
    {
        if(empty($_REQUEST['blood group']))
        {
            echo "Please,Select Your blood group.";
        }
        else
        {
            echo "Blood group : ".$_REQUEST['blood group'];
        }
    }

?>