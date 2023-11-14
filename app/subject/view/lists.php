<?php
$msg = getFlashData('msg');
$msg_type = getFlashData('msg_type');
?>
<section class="home_boxcenter">
    <div class="container py-4">
        <a href="?module=subject&action=add"><button class="btn btn-success">Thêm môn học mới <i
                    class="fa fa-plus"></i></button></a>
        <hr>
        <?php getMsg($msg,$msg_type) ?>
        <form action="" method="get">
            <div class="row">
                <div class="col-4">
                    <select name="creator_id" class="form-control">
                        <option value="0">---Chọn người đăng---</option>
                        <?php if (!empty($data['users'])) :
                            foreach ($data['users'] as $key => $item) : ?>
                        <option value="<?php echo $item['id'] ?>"><?php echo $item['name'] ?> -
                            (<?php echo $item['email'] ?>)</option>
                        <?php endforeach;
                        endif; ?>
                    </select>
                </div>

                <div class="col-6">
                    <input type="text" name="keyword" placeholder="Môn học tìm kiếm..." class="form-control">
                </div>
                <div class="col-2">
                    <button class="btn btn-primary w-100">Tìm kiếm</button>
                </div>
            </div>
        </form>
        <hr>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th width="3%">#</th>
                    <th>Tên môn học</th>
                    <th>Người đăng</th>
                    <th width="5%">Sửa</th>
                    <th width="5%">Xóa</th>
                </tr>
            </thead>

            <tbody>
                <?php if (!empty($data['subject'])) :
                    foreach ($data['subject'] as $key => $item) : ?>
                <tr>
                    <td><?php echo $key + 1 ?></td>
                    <td><?php echo $item['name'] ?></td>
                    <td><a href="#" style="text-decoration: none;"><?php echo $item['user_name'] ?></a></td>
                    <td><a href="?module=subject&action=edit&id=<?php echo $item['id'] ?>"><button
                                class="btn btn-warning"><i class="fa fa-edit"></i></button></a></td>
                    <td><a href="?module=subject&action=delete&id=<?php echo $item['id'] ?>"
                            onclick="return confirm('Are you sure?')"><button class="btn btn-danger"><i
                                    class="fa fa-trash"></i></button></a></td>
                </tr>
                <?php endforeach;
                endif; ?>
            </tbody>
        </table>

        <nav aria-label="Page navigation example" class="d-flex justify-content-end">
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </nav>
    </div>
</section>