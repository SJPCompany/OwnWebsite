<?php

namespace Mini\Model;

use Mini\Core\Model;

class pricechecker
{
public function partsearch($part){

    $myObj->query = $part;
    $myJSON = json_encode($myObj);
    echo $myJSON;
}


}