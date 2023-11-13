<?php

require_once './subject/model/subject.php';

$data = [
    'subject' => getAllSubject(),
    'users' => getAllUser(),
];

view($data);
