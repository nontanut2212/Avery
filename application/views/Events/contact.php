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

    <div class="row" style="background-color: #D9D9D9; margin-bottom:1000px;">
        <div class="container-cs">
            <p class="font-40 lg-margin-t-3 "> Contact </p>
        </div>
    </div>










    <!-- เรียกใช้งาน Bootstrap JavaScript และ jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>