<?php

if (isPost()) {
    $body = getBody();

    $errors = [];
    // validate
    if (empty(trim($body['name']))) {
        $errors['name'] = 'Tên môn học không được để trống...';
    } else {
        if (strlen(trim($body['name'])) < 3) {
            $errors['name'] = 'Tên môn học không được nhỏ hơn 3 ký tự';
        }
    }

    if (empty($errors)) {
        // khong co loi xay ra
        $dataInsert = [
            'name' => trim($body['name']),
            'creator_id' => 1,
            'created_at' => date('Y-m-d H:i:s')
        ];

        $insertStatus = insert('subjects', $dataInsert);

        if (!empty($insertStatus)) {
            setFlashData('msg', 'Thêm môn học thành công');
            setFlashData('msg_type', 'success');
        } else {
            setFlashData('msg', 'Lỗi hệ thống, vui lòng thử lại sau!');
            setFlashData('msg_type', 'success');
        }
    } else {
        setFlashData('msg', 'Lỗi dữ liệu, vui lòng thử lại!');
        setFlashData('msg_type', 'danger');
        setFlashData('errors', $errors);
        setFlashData('old', $body);
    }

    redirect('?module=subject&action=add');
}

view();
