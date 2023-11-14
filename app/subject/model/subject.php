<?php

function getAllSubject()
{
    $sql = "SELECT subjects.*, users.name as user_name FROM subjects INNER JOIN users ON users.id=subjects.creator_id";
    $data = getRaw($sql);
    return $data;
}

function getAllUser()
{
    $sql = "SELECT * FROM users";
    $data = getRaw($sql);
    return $data;
}

function getSubjectDetail($id)
{
    $sql = "SELECT * FROM subjects WHERE id=$id";
    $data = firstRaw($sql);
    return $data;
}
