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
                                  
                                    <h1 class="page__header-title decor-header decor-header--align--center">Bài viết</h1>
                                   
                                </div>
                            </div>
                        </div>
                    </div><!-- page__header / end -->
                    <!-- page__body -->
                    <?php
extract($loadone_blog);

?>
                    <div class="page__body">
                        <div class="container container--max--xl">
                            <div class="row g-custom-30">
                                <div class="col-12 " style="z-index: 1;">
                                    <div class="block">
                                        <article class="card post">
                                            <header class="post__header">
                                               
                                                <h2 class="post__title"><?= $name ?></h2>
                                                <div class="post__meta"><span
                                                        class="post__meta-item"><i
                                                            class="far fa-clock"></i>&nbsp;   <?= $date ?>
                                                    </span>
                                                </div>
                                            </header>
                                            <div class="post__featured d-flex justify-content-center align-items-center"><img 
                                                 style= "width: 600px; height: 500px;"
                                                    src="<?= $imga = $img_path . $img ?>" alt=""></div>
                                            <div class="post__content">
                                                <div class="typography">
                                                    <p><?= $description ?></p>
                                                  
                                                </div>
                                            </div>
                                           
                                        </article>
                                      
                                      
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
    
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