<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="vendor/owl-carousel/assets/owl.carousel.min.css">
<link rel="stylesheet" href="vendor/photoswipe/photoswipe.css">
<link rel="stylesheet" href="vendor/photoswipe/default-skin/default-skin.css">
<link rel="stylesheet" href="vendor/fontawesome/css/all.min.css">
<link rel="stylesheet" href="./css/content.css">
<script async="" src="../../gtag/js?id=UA-97489509-8"></script>
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/owl-carousel/owl.carousel.min.js"></script>
<script src="vendor/nouislider/nouislider.min.js"></script>
<script src="vendor/photoswipe/photoswipe.min.js"></script>
<script src="vendor/photoswipe/photoswipe-ui-default.min.js"></script>
<script src="vendor/svg4everybody/svg4everybody.min.js"></script>
<script src="js/main.js"></script>
<script>
    svg4everybody();
</script>
<div class="site__body">
    <!-- page -->
    <div class="page">
        <!-- page__header -->
        <div class="block block-posts-carousel">
                <div class="container container--max--xl">
                    <div class="block__title">
                        <h2 class="decor-header--align--center text-left">
                            <span class="decor-header"> Các bài viết khác</span>
                        </h2>
                    </div>
                    <div class="block-posts-carousel__slider slider slider--with-arrows">
                        <div class="owl-carousel">
                            <?php
                            foreach ($list_blog as $blog) {
                                extract($blog);
                                $link_blog = "index.php?act=link_blog&id=" . $id;
                                $img_path = "../upload/" . $img;
                                if (is_file($img_path)) {
                                    $img = "<img src='" . $img_path . "' height='250' width='250'>";
                                } else {
                                    $img = "NO Photo";
                                }
                                echo '
<div class="post-card post-card--layout--default">
    <div class="post-card__image">' . $img . '</div>
    <div class="post-card__info">
        <div class="post-card__date">' . $date . '</div>
        <div class="post-card__name"><span class="post-card__name-link"
                >' . $name . '</span></div>
        <div class="post-card__description">' . $description . '</div><a href="'.$link_blog.'"
        
            class="btn btn-primary post-card__read-more">Đọc bài viêt</a>
    </div>
</div>
';
                            }

                            ?>


                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>


