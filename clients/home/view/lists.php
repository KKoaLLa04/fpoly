<header>
    <div class="header_img"><a href=""><img src="<?php echo _WEB_HOST_TEMPLATE ?>/images/logo.png" alt=""></a></div>
    <article class="header_con">
        <div class="mail">
            <i class="fa-solid fa-envelope"></i>
            <h4>@fpt.edu.vn</h4>
        </div>
        <div class="phone"><i class="fa-solid fa-phone-volume"></i>
            <h4>024 6327 6402/0981 725 836</h4>
        </div>
        <a href="?module=login&action=login"><button><strong>Đăng nhập</strong></button></a>
    </article>
</header>
<section class="banner">
    <div class="w3-content w3-section">
        <img class="mySlides" src="<?php echo _WEB_HOST_TEMPLATE ?>/images/banner.png">
        <img class="mySlides" src="<?php echo _WEB_HOST_TEMPLATE ?>/images/hero1.jpg">
        <img class="mySlides" src="<?php echo _WEB_HOST_TEMPLATE ?>/images/hero2.jpg">
    </div>

    <script>
    var myIndex = 0;
    carousel();

    function carousel() {
        var i;
        var x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        myIndex++;
        if (myIndex > x.length) {
            myIndex = 1
        }
        x[myIndex - 1].style.display = "block";
        setTimeout(carousel, 5000); // Change image every 2 seconds
    }
    </script>
</section>