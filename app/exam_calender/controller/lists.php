<?php

require_once './exam_calender/model/exam.php';

$data = [
    'exam_calen' => getAllBlocks(),
];
view($data);
