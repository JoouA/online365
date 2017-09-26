<?php

function getExt($file,$typeArr){
    $isPass = false;

    $ext = substr(strrchr($file,'.'),1);
    foreach ($typeArr as $type){
        if ($ext == $type)
            $isPass = $ext;
    }
    return $isPass;
}

?>