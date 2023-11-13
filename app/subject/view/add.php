<?php
$msg = getFlashData('msg');
$msg_type = getFlashData('msg_type');
$errors = getFlashData('errors');
$old = getFlashData('old');
?>
<div class="container py-4">
    <a href="?module=subject&action=lists"><button class="btn btn-warning">Quay lại</button></a>
    <hr>
    <h4>Thêm môn học mới</h4>
    <?php getMsg($msg, $msg_type) ?>
    <form action="" method="post">
        <div class="form-group">
            <label for="">Tên môn học</label>
            <input type="text" placeholder="Tên môn học..." class="form-control" name="name"
                value="<?php echo !empty($old['name'])?$old['name']:false ?>">
            <p class="error"><?php echo !empty($errors['name']) ? $errors['name'] : false ?></p>
        </div>

        <button class="btn btn-primary">Thêm mới</button>
    </form>
</div>