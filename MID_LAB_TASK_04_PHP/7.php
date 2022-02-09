<?php

for($j=0;$j<3;$j++)
{
    for($e=0;$e<=$j;$e++)
    {
        echo "*";

    }
    echo "<br>";
}

for($k=3;$k>=1;$k--)
{
    for($f=1;$f<=$k;$f++)
    {
        echo $f;
    }
    echo "<br>";
}

$alpha=["1st"=>"A","2nd"=>"B C","3rd"=>"D E F"];
foreach ($alpha as $a=>$c)
{
    echo $c;
}

?>