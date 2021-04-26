<?php

for ($i = 0; $i < 20; $i++)
{
    $agora = new DateTime();
    echo $agora->format('d/m/Y H:i');
    
echo rand(50,4) , '<br />';
}