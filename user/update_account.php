<link rel="stylesheet" href="./css/content.css">
                            <?php
                            if(is_array($edit_account)){
                                extract($edit_account);
                            }
                            ?>
<div class="page-content page-container" id="page-content">
    <div class="padding">
        <h2 class="decor-header--align--center text-left mb-5">
            <span class="decor-header">Hồ sơ của tôi</span>
        </h2>
        <div class="row container-fluid">
            <div class="p-0 row m-l-0 m-r-0 rounded-5" style="background-color: #fff;">
                <div class="col-sm-4 bg-c-lite-green user-profile">
                    <div class="card-block text-center text-white">
                        <div class="m-b-25">
                            <img src="https://img.icons8.com/bubbles/100/000000/user.png" class="img-radius" alt="User-Profile-Image">
                        </div>
                        <h6 class="f-w-600">XIN CHÀO</h6>
                        <h6 class="f-w-600" style=" font-size: 15px; color:  #0014FF "><?= $username?></h6>
                      
                        <i class=" mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="card-block">
                        <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Thông tin</h6>
                        <div class="row">
                            <form action="index.php?act=update_account" method="POST">
                            <div class="col-sm-12 d-flex align-items-center mb-5">
                                <p class=" f-w-600 col-2 ">Email</p>
                               <input type="email" name ="email"  class="p-2 w-75  f-w-600 " value= <?= $email?>>
                            </div>
                            <div class="col-sm-12 d-flex align-items-center  mb-5">
                                <p class="f-w-600 col-2 ">Tên</p>
                                <input type="text" name ="name"  class="p-2 w-75  f-w-600 " value= <?= $name?>>
                            </div>
                            <div class="col-sm-12 d-flex align-items-center  mb-5">
                                <p class="  col-2 f-w-600">Điện thoại</p>
                                <input type="text" name ="tell" class="p-2 w-75  f-w-600 " value= <?= $tell?>>
                            </div>
                         
                            <div class="col-sm-12 d-flex align-items-center  mb-5">
                                <p class=" col-2 f-w-600">Địa chỉ</p>
                                <input type="text" name ="address" class="p-2 w-75  f-w-600 " value=" <?= $address?>">
                            </div>
                            <input type="hidden"   name="id" value="<?= $id ?>">
                            <div class="mt-4 d-flex justify-content-end"><input type="submit" name="save"
                                                            class="btn rounder-2 btn-primary" value="lưu"></div>
                            </form>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .padding {
        padding: 3rem !important;
    }

    .card {
        border-radius: 5px;
        -webkit-box-shadow: 0 1px 20px 0 rgba(69, 90, 100, 0.08);
        box-shadow: 0 1px 20px 0 rgba(69, 90, 100, 0.08);
        border: none;
        margin-bottom: 30px;
    }

    .m-r-0 {
        margin-right: 0px;
    }

    .m-l-0 {
        margin-left: 0px;
    }

    .user-card-full .user-profile {
        border-radius: 5px 0 0 5px;
    }

    .bg-c-lite-green {
        background: #c6ab7c;
    }

    .user-profile {
        padding: 20px 0;
    }

    .card-block {
        padding: 1.25rem;
    }

    .m-b-25 {
        margin-bottom: 25px;
    }

    .img-radius {
        border-radius: 5px;
    }



    h6 {
        font-size: 14px;
    }

    .card .card-block p {
        line-height: 25px;
    }

    @media only screen and (min-width: 1400px) {
        p {
            font-size: 14px;
        }
    }

    .card-block {
        padding: 1.25rem;
    }

    .b-b-default {
        border-bottom: 1px solid #e0e0e0;
    }

    .m-b-20 {
        margin-bottom: 20px;
    }

    .p-b-5 {
        padding-bottom: 5px !important;
    }

    .card .card-block p {
        line-height: 25px;
    }

    .m-b-10 {
        margin-bottom: 10px;
    }

    .text-muted {
        color: #919aa3 !important;
    }

    .b-b-default {
        border-bottom: 1px solid #e0e0e0;
    }

    .f-w-600 {
        font-weight: 600;
    }

    .m-b-20 {
        margin-bottom: 20px;
    }

    .m-t-40 {
        margin-top: 20px;
    }

    .p-b-5 {
        padding-bottom: 5px !important;
    }

    .m-b-10 {
        margin-bottom: 10px;
    }

    .m-t-40 {
        margin-top: 20px;
    }

    .user-card-full .social-link li {
        display: inline-block;
    }

    .user-card-full .social-link li a {
        font-size: 20px;
        margin: 0 10px 0 0;
        -webkit-transition: all 0.3s ease-in-out;
        transition: all 0.3s ease-in-out;
    }
</style>