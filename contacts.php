<?php include 'header.php' ?>

<link rel="stylesheet" href="css/contacts.css">

<div class="container-fluid p-0 mb-5">
    <div id="aboutUs">
        <div id="aboutUsBg">
            <div id="blackLayer">
                <div class="row d-flex align-items-end justify-content-center">
                    <h1 class="text-center col-lg-12">
                        LEARN MORE ABOUT US
                    </h1>
                    <a href="#" class="col-lg-12 brand-text"
                       style="z-index:1; width: fit-content; font-size: 30px; text-decoration: none;">
                        <img src="images/brand-icon.png" alt="Sushi Heaven Icon" style="width: 60px;
                                height: auto;"> Sushi Heaven
                    </a>
                </div>

            </div>
        </div>
        <div id="informationsAboutUs">
            <div class="container-fluid pl-5">
                <div class="row mt-5 ">
                    <div class="col-md-6  ml-5" style="margin-left: 100px; margin-right: 100px;" id="mapFinland">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1984.8289051439529!2d24.950312716180647!3d60.167011250617115!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46910b183d098b0d%3A0x7367e508c5613991!2sFinlandia%20Caviar%20Shop%20%26%20Restaurant!5e0!3m2!1sru!2s!4v1611154927892!5m2!1sru!2s"
                                width="100%" height="500px" frameborder="0"
                                style="border: 1px solid #111; border-radius: 10px;" tabindex="0"></iframe>

                    </div>
                    <div class="col-md-4 align-items-center">
                        <div class="myRow">
                            <div class="row">
                                <div class="icon col-md-2 mt-3" style="margin-top: 10px">
                                    <i class="fas fa-map-marker-alt fa-3x"></i>
                                </div>
                                <div class="content col-md-10">
                                    <h2 style="font-weight: 600;">Our Location:</h2>
                                    <p>Eteläranta 20, 00130 Helsinki, Finland</p>
                                </div>
                            </div>
                        </div>
                        <div class="myRow">
                            <div class="row">
                                <div class="icon col-md-2" style="margin-top: 10px">
                                    <i class="fas fa-mobile-alt fa-3x"></i>
                                </div>
                                <div class="col-md-10 content">
                                    <h2 style="font-weight: 600;">Call:</h2>
                                    <p>+358 40210 67 95</p>

                                </div>
                            </div>
                        </div>
                        <div class="myRow">
                            <div class="row">
                                <div class="icon col-md-2" style="margin-top: 10px">
                                    <i class="far fa-envelope fa-3x"></i>
                                </div>
                                <div class="col-md-10 content">
                                    <h2 style="font-weight: 600;">Email:</h2>
                                    <p>sushiheaven2021@gmail.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="contactMe" style="margin-top: 50px;">
        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
<!--                <form action="" method="post">-->
<!--                    First Name: <input type="text" name="first_name"><br>-->
<!--                    Last Name: <input type="text" name="last_name"><br>-->
<!--                    Email: <input type="text" name="email"><br>-->
<!--                    Message:<br><textarea rows="5" name="message" cols="30">adsadasaasdasd</textarea><br>-->
<!--                    <input type="submit" name="submit" value="Submit">-->
<!--                </form>-->
                <div class="col-md-8">
                    <h4 class="notification"></h4>
                    <h1 class="text-center">Contact Us</h1>
                    <form action="" method="post" id="myForm">
                        <div class="form-group">
                            <textarea name="message" id="message" cols="30" rows="5" class="form-control mb-4"
                                      placeholder="Message"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="text" id="name" class="form-control mb-4" placeholder="Your Name">
                        </div>
                        <div class="form-group mb-4">
                            <input type="email" id="email" name="email" class="form-control" placeholder="Your Email">
                        </div>
                        <div class="form-group text-center">
                                <button type="button" onclick="sendEmail()" value="Send an email" class="submitButton">Submit</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </div>
</div>
<script src="http://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    function sendEmail(){
        var name = $('#name');
        var email = $('#email');
        var message = $('#message');

        $.ajax({
            url: 'sendEmail.php',
            method: 'POST',
            dataType: 'json',
            data:{
                name: name.val(),
                email: email.val(),
                message: message.val(),
            }, success: function (response){
                $('#myForm')[0].reset();
                $('.notification').text("Message sent successfully.");
            }
        })
    }
</script>





<?php include 'footer.php' ?>
