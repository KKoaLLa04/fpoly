<?php

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

require_once './upload_plane/model/upload.php';

if (isPost()) {

    echo '<pre>';
    print_r($_FILES);
    echo '</pre>';

    if (!empty($_FILES['upload_file'])) {
        $file = $_FILES['upload_file']['name'];
        $from = $_FILES['upload_file']['tmp_name'];
        $to = _WEB_PATH_ROOT . '/uploads/' . $file;
        $upload = move_uploaded_file($from, $to);

        var_dump($upload);

        if (!empty($upload)) {
            $file_path = _WEB_PATH_ROOT . '/uploads/' . $file;
            $obj = PhpOffice\PhpSpreadsheet\IOFactory::load($file_path);
            $data = $obj->getActiveSheet()->toArray();

            $data = json_encode($data);
            // insert data
            $dataInsert = [
                'creator_id' => 1,
                'name' => $data,
                'created_at' => date('Y-m-d H:i:s')
            ];

            $insertStatus = insert('spring_blocks', $dataInsert);

            if (!empty($insertStatus)) {
                setFlashData('msg', 'Upload file đề thi thành công');
                setFlashData('msg_type', 'success');
            } else {
                setFlashData('msg', 'Có lỗi xảy ra, vui lòng update lại sau!');
                setFlashData('msg_type', 'danger');
            }
        } else {
            echo 1;
        }
    }
}

view();
