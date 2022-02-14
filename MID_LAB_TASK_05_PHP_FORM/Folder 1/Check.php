<?php

    

    
    if(isset($_REQUEST['Submit']))
    {

        if($_REQUEST['name'] == null)
        {
            echo "..Invalid Name..";
        }
        else{
            echo "Name : ".$_REQUEST['name'];
        }

    }

?>