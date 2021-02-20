 <?php include 'header.php' ?>

<link rel="stylesheet" href="css/menu.css">

<style>
    .fal, .fas{
        margin-right: 8px;
        cursor: pointer;
    }
    .star{
        margin-left: 300px; display: flex; justify-content: end;
    }
    #message{
        font-size: 24px;
        font-weight: 500;
        margin-top: -10px;
    }
    #message2{
        font-size: 24px;
        font-weight: 500;
        margin-top: -10px;
    }
    #message3{
        font-size: 24px;
        font-weight: 500;
        margin-top: -10px;
    }
    #message4{
        font-size: 24px;
        font-weight: 500;
        margin-top: -10px;
    }
</style>

        <div class="container container-main">
            <div class="row top-buffer">
                <div class="col-md-3">
                    <img src="images/ramsey.jfif" alt="Gordon Ramsey" class="ramsey">
                </div>
                <div class="col-md-9">
                    <p class="quote">
                        “The extension of the japanese soul is unbelievable in this menu. I wouldn’t hesitate to exchange all my Michelin stars and the left kidney for a chance to experience these delicacies again.”
                    </p>
                </div>
            </div>
            <div class="container sushi-img-over-text">
                <img src="images/sushi-rolls.jpg" alt="Sushi" class="sushi-img">
                <h1 class="sushi-text">
                    TOP-QUALITY STRAIGHT FROM THE BALTIC SEA SUSHI IN THE TOWN OF HäMEENLINNA
                </h1>
            </div>
            <div class="row top-buffer">
                <div class="col-lg-6 border-right">
                    <div class="row menu">
                        <div class="col-sm-6 col-img">
                            <img src="images/sushi1a.jpg" alt="Red Salmon Set" class="menu-img">
                        </div>
                        <div class="col-sm-6 menu-text">
                            <p>RED SALMON SET<br>
                            Red Salmon 7pcs<br>
                            Grilled Red Salmon 7pcs</p>
                        </div>
                        <div class="col-sm-12 star">
                            <i class="fas fa-star" id="iStar1" onclick="ckeckStar1()"></i>
                            <i class="fas fa-star" id="iStar2" onclick="ckeckStar2()"></i>
                            <i class="fas fa-star" id="iStar3" onclick="ckeckStar3()"></i>
                            <i class="fas fa-star" id="iStar4" onclick="ckeckStar4()"></i>
                            <i class="fas fa-star" id="iStar5" onclick="ckeckStar5()"></i>
                            <p id="message">0.0</p>
                        </div>
                    </div>
                    <div class="row menu">
                        <div class="col-sm-6 col-img">
                            <img src="images/sushi2a.jpg" alt="Avocado Salmon Set" class="menu-img">
                        </div>
                        <div class="col-sm-6 menu-text">
                            <p>AVOCADO SALMON SET<br>
                            Avocado Salmon 8pcs<br>
                            Grilled Avocado Salmon 7pcs</p>
                        </div>
                        <div class="col-sm-12 star">
                        <i class="fas fa-star" id="iStar21" onclick="ckeckStar21()"></i>
                            <i class="fas fa-star" id="iStar22" onclick="ckeckStar22()"></i>
                            <i class="fas fa-star" id="iStar23" onclick="ckeckStar23()"></i>
                            <i class="fas fa-star" id="iStar24" onclick="ckeckStar24()"></i>
                            <i class="fas fa-star" id="iStar25" onclick="ckeckStar25()"></i>
                            <p id="message2">0.0</p>
                        </div>
                    </div>
                    <div class="row menu">
                        <div class="col-sm-6 col-img">
                            <img src="images/sushi3a.jpg" alt="Mixed One Set" class="menu-img">
                        </div>
                        <div class="col-sm-6 menu-text">
                            <p>MIXED ONE SET<br>
                            Salmon 2pcs<br>
                            Grilled Red Salmon 8pcs<br>
                            Avocado 2pcs<br>
                            Prawn 2pcs</p>
                        </div>
                        <div class="col-sm-12 star">
                            <i class="fas fa-star" id="iStar31" onclick="ckeckStar31()"></i>
                            <i class="fas fa-star" id="iStar32" onclick="ckeckStar32()"></i>
                            <i class="fas fa-star" id="iStar33" onclick="ckeckStar33()"></i>
                            <i class="fas fa-star" id="iStar34" onclick="ckeckStar34()"></i>
                            <i class="fas fa-star" id="iStar35" onclick="ckeckStar35()"></i>
                            <p id="message3">0.0</p>
                        </div>
                    </div>
                    <div class="row menu">
                        <div class="col-sm-6 col-img">
                            <img src="images/sushi4a.jpg" alt="Mixed Two Set" class="menu-img">
                        </div>
                        <div class="col-sm-6 menu-text">
                            <p>MIXED TWO SET<br>
                            Unagi 2pcs<br>
                            Grilled Red Salmon 2pcs<br>
                            Avocado 2pcs<br>
                            Salmon Roll 6pcs<br>
                        </div>
                        <div class="col-sm-12 star">
                            <i class="fas fa-star" id="iStar41" onclick="ckeckStar41()"></i>
                            <i class="fas fa-star" id="iStar42" onclick="ckeckStar42()"></i>
                            <i class="fas fa-star" id="iStar43" onclick="ckeckStar43()"></i>
                            <i class="fas fa-star" id="iStar44" onclick="ckeckStar44()"></i>
                            <i class="fas fa-star" id="iStar45" onclick="ckeckStar45()"></i>
                            <p id="message4">0.0</p>
                        </div>
                    </div>
                </div>4
                <div class="col-lg-5 border-left">
                    <div class="row">
                        <p class="prices-text justify-content-center">
                            We are the proud bearers of the millenial sushi tradition. For us, the mission is to provide the authentic and quality experience of Japan to everyone. For that reason, we keep the prices same for each of the sushi sets.
                        <br><br>
                            And of course, you are most welcome to experience our fresh hand-made all-you-can-eat buffet.
                            <br><br>
                            Prices: <br>
                            Set.................................................18.00EUR
                            <br>
                            Buffet.......................................29.00EUR
                        </p>
                    </div>
                    <a href="#" class="btn btn-dark" role="button" aria-pressed="true">Wolt Delivery</a>
                    <a href="#" class="btn btn-dark" role="button" aria-pressed="true">Table Reservation</a>
                </div>
            </div>
        </div>
<script src="js/menu.js"></script>
<?php include 'footer.php' ?>
