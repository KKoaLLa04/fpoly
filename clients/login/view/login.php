<div class="row">
    <div class="col-8 col_login">
        <img src="<?php echo _WEB_HOST_TEMPLATE ?>/images/Banner-FPT-toan-quoc.png" alt="" class="banner_login">
    </div>

    <div class="col-4 col_login">
        <div class="form-login text-center">
            <img src="<?php echo _WEB_HOST_TEMPLATE ?>/images/Logo-Chuong-trinh-pho-thong-cao-dang-fpt-polytechnic.png"
                alt="" class="logo_fpt">
            <hr>

            <h4>ĐĂNG NHẬP HỆ THỐNG</h4>

            <form action="" method="post">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Tên đăng nhập (email)...">
                    <p></p>
                </div>

                <div class="form-group">
                    <input type="password" placeholder="Mật khẩu..." class="form-control">
                    <p></p>
                </div>

                <button class="form-control btn btn-primary">Đăng nhập</button>
            </form>

            <p class="reset_password"><a href="?module=login&action=forgot" class="reset_password_link">Quên mật
                    khẩu</a></p>
            <hr>
            <p><a href="?module=login&action=register" class="register_link">Nếu bạn chưa có tài khoản? <b>đăng ký
                        ngay</b></a></p>
        </div>
    </div>
</div>