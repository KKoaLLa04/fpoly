<?php

if (!empty($_GET['id'])) {
    $id = $_GET['id'];

    $condition = 'id=' . $id;

    $deleteStatus = delete('subjects', $condition);

    if (!empty($deleteStatus)) {
        setFlashData('msg', 'Xóa môn học thành công!');
        setFlashData('msg_type', 'success');
    } else {
        setFlashData('msg', 'Lỗi hệ thống, vui lòng thử lại sau!');
        setFlashData('msg_type', 'danger');
    }
} else {
    setFlashData('msg', 'Liên kết không tồn tại hoặc đã hết hạn!');
    setFlashData('msg_type', 'danger');
}


redirect('?module=subject&action=lists');
