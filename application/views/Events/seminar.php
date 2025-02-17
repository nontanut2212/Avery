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
    <link href="<?php echo base_url('assets/css/style.css') ?>" rel="stylesheet" type="text/css" />

    <!-- เชื่อมต่อไฟล์ CSS ของ Bootstrap 4 -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- เชื่อมต่อไฟล์ JavaScript ของ Bootstrap 4 (และโปรโตไทป์ Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-XpB/BjEKTgWSnx5+E48DTZOzTp4xQD60luEa4s7vvTfKCmTxhqV5L6GOaF0KcNyH" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shCk+5KVcYMhL8cYY3tuJ+8ebBvEhaCACyT6T" crossorigin="anonymous"></script>

    <!-- สไตล์เพิ่มเติม -->

</head>
<style>
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


        <nav class="col-md-8 col-12 navbar navbar-expand-lg navbar-light nav-color" style="background-color:  #F9C623;">
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

    <div class="row" style="background-color: #D9D9D9;">
        <div class="container-cs">
            <p class="font-40 lg-margin-t-3 "> Seminar </p>
        </div>
    </div>

    <div class="row lg-margin-t-4">
        <div class="container-cs">
            <div class="row">
                <div class="col-auto">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active box-menu font-28-w " id="all-tab" data-toggle="tab" href="#all" role="tab" aria-controls="all" aria-selected="true">ทั้งหมด</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link box-menu font-28-w " id="seminar-tab" data-toggle="tab" href="#seminar" role="tab" aria-controls="seminar" aria-selected="false">สัมมนา</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link box-menu font-28-w " id="online-seminar-tab" data-toggle="tab" href="#online-seminar" role="tab" aria-controls="online-seminar" aria-selected="false">สัมมนา Online</a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container-cs">
        <div class="tab-content" id="myTabContent">

            <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tab">

                <!----------------------------------------------------------------start Row1 ---------------------------------------------------------------->
                <div class="row">

                    <div class="col-md-4 col-12 ">

                        <img src="<?php echo base_url('assets/images/cat2.png') ?>" class="img-fluid" style="width: 100%;">
                        <div class="container border-bottom3 " style="width:98%; margin-top:-5px;">
                            <div class="row">
                                <div class="col-auto">
                                    <div class="box-type1">

                                        <img src="<?php echo base_url('assets/images/map-pin.svg') ?>" class=" ml-2 mb-1" style="display: inline-block;">
                                        <p class="font-16 mt-1 " style="display: inline-block;">สัมมนา</p>
                                    </div>
                                </div>
                            </div>


                            <div class="row mt-2 ">
                                <div class="col-11 hover-color-yellow">
                                    <a href="<?php echo base_url('Events/info'); ?>" class="font-20-l" style="text-decoration: none;">งานสัมมนา Top 10 Technology & Cyber Security Trends and Updates 2024</a>
                                </div>
                            </div>
                            <div class="row mt-2" style="margin-bottom:20px;">
                                <div class="col-12">

                                    <img src="<?php echo base_url('assets/images/calendar1.svg') ?>">
                                    <span class="font-20 lg-margin-l-8 lg-margin-r ">20 กุมภาพันธ์ 2567</span><br class="mobile-only">
                                    <img src="<?php echo base_url('assets/images/calendar.svg') ?>">
                                    <span class="font-20 lg-margin-l-8 ">14.00-16.00 น.</span>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!----------------------------------------------------------------saminar1 ---------------------------------------------------------------->
                    <div class="col-md-4 col-12">
                        <img src="<?php echo base_url('assets/images/cat2.png') ?>" class="img-fluid" style="width: 100%;">
                        <div class="container border-bottom3 " style="width:98%; margin-top:-5px;">
                            <div class="row">
                                <div class="col-auto">
                                    <div class="box-type1">
                                        <img src="<?php echo base_url('assets/images/map-pin.svg') ?>" class=" ml-2 mb-1" style="display: inline-block;">
                                        <p class="font-16 mt-1 " style="display: inline-block;">สัมมนา</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-11 hover-color-yellow">
                                    <a href="<?php echo base_url('Events/info'); ?>" class="font-20-l" style="text-decoration: none;">งานสัมมนา Top 10 Technology & Cyber Security Trends and Updates 2024</a>
                                </div>
                            </div>
                            <div class="row mt-2 " style="margin-bottom:20px;">
                                <div class="col-12">
                                    <img src="<?php echo base_url('assets/images/calendar1.svg') ?>">
                                    <span class="font-20 lg-margin-l-8 lg-margin-r ">20 กุมภาพันธ์ 2567</span><br class="mobile-only">
                                    <img src="<?php echo base_url('assets/images/calendar.svg') ?>">
                                    <span class="font-20 lg-margin-l-8 ">14.00-16.00 น.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!----------------------------------------------------------------saminar2 ---------------------------------------------------------------->
                    <div class="col-md-4 col-12">
                        <img src="<?php echo base_url('assets/images/cat2.png') ?>" class="img-fluid" style="width: 100%;">
                        <div class="container border-bottom4 " style="width:98%; margin-top:-5px;">
                            <div class="row">
                                <div class="col-auto">
                                    <div class="box-type2">
                                        <img src="<?php echo base_url('assets/images/tv_signinonline.svg') ?>" class="mr-1 mb-1" style="display: inline-block;">
                                        <p class="font-16-o mt-1 " style="display: inline-block;">สัมมนา online</p>

                                    </div>
                                </div>
                            </div>
                            <div class="row mt-2 ">
                                <div class="col-11">
                                    <a href="<?php echo base_url('Events/infoonline'); ?>" class="font-20-l" style="text-decoration: none;">งานสัมมนา Top 10 Technology & Cyber Security Trends and Updates 2024</a>
                                </div>
                            </div>
                            <div class="row mt-2 " style="margin-bottom:20px;">
                                <div class="col-12">

                                    <img src="<?php echo base_url('assets/images/vector-o.svg') ?>">
                                    <span class="font-20 lg-margin-l-8 lg-margin-r ">20 กุมภาพันธ์ 2567</span><br class="mobile-only">
                                    <img src="<?php echo base_url('assets/images/clock.svg') ?>">
                                    <span class="font-20 lg-margin-l-8 ">14.00-16.00 น.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!----------------------------------------------------------------saminar3 ---------------------------------------------------------------->

                <!----------------------------------------------------------------start row2 ---------------------------------------------------------------->
                <div class="row lg-margin-t-5 ">

                    <div class="col-md-4 col-12 ">
                        <img src="<?php echo base_url('assets/images/cat2.png') ?>" class="img-fluid" style="width: 100%;">
                        <div class="container border-bottom3 " style="width:98%; margin-top:-5px;">
                            <div class="row">
                                <div class="col-auto">
                                    <div class="box-type1">
                                        <img src="<?php echo base_url('assets/images/map-pin.svg') ?>" class=" ml-2 mb-1" style="display: inline-block;">
                                        <p class="font-16 mt-1 " style="display: inline-block;">สัมมนา</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-2 ">
                                <div class="col-11 hover-color-yellow">
                                    <a href="<?php echo base_url('Events/info'); ?>" class="font-20-l" style="text-decoration: none;">งานสัมมนา Top 10 Technology & Cyber Security Trends and Updates 2024</a>
                                </div>
                            </div>
                            <div class="row mt-2 " style="margin-bottom:20px;">
                                <div class="col-12">
                                    <img src="<?php echo base_url('assets/images/calendar1.svg') ?>">
                                    <span class="font-20 lg-margin-l-8 lg-margin-r ">20 กุมภาพันธ์ 2567</span><br class="mobile-only">
                                    <img src="<?php echo base_url('assets/images/calendar.svg') ?>">
                                    <span class="font-20 lg-margin-l-8 ">14.00-16.00 น.</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!----------------------------------------------------------------saminar1 ---------------------------------------------------------------->
                    <div class="col-md-4 col-12">
                        <img src="<?php echo base_url('assets/images/cat2.png') ?>" class="img-fluid" style="width: 100%;">
                        <div class="container border-bottom3 " style="width:98%; margin-top:-5px;">
                            <div class="row">
                                <div class="col-auto">
                                    <div class="box-type1">
                                        <img src="<?php echo base_url('assets/images/map-pin.svg') ?>" class=" ml-2 mb-1" style="display: inline-block;">
                                        <p class="font-16 mt-1 " style="display: inline-block;">สัมมนา</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-2 ">
                                <div class="col-11 hover-color-yellow">
                                    <a href="<?php echo base_url('Events/info'); ?>" class="font-20-l" style="text-decoration: none;">งานสัมมนา Top 10 Technology & Cyber Security Trends and Updates 2024</a>
                                </div>
                            </div>
                            <div class="row mt-2 " style="margin-bottom:20px;">
                                <div class="col-12">
                                    <img src="<?php echo base_url('assets/images/calendar1.svg') ?>">
                                    <span class="font-20 lg-margin-l-8 lg-margin-r ">20 กุมภาพันธ์ 2567</span><br class="mobile-only">
                                    <img src="<?php echo base_url('assets/images/calendar.svg') ?>">
                                    <span class="font-20 lg-margin-l-8 ">14.00-16.00 น.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!----------------------------------------------------------------saminar2 ---------------------------------------------------------------->
                    <div class="col-md-4 col-12">
                        <img src="<?php echo base_url('assets/images/cat2.png') ?>" class="img-fluid" style="width: 100%;">
                        <div class="container border-bottom4 " style="width:98%; margin-top:-5px;">
                            <div class="row">
                                <div class="col-auto">
                                    <div class="box-type2">
                                        <img src="<?php echo base_url('assets/images/tv_signinonline.svg') ?>" class="mr-1 mb-1" style="display: inline-block;">
                                        <p class="font-16-o mt-1 " style="display: inline-block;">สัมมนา online</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-2 ">
                                <div class="col-11">
                                    <a href="<?php echo base_url('Events/infoonline'); ?>" class="font-20-l" style="text-decoration: none;">งานสัมมนา Top 10 Technology & Cyber Security Trends and Updates 2024</a>
                                </div>
                            </div>
                            <div class="row mt-2 " style="margin-bottom:20px;">
                                <div class="col-12">
                                    <img src="<?php echo base_url('assets/images/vector-o.svg') ?>">
                                    <span class="font-20 lg-margin-l-8 lg-margin-r ">20 กุมภาพันธ์ 2567</span><br class="mobile-only">
                                    <img src="<?php echo base_url('assets/images/clock.svg') ?>">
                                    <span class="font-20 lg-margin-l-8 ">14.00-16.00 น.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!----------------------------------------------------------------saminar3 ---------------------------------------------------------------->

                <!----------------------------------------------------------------start row3 ---------------------------------------------------------------->
                <div class="row lg-margin-t-5 margin-bt-1">

                    <div class="col-md-4 col-12 ">
                        <img src="<?php echo base_url('assets/images/cat2.png') ?>" class="img-fluid" style="width: 100%;">
                        <div class="container border-bottom3 " style="width:98%; margin-top:-5px;">
                            <div class="row">
                                <div class="col-auto">
                                    <div class="box-type1">
                                        <img src="<?php echo base_url('assets/images/map-pin.svg') ?>" class=" ml-2 mb-1" style="display: inline-block;">
                                        <p class="font-16 mt-1 " style="display: inline-block;">สัมมนา</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-2 ">
                                <div class="col-11 hover-color-yellow">
                                    <a href="<?php echo base_url('Events/info'); ?>" class="font-20-l" style="text-decoration: none;">งานสัมมนา Top 10 Technology & Cyber Security Trends and Updates 2024</a>
                                </div>
                            </div>
                            <div class="row mt-2 " style="margin-bottom:20px;">
                                <div class="col-12">
                                    <img src="<?php echo base_url('assets/images/calendar1.svg') ?>">
                                    <span class="font-20 lg-margin-l-8 lg-margin-r ">20 กุมภาพันธ์ 2567</span><br class="mobile-only">
                                    <img src="<?php echo base_url('assets/images/calendar.svg') ?>">
                                    <span class="font-20 lg-margin-l-8 ">14.00-16.00 น.</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!----------------------------------------------------------------saminar1 ---------------------------------------------------------------->
                    <div class="col-md-4 col-12">
                        <img src="<?php echo base_url('assets/images/cat2.png') ?>" class="img-fluid" style="width: 100%;">
                        <div class="container border-bottom3 " style="width:98%; margin-top:-5px;">
                            <div class="row">
                                <div class="col-auto">
                                    <div class="box-type1">
                                        <img src="<?php echo base_url('assets/images/map-pin.svg') ?>" class=" ml-2 mb-1" style="display: inline-block;">
                                        <p class="font-16 mt-1 " style="display: inline-block;">สัมมนา</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-2 ">
                                <div class="col-11 hover-color-yellow">
                                    <a href="<?php echo base_url('Events/info'); ?>" class="font-20-l" style="text-decoration: none;">งานสัมมนา Top 10 Technology & Cyber Security Trends and Updates 2024</a>
                                </div>
                            </div>
                            <div class="row mt-2 " style="margin-bottom:20px;">
                                <div class="col-12">
                                    <img src="<?php echo base_url('assets/images/calendar1.svg') ?>">
                                    <span class="font-20 lg-margin-l-8 lg-margin-r ">20 กุมภาพันธ์ 2567</span><br class="mobile-only">
                                    <img src="<?php echo base_url('assets/images/calendar.svg') ?>">
                                    <span class="font-20 lg-margin-l-8 ">14.00-16.00 น.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!----------------------------------------------------------------saminar2 ---------------------------------------------------------------->
                    <div class="col-md-4 col-12">
                        <img src="<?php echo base_url('assets/images/cat2.png') ?>" class="img-fluid" style="width: 100%;">
                        <div class="container border-bottom4 " style="width:98%; margin-top:-5px;">
                            <div class="row">
                                <div class="col-auto">
                                    <div class="box-type2">
                                        <img src="<?php echo base_url('assets/images/tv_signinonline.svg') ?>" class="mr-1 mb-1" style="display: inline-block;">
                                        <p class="font-16-o mt-1 " style="display: inline-block;">สัมมนา online</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-2 ">
                                <div class="col-11">
                                    <a href="<?php echo base_url('Events/infoonline'); ?>" class="font-20-l" style="text-decoration: none;">งานสัมมนา Top 10 Technology & Cyber Security Trends and Updates 2024</a>
                                </div>
                            </div>
                            <div class="row mt-2 " style="margin-bottom:20px;">
                                <div class="col-12">

                                    <img src="<?php echo base_url('assets/images/vector-o.svg') ?>">
                                    <span class="font-20 lg-margin-l-8 lg-margin-r ">20 กุมภาพันธ์ 2567</span><br class="mobile-only">
                                    <img src="<?php echo base_url('assets/images/clock.svg') ?>">
                                    <span class="font-20 lg-margin-l-8 ">14.00-16.00 น.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!----------------------------------------------------------------saminar3 ---------------------------------------------------------------->
            </div>
            <!----------------------------------------------------------------end tab 1---------------------------------------------------------------->













            <!----------------------------------------------------------------start tab 2---------------------------------------------------------------->

            <div class="tab-pane fade" id="seminar" role="tabpanel" aria-labelledby="seminar-tab">
                <!----------------------------------------------------------------start Row1 ---------------------------------------------------------------->
                <div class="row margin-t-5 ">

                    <div class="col-md-4 col-12 ">
                        <img src="<?php echo base_url('assets/images/cat2.png') ?>" class="img-fluid" style="width: 100%;">
                        <div class="container border-bottom3 " style="width:98%; margin-top:-5px;">
                            <div class="row">
                                <div class="col-auto">
                                    <div class="box-type1">
                                        <img src="<?php echo base_url('assets/images/map-pin.svg') ?>" class=" ml-2 mb-1" style="display: inline-block;">
                                        <p class="font-16 mt-1 " style="display: inline-block;">สัมมนา</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-2 ">
                                <div class="col-11 hover-color-yellow">
                                    <a href="<?php echo base_url('Events/info'); ?>" class="font-20-l" style="text-decoration: none;">งานสัมมนา Top 10 Technology & Cyber Security Trends and Updates 2024</a>
                                </div>
                            </div>
                            <div class="row mt-2 " style="margin-bottom:20px;">
                                <div class="col-12">
                                    <img src="<?php echo base_url('assets/images/calendar1.svg') ?>">
                                    <span class="font-20 lg-margin-l-8 lg-margin-r ">20 กุมภาพันธ์ 2567</span><br class="mobile-only">
                                    <img src="<?php echo base_url('assets/images/calendar.svg') ?>">
                                    <span class="font-20 lg-margin-l-8 ">14.00-16.00 น.</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!----------------------------------------------------------------saminar1 ---------------------------------------------------------------->
                    <div class="col-md-4 col-12">
                        <img src="<?php echo base_url('assets/images/cat2.png') ?>" class="img-fluid" style="width: 100%;">
                        <div class="container border-bottom3 " style="width:98%; margin-top:-5px;">
                            <div class="row">
                                <div class="col-auto">
                                    <div class="box-type1">
                                        <img src="<?php echo base_url('assets/images/map-pin.svg') ?>" class=" ml-2 mb-1" style="display: inline-block;">
                                        <p class="font-16 mt-1 " style="display: inline-block;">สัมมนา</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-2 ">
                                <div class="col-11 hover-color-yellow">
                                    <a href="<?php echo base_url('Events/info'); ?>" class="font-20-l" style="text-decoration: none;">งานสัมมนา Top 10 Technology & Cyber Security Trends and Updates 2024</a>
                                </div>
                            </div>
                            <div class="row mt-2 " style="margin-bottom:20px;">
                                <div class="col-12">
                                    <img src="<?php echo base_url('assets/images/calendar1.svg') ?>">
                                    <span class="font-20 lg-margin-l-8 lg-margin-r ">20 กุมภาพันธ์ 2567</span><br class="mobile-only">
                                    <img src="<?php echo base_url('assets/images/calendar.svg') ?>">
                                    <span class="font-20 lg-margin-l-8 ">14.00-16.00 น.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!----------------------------------------------------------------saminar2 ---------------------------------------------------------------->
                    <div class="col-md-4 col-12">
                        <img src="<?php echo base_url('assets/images/cat2.png') ?>" class="img-fluid" style="width: 100%;">
                        <div class="container border-bottom3 " style="width:98%; margin-top:-5px;">
                            <div class="row">
                                <div class="col-auto">
                                    <div class="box-type1">
                                        <img src="<?php echo base_url('assets/images/map-pin.svg') ?>" class=" ml-2 mb-1" style="display: inline-block;">
                                        <p class="font-16 mt-1 " style="display: inline-block;">สัมมนา</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-2 ">
                                <div class="col-11 hover-color-yellow">
                                    <a href="<?php echo base_url('Events/info'); ?>" class="font-20-l" style="text-decoration: none;">งานสัมมนา Top 10 Technology & Cyber Security Trends and Updates 2024</a>
                                </div>
                            </div>
                            <div class="row mt-2 " style="margin-bottom:20px;">
                                <div class="col-12">
                                    <img src="<?php echo base_url('assets/images/calendar1.svg') ?>">
                                    <span class="font-20 lg-margin-l-8 lg-margin-r ">20 กุมภาพันธ์ 2567</span><br class="mobile-only">
                                    <img src="<?php echo base_url('assets/images/calendar.svg') ?>">
                                    <span class="font-20 lg-margin-l-8 ">14.00-16.00 น.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!----------------------------------------------------------------saminar3 ---------------------------------------------------------------->
                <!----------------------------------------------------------------start Row2 ---------------------------------------------------------------->
                <div class="row lg-margin-t-5 margin-bt-1 ">

                    <div class="col-md-4 col-12 ">
                        <img src="<?php echo base_url('assets/images/cat2.png') ?>" class="img-fluid" style="width: 100%;">
                        <div class="container border-bottom3 " style="width:98%; margin-top:-5px;">
                            <div class="row">
                                <div class="col-auto">
                                    <div class="box-type1">
                                        <img src="<?php echo base_url('assets/images/map-pin.svg') ?>" class=" ml-2 mb-1" style="display: inline-block;">
                                        <p class="font-16 mt-1 " style="display: inline-block;">สัมมนา</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-2 ">
                                <div class="col-11 hover-color-yellow">
                                    <a href="<?php echo base_url('Events/info'); ?>" class="font-20-l" style="text-decoration: none;">งานสัมมนา Top 10 Technology & Cyber Security Trends and Updates 2024</a>
                                </div>
                            </div>
                            <div class="row mt-2 " style="margin-bottom:20px;">
                                <div class="col-12">
                                    <img src="<?php echo base_url('assets/images/calendar1.svg') ?>">
                                    <span class="font-20 lg-margin-l-8 lg-margin-r ">20 กุมภาพันธ์ 2567</span><br class="mobile-only">
                                    <img src="<?php echo base_url('assets/images/calendar.svg') ?>">
                                    <span class="font-20 lg-margin-l-8 ">14.00-16.00 น.</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!----------------------------------------------------------------saminar1 ---------------------------------------------------------------->
                    <div class="col-md-4 col-12">
                        <img src="<?php echo base_url('assets/images/cat2.png') ?>" class="img-fluid" style="width: 100%;">
                        <div class="container border-bottom3 " style="width:98%; margin-top:-5px;">
                            <div class="row">
                                <div class="col-auto">
                                    <div class="box-type1">
                                        <img src="<?php echo base_url('assets/images/map-pin.svg') ?>" class=" ml-2 mb-1" style="display: inline-block;">
                                        <p class="font-16 mt-1 " style="display: inline-block;">สัมมนา</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-2 ">
                                <div class="col-11 hover-color-yellow">
                                    <a href="<?php echo base_url('Events/info'); ?>" class="font-20-l" style="text-decoration: none;">งานสัมมนา Top 10 Technology & Cyber Security Trends and Updates 2024</a>
                                </div>
                            </div>
                            <div class="row mt-2 " style="margin-bottom:20px;">
                                <div class="col-12">
                                    <img src="<?php echo base_url('assets/images/calendar1.svg') ?>">
                                    <span class="font-20 lg-margin-l-8 lg-margin-r ">20 กุมภาพันธ์ 2567</span><br class="mobile-only">
                                    <img src="<?php echo base_url('assets/images/calendar.svg') ?>">
                                    <span class="font-20 lg-margin-l-8 ">14.00-16.00 น.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!----------------------------------------------------------------saminar2 ---------------------------------------------------------------->
                    <div class="col-md-4 col-12">
                        <img src="<?php echo base_url('assets/images/cat2.png') ?>" class="img-fluid" style="width: 100%;">
                        <div class="container border-bottom3 " style="width:98%; margin-top:-5px;">
                            <div class="row">
                                <div class="col-auto">
                                    <div class="box-type1">
                                        <img src="<?php echo base_url('assets/images/map-pin.svg') ?>" class=" ml-2 mb-1" style="display: inline-block;">
                                        <p class="font-16 mt-1 " style="display: inline-block;">สัมมนา</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-2 ">
                                <div class="col-11 hover-color-yellow">
                                    <a href="<?php echo base_url('Events/info'); ?>" class="font-20-l" style="text-decoration: none;">งานสัมมนา Top 10 Technology & Cyber Security Trends and Updates 2024</a>
                                </div>
                            </div>
                            <div class="row mt-2 " style="margin-bottom:20px;">
                                <div class="col-12">
                                    <img src="<?php echo base_url('assets/images/calendar1.svg') ?>">
                                    <span class="font-20 lg-margin-l-8 lg-margin-r ">20 กุมภาพันธ์ 2567</span><br class="mobile-only">
                                    <img src="<?php echo base_url('assets/images/calendar.svg') ?>">
                                    <span class="font-20 lg-margin-l-8 ">14.00-16.00 น.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!----------------------------------------------------------------saminar3 ---------------------------------------------------------------->
            </div>
            <!----------------------------------------------------------------end tab 2 ---------------------------------------------------------------->










            <!----------------------------------------------------------------start tab3 ---------------------------------------------------------------->


            <div class="tab-pane fade" id="online-seminar" role="tabpanel" aria-labelledby="online-seminar-tab">
                <!----------------------------------------------------------------start Row1 ---------------------------------------------------------------->
                <div class="row margin-t-5 margin-bt-1 ">

                    <div class="col-md-4 col-12">
                        <img src="<?php echo base_url('assets/images/cat2.png') ?>" class="img-fluid" style="width: 100%;">
                        <div class="container border-bottom4 " style="width:98%; margin-top:-5px;">
                            <div class="row">
                                <div class="col-auto">
                                    <div class="box-type2">
                                        <img src="<?php echo base_url('assets/images/tv_signinonline.svg') ?>" class="mr-1 mb-1" style="display: inline-block;">
                                        <p class="font-16-o mt-1 " style="display: inline-block;">สัมมนา online</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-2 ">
                                <div class="col-11">
                                    <a href="<?php echo base_url('Events/infoonline'); ?>" class="font-20-l" style="text-decoration: none;">งานสัมมนา Top 10 Technology & Cyber Security Trends and Updates 2024</a>
                                </div>
                            </div>
                            <div class="row mt-2 " style="margin-bottom:20px;">
                                <div class="col-12">
                                    <img src="<?php echo base_url('assets/images/vector-o.svg') ?>">
                                    <span class="font-20 lg-margin-l-8 lg-margin-r ">20 กุมภาพันธ์ 2567</span><br class="mobile-only">
                                    <img src="<?php echo base_url('assets/images/clock.svg') ?>">
                                    <span class="font-20 lg-margin-l-8 ">14.00-16.00 น.</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!----------------------------------------------------------------saminar1 ---------------------------------------------------------------->
                    <div class="col-md-4 col-12">
                        <img src="<?php echo base_url('assets/images/cat2.png') ?>" class="img-fluid" style="width: 100%;">
                        <div class="container border-bottom4 " style="width:98%; margin-top:-5px;">
                            <div class="row">
                                <div class="col-auto">
                                    <div class="box-type2">
                                        <img src="<?php echo base_url('assets/images/tv_signinonline.svg') ?>" class="mr-1 mb-1" style="display: inline-block;">
                                        <p class="font-16-o mt-1 " style="display: inline-block;">สัมมนา online</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-2 ">
                                <div class="col-11">
                                    <a href="<?php echo base_url('Events/infoonline'); ?>" class="font-20-l" style="text-decoration: none;">งานสัมมนา Top 10 Technology & Cyber Security Trends and Updates 2024</a>
                                </div>
                            </div>
                            <div class="row mt-2 " style="margin-bottom:20px;">
                                <div class="col-12">
                                    <img src="<?php echo base_url('assets/images/vector-o.svg') ?>">
                                    <span class="font-20 lg-margin-l-8 lg-margin-r ">20 กุมภาพันธ์ 2567</span><br class="mobile-only">
                                    <img src="<?php echo base_url('assets/images/clock.svg') ?>">
                                    <span class="font-20 lg-margin-l-8 ">14.00-16.00 น.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!----------------------------------------------------------------saminar2 ---------------------------------------------------------------->
                    <div class="col-md-4 col-12">
                        <img src="<?php echo base_url('assets/images/cat2.png') ?>" class="img-fluid" style="width: 100%;">
                        <div class="container border-bottom4 " style="width:98%; margin-top:-5px;">
                            <div class="row">
                                <div class="col-auto">
                                    <div class="box-type2">
                                    
                                        <img src="<?php echo base_url('assets/images/tv_signinonline.svg') ?>" class="mr-1 mb-1" style="display: inline-block;">
                                        <p class="font-16-o mt-1 " style="display: inline-block;">สัมมนา online</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-2 ">
                                <div class="col-11">
                                    <a href="<?php echo base_url('Events/infoonline'); ?>" class="font-20-l" style="text-decoration: none;">งานสัมมนา Top 10 Technology & Cyber Security Trends and Updates 2024</a>
                                </div>
                            </div>
                            <div class="row mt-2 " style="margin-bottom:20px;">
                                <div class="col-12">
                                    <img src="<?php echo base_url('assets/images/vector-o.svg') ?>">
                                    <span class="font-20 lg-margin-l-8 lg-margin-r ">20 กุมภาพันธ์ 2567</span><br class="mobile-only">

                                    <img src="<?php echo base_url('assets/images/clock.svg') ?>">
                                    <span class="font-20 lg-margin-l-8 ">14.00-16.00 น.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!----------------------------------------------------------------saminar3 ---------------------------------------------------------------->
            </div>
        </div>
    </div>









    <script>
        // เมื่อคลิกที่แท็บ
        document.querySelectorAll('.nav-link').forEach(item => {
            item.addEventListener('click', event => {
                // เรียกใช้งานอนิเมชัน
                animateTabs();
            })
        });

        // ฟังก์ชันสำหรับเรียกใช้งานอนิเมชัน
        function animateTabs() {
            // เพิ่มหรือลบคลาส CSS เพื่อเริ่มต้นอนิเมชันใหม่
            document.querySelector('.tab-content').classList.remove('fadeIn');
            // จำลองการเรียกใช้งานอนิเมชันโดยการเพิ่มหรือลบคลาส CSS แล้วเพิ่มอีกครั้ง
            void document.querySelector('.tab-content').offsetWidth;
            document.querySelector('.tab-content').classList.add('fadeIn');
        }
    </script>


    <!-- เรียกใช้งาน Bootstrap JavaScript และ jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>