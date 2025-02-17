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
        border: 1px solid #ccc;
        padding: 10px;
        border-radius: 0;
        /* กำหนดให้มุมขอบเป็น 0 เพื่อให้เป็นกล่อง input ที่มีขอบเหลี่ยม */
    }

    .form-control-half {
        width: 40%;
        height: 36px;
        border: 1px solid #ccc;
        padding: 10px;
        border-radius: 0;
        /* กำหนดให้มุมขอบเป็น 0 เพื่อให้เป็นกล่อง input ที่มีขอบเหลี่ยม */
    }

    .form-control:disabled,
    .form-control[readonly] {
        background-color: #ffffff;
        opacity: 1;
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



        <div class="row ma-lr-reg mt-4">
            <div class="col-12  mb-4 ">
                <div class="form-box">

                    <label for="name"><span class="font-16-black">เลขลงทะเบียน</span></label><br>
                    <input type="text" id="id" name="id" placeholder="ABC1234" class="form-control-half mb-3" readonly></br>
                    <label for="nameseminar"><span class="font-16">ชื่องานสัมมนาที่ลงทะเบียน</span></label><br>
                    <input type="text" id="nameseminar" name="nameseminar" placeholder="nameseminar" class="form-control mb-3" readonly>
                    <label for="boothname"><span class="font-16">ชื่อบูธ</span></label><br>
                    <input type="text" id="boothname" name="boothname" placeholder="Name บูธ 1" class="form-control mb-3" readonly>
                    <p class="font-16-check mt-3 mb-3">รายละเอียด</p>
                    <label for="name"><span class="font-16">ชื่อ</span></label><br>
                    <input type="text" id="name" name="name" placeholder="name" class="form-control mb-3" readonly>
                    <label for="surname"><span class="font-16">นามสกุล</span></label><br>
                    <input type="text" id="surname" name="surname" placeholder="subname" class="form-control mb-3" readonly>
                    <label for="companany"><span class="font-16">บริษัท</span></label><br>
                    <input type="text" id="companany" name="companany" placeholder="บริษัท" class="form-control mb-3" readonly>

                    <p class="font-16-check mt-3 mb-3">การประเมิน</p>

                    <label for="name"><span class="font-16"><strong>คำถามข้อที่ 1 :</strong>
                            บุคคลนี้เป็นคนที่มีอำนาจให้การตัดสินใจการจัดซื้อหรือคัดเลือกโซลูชั่นขององค์กรหรือไม่</span></label><br>

                    <div class="approval-group">
                        <input type="radio" id="approval-1-yes" name="approval_1" value="yes" class="mt-3 mb-4 mr-3">
                        <label for="approval-1-yes"> <span class="font-14 ">ใช่</span></label><br>

                        <input type="radio" id="approval-1-no" name="approval_1" value="no" class="mr-3">
                        <label for="approval-1-no" class="mb-4"> <span class="font-14 ">ไม่</span></label><br>
                    </div>

                    <label for="name"><span class="font-16"><strong>คำถามข้อที่ 2 : </strong>
                            บุคคลนี้มีแนวโน้มพัฒนาหรือกำลังมองหาบริการหรือโซลูชั่นด้าน IT มาใช้ในองค์กร หรือไม่</span></label><br>
                    <div class="approval-group">
                        <input type="radio" id="approval-2-yes" name="approval_2" value="yes" class="mt-3 mb-4 mr-3">
                        <label for="approval-2-yes"><span class="font-14 ">ต้องการเร่งด่วน</span></label><br>

                        <input type="radio" id="approval-2-no" name="approval_2" value="no" class="mr-3">
                        <label for="approval-2-no" class="mb-4"><span class="font-14 ">มองหาเพื่อเปรียบเทียบ</span></label><br>
                    </div>

                    <label for="name"><span class="font-16"><strong>คำถามข้อที่ 3 : </strong>
                            บุคคลนี้มีแนวโน้มในการสนใจบริการหรือโซลูชั่นของท่านหรือไม่</span></label><br>
                    <div class="approval-group">
                        <input type="radio" id="approval-3-yes" name="approval_3" value="yes" class="mt-3 mb-4 mr-3">
                        <label for="approval-3-yes"><span class="font-14 ">ใช่</span></label><br>

                        <input type="radio" id="approval-3-no" name="approval_3" value="no" class="mr-3">
                        <label for="approval-3-no" class="mb-4"><span class="font-14 ">ไม่</span></label><br>
                    </div>

                    <label for="name"><span class="font-16"><strong>คำถามข้อที่ 4 : </strong>
                            บุคคลนี้มีแนวโน้มน่าขยายผลการติดต่อเพื่อต่อยอดการขายหรือไม่</span></label><br>
                    <div class="approval-group">
                        <input type="radio" id="approval-4-yes" name="approval_4" value="yes" class="mt-3 mb-4 mr-3">
                        <label for="approval-4-yes"><span class="font-14 ">ใช่</span></label><br>

                        <input type="radio" id="approval-4-no" name="approval_4" value="no" class="mr-3">
                        <label for="approval-4-no" class="mb-4"><span class="font-14 ">ไม่</span></label><br>
                    </div>







                </div>
            </div>
        </div>


        <div class="row ma-lr-reg mt-2">
            <div class="col-12 text-center mb-5 ">
                <div class="box-checkin text-center">
                    <p class="font-16-o text-center mt-3" id="show-result-1">Check in</p>
                </div>
            </div>
            <!--  -->
            <div class="modal fade" id="result-modal-1" tabindex="-1" role="dialog" aria-labelledby="profile-modal-label" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">

                        <div class="modal-body">
                            <div class="container mt-3 mb-3">

                                <div class="row">
                                    <div class="col-12 text-center">

                                        <img src="<?php echo base_url('assets/images/correct.svg') ?>" class="img-fluid mb-5 mt-5">
                                    </div>
                                    <div class="col-12 text-center">
                                        <p class="font-28 mt-2 mb-5">Check in บูธ สำเร็จ</p>
                                    </div>
                                </div>
                            </div>
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

        function changeYes() {
            document.getElementById("yes").style.backgroundColor = "#4AA888";

        }

        function changeNo() {
            document.getElementById("no").style.backgroundColor = "#EB5757";

        }

        document.addEventListener("DOMContentLoaded", function() {
            // เลือกปุ่ม "Check in"
            var checkinButton = document.querySelector("#show-result-1");
            // เพิ่มเหตุการณ์ click ที่ปุ่ม "Check in"
            checkinButton.addEventListener("click", function() {
                // แสดง modal
                $('#result-modal-1').modal('show');
                // เพิ่มเหตุการณ์เมื่อ modal ถูกซ่อน
                $('#result-modal-1').on('hidden.bs.modal', function() {
                    // เปลี่ยนเส้นทางไปที่หน้า info หลังจากซ่อน modal
                    window.location.href = "<?php echo base_url('Events/checkin'); ?>";
                });
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