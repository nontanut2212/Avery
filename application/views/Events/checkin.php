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
        /* ความยาวเท่ากับ col-12 */
        height: 36px;
        border-radius: 5px;
        border: 1px solid #ccc;
        padding: 10px;
    }
</style>


<body style="background-color:#F9F9F9">

    <div class="row lg-margin-t-reg ">
        <div class="col-md-12 col-auto text-center">

            <img src="<?php echo base_url('assets/images/logo-it.png') ?>" alt="Your Logo" class="img-fluid">
        </div>
    </div>

    <div class="container-reg margin-bt-1">

        <div class="row ">
            <div class="col-md-12 col-auto ">
                <p class="font-40 text-center mt-5 mb-5 ">Check in บูธ</p>
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
                        
                            <img src="<?php echo base_url('assets/images/calendar1.svg') ?>" class="lg-margin-r-1 ml-2">
                            <span class="font-20">20 กุมภาพันธ์ 2567</span>
                        </div>
                    </div>
                    <div class="col-12 " style="padding-left:0px">
                        <div style="margin-bottom:10px;">
                        
                            <img src="<?php echo base_url('assets/images/calendar.svg') ?>" class="lg-margin-r-1 ml-2">
                            <span class="font-20">14.00-16.00 น.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row ma-lr-reg mt-4 mb-4 border3"></div>

        <div class="row ma-lr-reg ">
            <div class="col-12 ">
                <p class="font-28 text-center">Name บูธ1 </p>
            </div>
        </div>

        <div class="row ma-lr-reg ">
            <div class="col-12 text-center">
            
                <img src="<?php echo base_url('assets/images/qr.svg') ?>" class="lg-margin-r-1 ml-2">
            </div>
        </div>

        <div class="row ma-lr-reg mt-3 ">
            <div class="col-12">
                <p class="font-28 text-center">Scan QR Code</p>
            </div>
        </div>


        <div class="row ma-lr-reg mt-4">
            <div class="col-12  mb-4 ">
                <form action="submit.php" method="post">
                    <label for="name"><span class="font-28">ใส่เลขทะเบียน</span></label><br>
                    <input type="text" id="num" name="num" class="form-control mb-3">
                </form>
            </div>
        </div>


        <div class="row ma-lr-reg mt-2">
            <div class="col-12 text-center mb-5 ">
                <div class="box-submit">
                    <p class="font-16-o text-center mt-2" id="show-result-1">Submit</p>
                </div>
            </div>
            <!--  -->
            <div class="modal fade" id="result-modal-1" tabindex="-1" role="dialog" aria-labelledby="profile-modal-label" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="profile-modal-label">Check in</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="container mt-3 mb-3">
                                <div class="row">
                                    <div class="col-12 text-center">
                                        <p class="font-28 mt-2">ไม่พบในรายชื่อ</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--  -->

            <!--  -->
            <div class="modal fade" id="result-modal-2" tabindex="-1" role="dialog" aria-labelledby="profile-modal-label" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="profile-modal-label">Check in</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="container mt-3 mb-3">
                                <div class="row">
                                    <div class="col-12 text-center">
                                        <p class="font-28 mt-2">ชื่อนี้เคย Chcek in แล้ว</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--  -->

        </div>


    </div>




    <script>
        $(document).ready(function() {
            $("#show-result-1").click(function() {
                $("#result-modal-1").modal("show");
            });
        });

        // $(document).ready(function() {
        //     $("#show-result-2").click(function() {
        //         $("#result-modal-2").modal("show");
        //     });
        // }); เงื่อนไข ชื่อนี้เคย check in ไปแล้ว
    </script>
    <!-- เรียกใช้งาน Bootstrap JavaScript และ jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>