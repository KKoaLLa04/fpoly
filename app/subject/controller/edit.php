<?php

require_once './subject/model/subject.php';

if (!empty($_GET['id'])) {
    $id = $_GET['id'];

    $subjectDetail = getSubjectDetail($id);

    if (!empty($subjectDetail)) {
        setFlashData('subject_detail', $subjectDetail);
    } else {
        setFlashData('msg', 'Môn học không tồn tại hoặc đã bị xóa!');
        setFlashData('msg_type', 'danger');
        redirect('?module=subject&action=lists');
    }
} else {
    setFlashData('msg', 'Liên kết không tồn tại hoặc đã hết hạn!');
    setFlashData('msg_type', 'danger');
    redirect('?module=subject&action=lists');
}

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
        $dataUpdate = [
            'name' => trim($body['name']),
            'creator_id' => 1,
            'updated_at' => date('Y-m-d H:i:s')
        ];

        $condition = "id=$id";

        $updateStatus = update('subjects', $dataUpdate, $condition);

        if (!empty($updateStatus)) {
            setFlashData('msg', 'Cập nhật môn học thành công');
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

    redirect('?module=subject&action=edit&id=' . $id);
}

view();
