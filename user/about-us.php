<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/owl-carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="vendor/photoswipe/photoswipe.css">
    <link rel="stylesheet" href="vendor/photoswipe/default-skin/default-skin.css">
    <link rel="stylesheet" href="vendor/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="./css/content.css">
    <script async="" src="../../gtag/js?id=UA-97489509-8"></script>
    <div class="site__body">
                <!-- page -->
                <div class="page">
                    <!-- page__header -->
                    <div class="page__header">
                        <div class="container container--max--xl">
                            <div class="row g-custom-30">
                                <div class="col">
                                    <ol class="page__header-breadcrumbs breadcrumb">
                                    </ol>
                                    <h2 class="   decor-header decor-header--align--center text-center" >Về chúng tôi</h2>
                                </div>
                            </div>
                        </div>
                    </div><!-- page__header / end -->
                    <!-- page__body -->
                    <div class="page__body">
                        <!-- block-gallery -->
                        <div class="block block-gallery">
                            <div class="container container--max--xl">
                                <div class="block-gallery__body">
                                    <ul class="block-gallery__images">
                                        <li class="block-gallery__item"><img
                                                srcset="images/gallery/gallery1.jpg, images/gallery/gallery1%402x.jpg 2x"
                                                src="images/gallery/gallery1.jpg" alt=""></li>
                                        <li class="block-gallery__item"><img
                                                srcset="images/gallery/gallery2.jpg, images/gallery/gallery2%402x.jpg 2x"
                                                src="images/gallery/gallery2.jpg" alt=""></li>
                                        <li class="block-gallery__item"><img
                                                srcset="images/gallery/gallery3.jpg, images/gallery/gallery3%402x.jpg 2x"
                                                src="images/gallery/gallery3.jpg" alt=""></li>
                                        <li class="block-gallery__item"><img
                                                srcset="images/gallery/gallery4.jpg, images/gallery/gallery4%402x.jpg 2x"
                                                src="images/gallery/gallery4.jpg" alt=""></li>
                                    </ul>
                                    <div class="block-gallery__aboutus">
                                        <h3 class="block-gallery__aboutus-header decor-header">NỘI THẤT NGUYÊN HÒA</h3>
                                        <div>Mỗi một chi tiết, mỗi một sản phẩm và hình ảnh đều là những dấu ấn, là câu chuyện mà NGUYÊN HÒA muốn gửi gắm đến mỗi khách hàng.
                                             NGUYÊN HÒA hi vọng trong từng bộ sưu tập, từng sản phẩm và dịch vụ của mình sẽ trở thành một phần trong tổ ấm của mỗi gia đình Việt,
                                             như một thông điệp <b> "mang yêu thương gửi trọn trong từng không gian sống"</b>. Hướng đến sự tiện ích, hiện đại tối giản và thân
                                             thiện môi trường là khát khao mà NGUYÊN HÒA không ngừng theo đuổi.</div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- block-gallery -->
                        <!-- block-teammates -->
                        <div class="block block-teammates">
                            <div class="container container--max--xl">
                                <div class="block__title">
                                    <h2 class="decor-header decor-header--align--center text-center">Đội Ngũ Của Chúng Tôi</h2>
                                </div>
                                <div class="block-teammates__list">
                                    <?php
                                    foreach($show_admin as $admin) {
                                        extract($admin);
                                        $imga = $img_path . $img;

?>
                                    <div class="block-teammates__item card"><img style=" height: 300px;"
                                                class="block-teammates__image"
                                                
                                                src="<?= $imga ?>" alt="">
                                        <div class="block-teammates__info">
                                            <div class="block-teammates__name"><?=  $username ?></div>
                                            <div class="block-teammates__position"><?= $role  ?></div>
                                            <ul class="block-teammates__social">
                                                <li><a href="<?= $facebook ?>"
                                                        class="block-teammates__social-link" target="_blank"><i
                                                            class="fab fa-facebook-f"></i></a></li>
                                                
                                                <li><a href="<?= $instagram ?>"
                                                        class="block-teammates__social-link" target="_blank"><i
                                                            class="fab fa-instagram"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                 <?php

}
?>
                                 
                                </div>
                                <div class="typography text-center mt-5">
                                    <h4 class="mb-3">Hướng Đến Giá Trị Bền Vững</h4>
                                    <p>“Tính bền vững” là một khái niệm định nghĩa sự phát triển về mọi mặt nhưng vẫn đảm bảo sự tồn tại phát triển ở trạng thái cân bằng.
                                         Mang khái niệm “bền vững” vào trong sản phẩm - dịch vụ nội thất là bước đi tiên phong và đầy thách thức mà MOHO luôn không ngừng nỗ lực nhằm lan toả,
                                         truyền cảm hứng về một lối sống tích cực, tiêu dùng bền vững hơn vì một tương lai của hành tinh xanh. 
                                        <br><b> Mục tiêu phát triển bền vững:</b>
                                        <br> Truyền cảm hứng về tiêu dùng bền vững đến mọi người tại Việt Nam.
                                        <br> Sử dụng 100% nguồn nguyên liệu gỗ đạt chứng nhận chứng nhận FSC® - Forest Stewardship Council®.
                                        <br> Bảo trì trọn đời sản phẩm nhằm kéo dài tuổi thọ và tính hữu dụng của sản phẩm trong thời gian dài. 
                                    </p>
                                  
                                </div>
                            </div>
                        </div><!-- block-teammates / end -->
                        <!-- block-testimonials -->
                        <div class="block block-testimonials block--dark block-testimonials--dark">
                            <div class="block__container container container--max--xl">
                                <div class="block__title">
                                    <h2 class="decor-header decor-header--align--center text-center">Các Tiêu Chí</h2>
                                </div>
                                <div class="slider slider--dark slider--with-dots">
                                    <div class="owl-carousel">
                                        <div class="d-flex justify-content-center">
                                            <div class="block-testimonials__item">
                                                <div class="block-testimonials__icon"><i class="fas fa-quote-left"></i>
                                                </div>
                                                <div class="block-testimonials__author">Thân Thiện Môi Trường</div>
                                                <div>NGUYÊN HÒA với xuất phát điểm muốn lan toả thông điệp "Sống xanh", mỗi một sản phẩm nội thất mà NGUYÊN HÒA mang
                                                     đến cho khách hàng đều là bắt nguồn từ nguyên liệu gỗ đạt chuẩn FSC - khai thác từ nguồn rừng có trồng lại.
                                                     NGUYÊN HÒA hiểu rằng, là một doanh nghiệp nói chung, và là doanh nghiệp trong lĩnh vực nội thất nói riêng,
                                                     cần có trách nhiệm hơn với cộng đồng và môi trường xanh của chúng ta. Giá trị tốt đẹp này không chỉ riêng NGUYÊN HÒA mà mỗi một khách hàng sử dụng sản phẩm NGUYÊN HÒA đều đóng góp và nhân rộng lên giá trị bền vững này. </div>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-center">
                                            <div class="block-testimonials__item">
                                                <div class="block-testimonials__icon"><i class="fas fa-quote-left"></i>
                                                </div>
                                                <div class="block-testimonials__author">An Toàn Sức Khỏe</div>
                                                <div>Đặt yếu tố sức khoẻ và an toàn khách hàng lên hàng đầu, các sản phẩm nội thất gỗ công nghiệp tại NGUYÊN HÒA: 
                                                <br>    - Đạt chứng nhận chứng nhận giảm phát thải Formaldehyde – CARB P2, đảm bảo gỗ không độc hại.
                                                <br>    - Ưu tiên sử dụng sơn gốc nước thay cho sơn gốc dầu. 
                                                <br>    - Trang bị bộ anti tip kit tránh tình trạng tủ bị lật, gây nguy hiểm, đặc biệt là những gia đình có trẻ nhỏ.
                                                <br>    Tại hầu hết các nước trên thế giới đều qui định nghiêm ngặt về tiêu chuẩn an toàn CARB - P2 đối với các sản phẩm gỗ công nghiệp,
                                                 cũng như các yếu tố an toàn trong quá trình sử dụng, NGUYÊN HÒA tin rằng việc tiên phong về tiêu chuẩn sức khoẻ - an toàn người dùng sẽ là điểm mạnh mang thương hiệu nội thất của người Việt vươn tầm quốc tế trong tương lai. 
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-center">
                                            <div class="block-testimonials__item">
                                                <div class="block-testimonials__icon"><i class="fas fa-quote-left"></i>
                                                </div>
                                                <div class="block-testimonials__author">Chất Lượng Quốc Tế</div>
                                                <div>Sản xuất trực tiếp tại nhà máy Savimex với công nghệ hiện đại cùng đội ngũ thợ tay nghề cao. 
                                                <br>    - Nhà máy chế biến gỗ đầu tiên tại Việt Nam đạt chứng nhận hệ thống quản lý môi trường đạt chuẩn quốc tế ISO 14001.
                                                <br>    - Rộng 10ha với hơn 1,500 công nhân viên giàu kinh nghiệm cùng máy móc công nghệ hiện đại. </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- block-testimonials / end -->
                    </div><!-- page__body / end -->
                </div><!-- page / end -->
            </div><!-- site__body / end -->

            <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/owl-carousel/owl.carousel.min.js"></script>
    <script src="vendor/nouislider/nouislider.min.js"></script>
    <script src="vendor/photoswipe/photoswipe.min.js"></script>
    <script src="vendor/photoswipe/photoswipe-ui-default.min.js"></script>
    <script src="vendor/svg4everybody/svg4everybody.min.js"></script>
    <script src="js/main.js"></script>
    <script>svg4everybody();</script>