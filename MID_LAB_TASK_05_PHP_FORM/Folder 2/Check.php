<?php

    

    if(isset($_REQUEST['emailSubmit']))
    {
        if($_REQUEST['email'] == null){
            echo "Email is empty....";
        }
        else{
            echo "Eamil : ".$_REQUEST['email'];
        }
    }

?>