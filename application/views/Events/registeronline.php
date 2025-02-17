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
    @media (min-width: 992px) {
        .ma-lr-reg {
            margin-left: 105px;
            margin-right: 105px;
        }
    }

    .form-control {
        width: 100%;
        height: 36px;
        border-radius: 5px;
        border: 1px solid #ccc;
        padding: 10px;
    }
</style>


<body style="background-color:#F9F9F9">

    <div class="row lg-margin-t-reg ">
        <div class="col-md-auto col-auto lg-margin-l-reg ">

            <img src="<?php echo base_url('assets/images/logo-it.png') ?>" alt="Your Logo" class="img-fluid">
        </div>
        <div class="col-md-auto col-auto text-center">

            <a href="<?php echo base_url('Events/infoonline'); ?>" class="font-24-black mt-4 ml-3 ">
                < ย้อนกลับ </a>
        </div>
    </div>

    <div class="container-reg mb-5">

        <div class="row ">
            <div class="col-md-12 col-auto ">
                <p class="font-40 text-center mt-5 mb-5 ">ลงทะเบียน</p>
            </div>
        </div>

        <div class="row ma-lr-reg">
            <div class="col-md-6 col-auto ">

                <img src="<?php echo base_url('assets/images/cat.png') ?>" class="img-fluid" style="width: 100%;">
            </div>
            <div class="col-md-6 col-auto ">
                <div class="row">
                    <p class="font-28 ml-2">งานสัมมนา Top 10 Technology & Cyber Security Trends and Updates 2024</p>
                </div>
                <div class="row">
                    <div class="col-12" style="padding-left:0px">
                        <div style="margin-bottom:10px;">

                            <img src="<?php echo base_url('assets/images/vector-o.svg') ?>" class="lg-margin-r-1 ml-2">
                            <span class="font-20">20 กุมภาพันธ์ 2567</span>
                        </div>
                    </div>
                    <div class="col-12 " style="padding-left:0px">
                        <div style="margin-bottom:10px;">

                            <img src="<?php echo base_url('assets/images/clock.svg') ?>" class="lg-margin-r-1 ml-1">
                            <span class="font-20">14.00-16.00 น.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row ma-lr-reg mt-4 mb-4 border3"></div>
        <div class="row ma-lr-reg ">
            <div class="col-12">
                <form id="registrationForm" action="finishonline" method="post">
                    <label for="name"><span class="font-16">ชื่อ</span><span class="required">*</span></label><br>
                    <input type="text" id="name" name="name" placeholder="Name1" class="form-control mb-3" required>
                    <label for="surname"><span class="font-16">นามสกุล</span><span class="required">*</span></label><br>
                    <input type="text" id="surname" name="surname" placeholder="subname" class="form-control mb-3" required>
                    <label for="email-com"><span class="font-16">อีเมล์บริษัท</span><span class="required">*</span></label><br>
                    <input type="email" id="email-com" name="email-com" placeholder="name@mail.com" class="form-control mb-3" required>
                    <label for="phone"><span class="font-16">เบอร์โทร</span><span class="required">*</span></label><br>
                    <input type="tel" id="phone" name="phone" placeholder="123456789" class="form-control mb-3" required>
                    <label for="companany"><span class="font-16">บริษัท</span><span class="required">*</span></label><br>
                    <input type="text" id="companany" name="companany" placeholder="บริษัท" class="form-control mb-3" required>
                    <label for="position"><span class="font-16">ตำแหน่ง</span><span class="required">*</span></label><br>
                    <input type="text" id="position" name="position" placeholder="ตำแหน่ง" class="form-control mb-3" required>
                    <label for="name"><span class="font-16">อีเมล์ส่วนตัว</span></label><br>
                    <input type="email" id="email" name="email" placeholder="name@mail.com" class="form-control mb-3">
                    <div class="row ma-lr-reg mt-5">
                        <div class="col-12 text-center mb-5 ">
                            <div class="box-cap ">
                                <div class="row mt-5 ">
                                    <div class="col-4">
                                        <img src="<?php echo base_url('assets/images/check_box.svg') ?>" class="lg-margin-r-1 ml-2 ">
                                    </div>
                                    <div class="col-8">
                                        <p class="font-16 ml-5">captcha robot</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 text-center mb-4">
                            <button class="box-reg-online" onclick="return validateForm()">
                                <p class="mt-3">ลงทะเบียน</p>
                            </button>
                        </div>


                    </div>
                </form>
            </div>
        </div>
    </div>







    <script>
        window.addEventListener('DOMContentLoaded', function() {
            var inputs = document.querySelectorAll('input');

            inputs.forEach(function(input) {
                // Store the initial placeholder value
                var initialPlaceholder = input.getAttribute('placeholder');

                input.addEventListener('focus', function() {
                    this.removeAttribute('placeholder');
                });

                input.addEventListener('blur', function() {
                    if (this.value === '') {
                        this.setAttribute('placeholder', initialPlaceholder);
                    }
                });
            });

            document.addEventListener('click', function(event) {
                if (event.target.tagName !== 'INPUT') {
                    // If the click is outside the input element, restore placeholders
                    inputs.forEach(function(input) {
                        var initialPlaceholder = input.getAttribute('placeholder');
                        if (input.value === '') {
                            input.setAttribute('placeholder', initialPlaceholder);
                        }
                    });
                }
            });
        });

        function validateForm() {
            var name = document.getElementById('name').value.trim();
            var surname = document.getElementById('surname').value.trim();
            var emailCompany = document.getElementById('email-com').value.trim();
            var phone = document.getElementById('phone').value.trim();
            var company = document.getElementById('companany').value.trim();
            var position = document.getElementById('position').value.trim();

            if (name === '' || surname === '' || emailCompany === '' || phone === '' || company === '' || position === '') {
                alert('โปรดกรอกข้อมูลให้ครบทุกช่องที่มีเครื่องหมาย *');
                return false;
            }
            return true;
        }
    </script>

</body>

</html>