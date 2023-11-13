<?php

function getAllUpload()
{
    $sql = "SELECT * FROM spring_blocks";
    $data = getRaw($sql);
    return $data;
}
