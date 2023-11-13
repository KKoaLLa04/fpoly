<?php

function getAllBlocks()
{
    $sql = "SELECT * FROM spring_blocks";
    $data = getRaw($sql);

    return $data;
}
