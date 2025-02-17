<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AVERY IT TECH SEMINAR</title>
    <!-- เรียกใช้งาน Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kanit&display=swap">
    <!-- เรียกใช้งานไฟล์ CSS จาก assets -->

    <link href="<?php echo base_url('/assets/css/style.css') ?>" rel="stylesheet" type="text/css" />
    
    <!-- เชื่อมต่อไฟล์ CSS ของ Bootstrap 4 -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- เชื่อมต่อไฟล์ JavaScript ของ Bootstrap 4 (และโปรโตไทป์ Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-XpB/BjEKTgWSnx5+E48DTZOzTp4xQD60luEa4s7vvTfKCmTxhqV5L6GOaF0KcNyH" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shCk+5KVcYMhL8cYY3tuJ+8ebBvEhaCACyT6T" crossorigin="anonymous"></script>

    <!-- สไตล์เพิ่มเติม -->

</head>

<style>
    @media (max-width: 1399px) {
        .pad-l-0 {
            padding-left: 0;
        }
    }

    @media (min-width: 768px) {
        .pad-r-0 {
            padding-right: 0;
        }
    }

    @media (min-width: 768px) {
        .pad-r-1 {
            padding-right: 32px;
        }
    }

    .navbar-nav .nav-item.active .nav-link {
        color: #F9C623;
        ;
        /* สีข้อความเมื่อ active */
        background-color: #FFFFFF;
        /* สีพื้นหลังเมื่อ active */
        border-radius: 5px
    }

    .navbar-nav .nav-item .nav-link {
        color: #333333;
        /* สีข้อความปกติ */
    }

    .navbar-nav .nav-item.active .nav-link:hover {
        background-color: #FFFFFF;
        border-radius: 5px
    }
</style>


<body>


    <div class="row">
        <div class="col-md-4 col-12 border-bottom">
            <div class="col-auto ma-l">
                <!-- เพิ่มคลาส img-fluid เพื่อทำให้รูปภาพปรับขนาดตามขนาดหน้าจอ -->

                <img src="<?php echo base_url('assets/images/logo-it.png') ?>" alt="Your Logo" class="img-fluid">
            </div>
        </div>


        <nav class="col-md-8 col-12 navbar navbar-expand-lg navbar-light nav-color" style="background-color:  #F9C623;  ">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="background-color:  #F9C623;">
                <span class="navbar-toggler-icon" style="background-color:  #F9C623;"></span>
            </button>

            <?php
            $current_url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            ?>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="navbar-nav-border">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item <?php echo (endsWith($current_url, 'home')) ? 'active' : ''; ?>">
                            <a class="nav-link" href="<?php echo base_url('Events/home'); ?>">Home</a>
                        </li>

                        <li class="nav-item <?php echo (endsWith($current_url, 'seminar')) ? 'active' : ''; ?>">
                            <a class="nav-link" href="<?php echo base_url('Events/seminar'); ?>">Seminar</a>
                        </li>

                        <li class="nav-item <?php echo (endsWith($current_url, 'contact')) ? 'active' : ''; ?>">
                            <a class="nav-link" href="<?php echo base_url('Events/contact'); ?>">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>

            <?php
            function endsWith($haystack, $needle)
            {
                $length = strlen($needle);
                if ($length == 0) {
                    return true;
                }
                return (substr($haystack, -$length) === $needle);
            }
            ?>


        </nav>
    </div>


    <div class="container-cs">
        <div class="row mt-5 ma-m-bt">
            <div class="col-12">
                <p class="text-center line1 font-40-1 font-size-mobile0  "> เริ่มเร็วๆนี้ </p>
            </div>
            <div class="col-12 text-center ">
                <div class="line"></div>
            </div>
        </div>

    </div>


    <div class="row mt-2 " style="background-color: #F9F9F9;">
        <div class="container-cs mb-3 ">
            <div class="row">

                <div class="col-md-5 col-12 margin-t-b pad-r-0">

                    <img src="<?php echo base_url('assets/images/cat.png') ?>" class="img-fluid" style="width: 100%;">
                </div>

                <div class="col-md-7 col-12 box-s border-bottom1 col-seminar " style="background-color:#ffffff">
                    <div class="container">
                        <div class="row ">
                            <div class="col-12 large-screen-margin-2 hover-color-yellow">
                                <a href="<?php echo base_url('Events/info'); ?>" class="font-32 font-size-mobile1" style="text-decoration: none;">งานสัมมนา Top 10 Technology & Cyber Security Trends and Updates 2024</a>
                            </div>

                        </div>
                        <div class="row ">
                            <div class="col-md-auto col-12">
                                <div class="box lg-margin-l-1 ">
                                    <p class="font-40 font-size-mobile0 ">18</p>
                                    <p class="font-20 font-size-mobile2 ">กุมพาพันธ์</p>
                                    <p class="font-20 font-size-mobile2 ">2567</p>
                                </div>
                            </div>
                            <div class="col-md-9 col-12">
                                <div style="margin-bottom:10px;">

                                    <img src="<?php echo base_url('assets/images/calendar.svg') ?>" class="lg-margin-r-1">
                                    <span class="font-20 font-size-mobile3 ">14:00-16:00 น.</span>
                                </div>
                                <div>
                                
                                    <img src="<?php echo base_url('assets/images/map-pinyellow.svg') ?>" class="lg-margin-r-1">
                                    <span class="font-20 font-size-mobile3 ">Software Park Thailand (ถ.แจ้งวัฒนะ) , ณ ห้องออดิทอเรียม ชั้น 3 </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!----------------------------------------- START  ----------------------------------------->
    <div class="container-cs margin-bt-2 ">
        <div class="row lg-margin-t">
            <div class="col-1">
                <div class="box-container">
                    <p class="font-28 " style="margin-top:14px; ">สัมมานา เดือนนี้</p>


                </div>
            </div>
            <div class="col-md-10 col-12">
                <div class="line2 lg-margin-t-1 lg-margin-l-9 mt-mobile-2 "></div>
            </div>
        </div>
    </div>
    <!----------------------------------------- End  ----------------------------------------->

    <div class="container-cs pad-r-1">
        <div class="row mt-2">

            <div class="col-md-5 col-12 margin-t-b pad-r-0">
                <img src="<?php echo base_url('assets/images/cat.png') ?>" class="img-fluid" style="width: 100%;">
            </div>

            <div class="col-md-7 col-12 box-s border-bottom1 col-seminar" style="background-color:#FFFFFF">
                <div class="container">
                    <div class="row  ">
                        <div class="col-12 large-screen-margin-2 hover-color-yellow ">
                            <a href="<?php echo base_url('Events/info'); ?>" class="font-32 font-size-mobile1" style="text-decoration: none;">งานสัมมนา Top 10 Technology & Cyber Security Trends and Updates 2024</a>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-auto">
                            <div class="box lg-margin-l-1 ">
                                <p class="font-40 font-size-mobile0">18</p>
                                <p class="font-20 font-size-mobile2 ">กุมพาพันธ์</p>
                                <p class="font-20 font-size-mobile2 ">2567</p>
                            </div>
                        </div>
                        <div class="col-md-9 col-12">
                            <div style="margin-bottom:10px;">
                                <img src="<?php echo base_url('assets/images/calendar.svg') ?>" class="lg-margin-r-1">
                                <span class="font-20 font-size-mobile3">14:00-16:00 น.</span>
                            </div>
                            <div>
                                <img src="<?php echo base_url('assets/images/map-pinyellow.svg') ?>" class="lg-margin-r-1">
                                <span class="font-20 font-size-mobile3">Software Park Thailand (ถ.แจ้งวัฒนะ) , ณ ห้องออดิทอเรียม ชั้น 3 </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!----------------------------------------- END EVENT1 ----------------------------------------->

    <div class="container-cs pad-r-1 ">
        <div class="row mt-2">

            <div class="col-md-5 col-12 margin-t-b pad-r-0 ">
                <img src="<?php echo base_url('assets/images/cat.png') ?>" class="img-fluid" style="width: 100%;">
            </div>

            <div class="col-md-7 col-12 box-s border-bottom1 col-seminar " style="background-color:#FFFFFF">
                <div class="container">
                    <div class="row ">
                        <div class="col-12 large-screen-margin-2 hover-color-yellow ">
                            <a href="<?php echo base_url('Events/info'); ?>" class="font-32 font-size-mobile1 " style="text-decoration: none;">งานสัมมนา Top 10 Technology & Cyber Security Trends and Updates 2024</a>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-auto">
                            <div class="box lg-margin-l-1 ">
                                <p class="font-40 font-size-mobile0">18</p>
                                <p class="font-20 font-size-mobile2">กุมพาพันธ์</p>
                                <p class="font-20 font-size-mobile2">2567</p>
                            </div>
                        </div>
                        <div class="col-md-9 col-12">
                            <div style="margin-bottom:10px;">
                                <img src="<?php echo base_url('assets/images/calendar.svg') ?>" class="lg-margin-r-1">
                                <span class="font-20 font-size-mobile3">14:00-16:00 น.</span>
                            </div>
                            <div>
                                <img src="<?php echo base_url('assets/images/map-pinyellow.svg') ?>" class="lg-margin-r-1">
                                <span class="font-20 font-size-mobile3 ">Software Park Thailand (ถ.แจ้งวัฒนะ) , ณ ห้องออดิทอเรียม ชั้น 3 </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!----------------------------------------- END EVENT2 ----------------------------------------->

    <div class="container-cs pad-r-1">
        <div class="row mt-2">

            <div class="col-md-5 col-12 margin-t-b pad-r-0 ">
                <img src="<?php echo base_url('assets/images/cat.png') ?>" class="img-fluid" style="width: 100%;">
            </div>

            <div class="col-md-7 col-12 box-s border-bottom1 col-seminar " style="background-color:#FFFFFF">
                <div class="container">
                    <div class="row ">
                        <div class="col-12 large-screen-margin-2 hover-color-yellow ">
                            <a href="<?php echo base_url('Events/info'); ?>" class="font-32 font-size-mobile1" style="text-decoration: none;">งานสัมมนา Top 10 Technology & Cyber Security Trends and Updates 2024</a>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-auto">
                            <div class="box lg-margin-l-1 ">
                                <p class="font-40 font-size-mobile0">18</p>
                                <p class="font-20 font-size-mobile2">กุมพาพันธ์</p>
                                <p class="font-20 font-size-mobile2">2567</p>
                            </div>
                        </div>
                        <div class="col-md-9 col-12">
                            <div style="margin-bottom:10px;">
                                <img src="<?php echo base_url('assets/images/calendar.svg') ?>" class="lg-margin-r-1">
                                <span class="font-20 font-size-mobile3 ">14:00-16:00 น.</span>
                            </div>
                            <div>
                                <img src="<?php echo base_url('assets/images/map-pinyellow.svg') ?>" class="lg-margin-r-1">
                                <span class="font-20 font-size-mobile3 ">Software Park Thailand (ถ.แจ้งวัฒนะ) , ณ ห้องออดิทอเรียม ชั้น 3 </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!----------------------------------------- END EVENT3 ----------------------------------------->


    <div class="container-cs pad-r-1">
        <div class="row mt-2">

            <div class="col-md-5 col-12 margin-t-b pad-r-0 ">
                <img src="<?php echo base_url('assets/images/cat.png') ?>" class="img-fluid" style="width: 100%;">
            </div>

            <div class="col-md-7 col-12 box-s border-bottom2 col-seminar " style="background-color:#FFFFFF">
                <div class="container">
                    <div class="row ">
                        <div class="col-12 large-screen-margin-2 hover-color-blue ">
                            <a href="<?php echo base_url('Events/infoonline'); ?>" class="font-32 font-size-mobile1" style="text-decoration: none;">งานสัมมนา Top 10 Technology & Cyber Security Trends and Updates 2024</a>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-auto">
                            <div class="box-2 lg-margin-l-1 ">
                                <p class="font-40-o font-size-mobile0">18</p>
                                <p class="font-20-o font-size-mobile2">กุมพาพันธ์</p>
                                <p class="font-20-o font-size-mobile2">2567</p>
                            </div>
                        </div>
                        <div class="col-md-9 col-12">
                            <div style="margin-bottom:10px;">

                                <img src="<?php echo base_url('assets/images/vector.svg') ?>" class="lg-margin-r-1">
                                <span class="font-20 font-size-mobile3 ">14:00-16:00 น.</span>
                            </div>
                            <div>

                                <img src="<?php echo base_url('assets/images/tv_signin.svg') ?>" class="lg-margin-r-1">
                                <span class="font-20 font-size-mobile3">สัมมนา Online</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!----------------------------------------- END EVENT4 ----------------------------------------->
    <div class="container-cs">
        <div class="row lg-margin-t-2 ">
            <div class="col-md-12 col-12 d-flex text-center ">
                <button class="button-all mt-mobile-1" onclick="window.location='<?php echo base_url('Events/seminar'); ?>'">
                    <p class="mt-3">ดูทั้งหมด</p>
                </button>
            </div>


        </div>
    </div>








    <!-- เรียกใช้งาน Bootstrap JavaScript และ jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>