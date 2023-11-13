<?php

function getAllSubject()
{
    $sql = "SELECT subjects.*, users.name as user_name FROM subjects INNER JOIN users ON users.id=subjects.creator_id ORDER BY subjects.id DESC";
    $data = getRaw($sql);
    return $data;
}