<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo _WEB_HOST_TEMPLATE ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo _WEB_HOST_TEMPLATE ?>/css/style_home.css?ver=<?php echo rand() ?>">
    <link rel="stylesheet" href="<?php echo _WEB_HOST_TEMPLATE ?>/css/style_login.css?ver=<?php echo rand() ?>">
    <link rel="stylesheet" href="<?php echo _WEB_HOST_TEMPLATE ?>/css/style_view.css?ver=<?php echo rand() ?>">
    <link rel="stylesheet" href="<?php echo _WEB_HOST_TEMPLATE ?>/css/style.css?ver=<?php echo rand() ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

</head>

<body>
    <div class="container1">
        <!-- menu bên phải -->

        <section class="home_boxleft">
            <article class="home_boxleft_logo">
                <div class="logo"><img src="<?php echo _WEB_HOST_TEMPLATE ?>/images/logo.png" alt=""></div>
            </article>
            <article class="home_boxleft_menu">
                <div class="muc">
                    <div class="name_muc">Giảng Viên</div>
                    <a href="?module=exam_calender&action=lists">
                        <div class="muc_con">Lịch thi sắp tới</div>
                    </a>
                    <a href="?module=histories_teacher&action=lists">
                        <div class="muc_con">Nhật kí tải đề </div>
                    </a>
                </div>
                <div class="muc">
                    <div class="name_muc">Quản trị viên</div>
                    <a href="?module=upload_plane&action=lists">
                        <div class="muc_con">Upload file kế hoạch thi</div>
                    </a>
                    <a href="?module=exam_plane&action=lists">
                        <div class="muc_con">Kế hoạch thi</div>
                    </a>
                    <a href="?module=histories_manager&action=lists">
                        <div class="muc_con">Nhật kí tải đề</div>
                    </a>

                    <a href="?module=subject&action=lists">
                        <div class="muc_con">Quản lý môn học</div>
                    </a>
                </div>
            </article>
        </section>

        <section class="home_boxright">

            <article class="home_boxright_account">
                <a href="">
                    <div class="account">
                        <i class="fa-solid fa-user"></i>
                        <p>Font_end</p>
                    </div>
                </a>
                <a href="index.php?act=dangxuat">
                    <div class="account">
                        <i class="fa-solid fa-arrow-right-to-bracket"></i>
                        <p>Đăng Xuất</p>
                    </div>
                </a>
            </article>