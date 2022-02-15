<?php

    

    if(isset($_REQUEST['DoBSubmit']))
    {
        if($_REQUEST['DoB'] == null)
        {
            echo "Date of birth is Empty.";
        }
        else{
            echo "Date of birth is ...: : ".$_REQUEST['DoB'];
        }
    }
?>