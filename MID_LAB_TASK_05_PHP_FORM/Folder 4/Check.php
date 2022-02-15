<?php

    

    if(isset($_REQUEST['genderSubmit']))
    {
        if(empty($_REQUEST['gender']))
        {
            echo "Gender is Invaild....";
        }
        else
        {
            echo "Gender : ".$_REQUEST['gender'];
        }
    }

?>