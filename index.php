<?php include "connection/getData.php";?>
    <html>

    <head>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/jquery-ui.1.12.1.css">
        <title>Welcome to MLBB Draft Analysis</title>
        <link rel="shortcut icon" type="image/png" href="img/favicon.png" />
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-138965471-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());
            gtag('config', 'UA-138965471-1');
        </script>
    </head>

    <body>
        <iframe src="music/mlsoundtrack.mp3" allow="autoplay" style="display:none" id="iframeAudio"></iframe>
        <input type="hidden" name="team_power">
        <input type="hidden" name="enemy_power">
        <!-- Start popup BukanMaen -->
        <div class="BukanMain">
            <div class="row" style="height: 96vh;">
                <div class="col-md-3" style="text-align: center;">
                    <center class="title">Team Draft Pick</center>
                    <?php for($i=1; $i <=5; $i++): ?>
                        <div class="card mt-2">
                            <?php $class="p".$i; ?>
                                <div class="card-header" name="<?php echo $class; ?>"> Player
                                    <?php echo $i; ?> [Click here to choose hero] </div>
                                <div class="card-header card-detail row">
                                    <div class="col-md-6"> Core Item
                                        <div class="core-item"> <img width="20" class="hide" /> <img width="20" class="hide" /> <img width="20" class="hide" /> </div>
                                    </div>
                                </div>
                        </div>
                        <?php endfor; ?>
                </div>
                <div class="col-md-6">
                    <center class="title">ANALYSIS</center>
                    <hr/>
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-4"><b>Your Team</b></div>
                        <div class="col-md-4"><b>Enemy</b></div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-md-4 fs-18"><b>Win Chance Percentage</b></div>
                        <div class="col-md-4 fs-30 team_change_win">0%</div>
                        <div class="col-md-4 fs-30 enemy_change_win">0%</div>
                    </div>
                </div>
                <div class="col-md-3" style="text-align: center;">
                    <center class="title">Enemy Draft Pick</center>
                    <?php for($i=1; $i <=5; $i++): ?>
                        <div class="card mt-2">
                            <?php $class="ep".$i; ?>
                                <div class="card-header" name="<?php echo $class; ?>">Player
                                    <?php echo $i; ?> [Click here to choose hero] </div>
                                <div class="card-header card-detail row">
                                    <div class="col-md-6"> Counter Item
                                        <div class="counter-item"> <img width="20" class="hide" /> <img width="20" class="hide" /> <img width="20" class="hide" /> </div>
                                    </div>
                                    <div class="col-md-6"> Counter Hero
                                        <div class="counter-hero"> <img width="20" class="hide" /> <img width="20" class="hide" /> <img width="20" class="hide" /> </div>
                                    </div>
                                </div>
                        </div>
                        <?php endfor; ?>
                </div>
            </div>
            <div style="margin-left: 30%;"> <b class="fs-18">&copy; 2019 JagoGame.id All Rights Reserved | Version: 0.0.7</b>
                <div style="float: right; margin-right: 1%;">
                    <a class="fs-20 putih" href="https://api.whatsapp.com/send?phone=6281806440683" target="_blank"> <i class="fa fa-whatsapp">Vanesa Jaya</i> </a>
                    <a class="fs-20 putih" href="https://api.whatsapp.com/send?phone=6289626105445 " target="_blank"> <i class="fa fa-whatsapp">Mia Parulian</i> </a>
                    <a class="fs-20 putih" href="https://www.facebook.com/jagogame.id" target="_blank"> <i class="fa fa-facebook">eedback <i class="fa fa-thumbs-up"></i></i>
                    </a>
                </div>
            </div>
        </div>
        <!-- End popup Bukan Maen -->
        <!-- Start popup Hero -->
        <div class="modal fade" id="ModalHero" role="dialog">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-body">
                        <div id="HeroTabs">
                            <ul>
                                <li><a href="#HeroTabs-1">All Hero</a></li>
                                <li><a href="#HeroTabs-2">Tank</a></li>
                                <li><a href="#HeroTabs-3">Fighter</a></li>
                                <li><a href="#HeroTabs-4">Assasin</a></li>
                                <li><a href="#HeroTabs-5">Mage</a></li>
                                <li><a href="#HeroTabs-6">Marksman</a></li>
                                <li><a href="#HeroTabs-7">Support</a></li>
                            </ul>
                            <div id="HeroTabs-1">
                                <div class="row">
                                    <?php $allHeroes=get_data('m_heroes'); foreach($allHeroes as $hero): ?>
                                        <div class="col-md-2"> <img class="hero_img" src="img/heroes/<?php echo $hero['image'] ?>" name="<?php echo $hero['name']; ?>" power="<?php echo $hero['power']; ?>" title="<?php echo $hero['name']; ?>">
                                            <div>
                                                <?php echo $hero['name']; ?>
                                            </div>
                                        </div>
                                        <?php endforeach; ?>
                                </div>
                            </div>
                            <div id="HeroTabs-2">
                                <div class="row">
                                    <?php $Heroes=get_data('m_heroes','Tank'); foreach($Heroes as $hero): ?>
                                        <div class="col-md-2"> <img class="hero_img" src="img/heroes/<?php echo $hero['image'] ?>" name="<?php echo $hero['name']; ?>" power="<?php echo $hero['power']; ?>" title="<?php echo $hero['name']; ?>">
                                            <div>
                                                <?php echo $hero['name']; ?>
                                            </div>
                                        </div>
                                        <?php endforeach; ?>
                                </div>
                            </div>
                            <div id="HeroTabs-3">
                                <div class="row">
                                    <?php $Heroes=get_data('m_heroes','Fighter'); foreach($Heroes as $hero): ?>
                                        <div class="col-md-2"> <img class="hero_img" src="img/heroes/<?php echo $hero['image'] ?>" name="<?php echo $hero['name']; ?>" power="<?php echo $hero['power']; ?>" title="<?php echo $hero['name']; ?>">
                                            <div>
                                                <?php echo $hero['name']; ?>
                                            </div>
                                        </div>
                                        <?php endforeach; ?>
                                </div>
                            </div>
                            <div id="HeroTabs-4">
                                <div class="row">
                                    <?php $Heroes=get_data('m_heroes','Assassin'); foreach($Heroes as $hero): ?>
                                        <div class="col-md-2"> <img class="hero_img" src="img/heroes/<?php echo $hero['image'] ?>" name="<?php echo $hero['name']; ?>" power="<?php echo $hero['power']; ?>" title="<?php echo $hero['name']; ?>">
                                            <div>
                                                <?php echo $hero['name']; ?>
                                            </div>
                                        </div>
                                        <?php endforeach; ?>
                                </div>
                            </div>
                            <div id="HeroTabs-5">
                                <div class="row">
                                    <?php $Heroes=get_data('m_heroes','Mage'); foreach($Heroes as $hero): ?>
                                        <div class="col-md-2"> <img class="hero_img" src="img/heroes/<?php echo $hero['image'] ?>" name="<?php echo $hero['name']; ?>" power="<?php echo $hero['power']; ?>" title="<?php echo $hero['name']; ?>">
                                            <div>
                                                <?php echo $hero['name']; ?>
                                            </div>
                                        </div>
                                        <?php endforeach; ?>
                                </div>
                            </div>
                            <div id="HeroTabs-6">
                                <div class="row">
                                    <?php $Heroes=get_data('m_heroes','Marksman'); foreach($Heroes as $hero): ?>
                                        <div class="col-md-2"> <img class="hero_img" src="img/heroes/<?php echo $hero['image'] ?>" name="<?php echo $hero['name']; ?>" power="<?php echo $hero['power']; ?>" title="<?php echo $hero['name']; ?>">
                                            <div>
                                                <?php echo $hero['name']; ?>
                                            </div>
                                        </div>
                                        <?php endforeach; ?>
                                </div>
                            </div>
                            <div id="HeroTabs-7">
                                <div class="row">
                                    <?php $Heroes=get_data('m_heroes','Support'); foreach($Heroes as $hero): ?>
                                        <div class="col-md-2"> <img class="hero_img" src="img/heroes/<?php echo $hero['image'] ?>" name="<?php echo $hero['name']; ?>" power="<?php echo $hero['power']; ?>" title="<?php echo $hero['name']; ?>">
                                            <div>
                                                <?php echo $hero['name']; ?>
                                            </div>
                                        </div>
                                        <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer"> </div>
                </div>
            </div>
        </div>
        <!-- End popup Hero -->
        <!-- Start popup ModalInsight -->
        <div class="modal fade" id="ModalInsight" role="dialog">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header text-tengah">
                        <b>
                            <span class="hijau">Saran</span>, 
                            <span class="oren">Survey</span> & 
                            <span class="biru">Starlight Rewards</span>
                        </b>
                    </div>
                    <div class="modal-body">
                        <p><b>Hallo semua</b>,
                            <br/>
                            <br/>
                                <span class="abu-abu">
                                    Jagogame.id butuh masukan kalian nih tentang apa yang harus kami improve & yang kalian mau ada dijagogame.id
                                <br/><br/>
                                    Agar kedepannya jagogame.id ini bisa membantu kalian & lebih baik lagi</span>
                            <br/>
                            <br/><b>
                            <span class="hijau">1. Kalian bisa isi survey kami di</span>
                            <a href="http://bit.ly/jagogame" target="_blank">[Jagogame.id Survey]</a>
                            <br/><small> *Bila beruntung kalian bisa mendapatkan Starlight</small>
                            <br/>
                            <br/>
                                <span class="oren">2. Menghubungi kami melalui WhatsApp</span>
                                <a class="fs-20" href="https://api.whatsapp.com/send?phone=6281806440683" target="_blank"> <i class="fa fa-whatsapp">Vanesa Jaya</i> </a>
                                <a class="fs-20" href="https://api.whatsapp.com/send?phone=6289626105445 " target="_blank"> <i class="fa fa-whatsapp">Mia Parulian</i> </a>
                            <br/>
                            <br/>
                                <span class="biru">3.Follow Instagram dan DM Kami</span>
                            <a href="https://www.instagram.com/jagogame.id/?hl=id" target="_blank">[Jagogame.id Instagram]</a>
                            <br/>
                            <br/>
                                <span class="hijau">4. Fanspage Facebook kami</span>
                            <a href="https://www.facebook.com/jagogame.id" target="_blank">[Jagogame.id Facebook]</a>
                            </b><br/>
                            <br/>
                            Salam, <br/> <b>jagogame.id</b> :)
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary btnAsyiap">
                            Asyiappp <i class="fa fa-thumbs-up"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- End popup ModalInsigt -->

        <!-- Start popup Expekstasi -->
        <div class="modal fade" id="ModalEkspektasi" role="dialog">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header text-tengah">
                        <b><span class="hijau">Apa Ekspektasi kalian terhadap aplikasi ini?<span></b>
                    </div>
                    <div class="modal-body">
                        <input class="form-control et_email" placeholder="Email" />
                        <br/>
                        <textarea 
                            class="form-control ta_ekspektasi" 
                            placeholder="Masukkan Expekstasi kalian terhadap aplikasi ini, dan bisa juga berikan saran anda disini"></textarea>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary btnMantap">
                            Mantap <i class="fa fa-thumbs-up"></i>
                        </button>
                        <button class="btn btn-default btnSudahPernah">
                            Sudah Pernah <i class="fa fa-smile-o"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- End popup ModalEkspektasi -->
        <!-- Start popup Open Recrutment Team -->
        <!-- <div class="modal fade" id="ModalOpenReq" role="dialog">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header text-tengah">
                        <span class="hijau"><b>Be Our Team!</b><span>
                    </div>
                    <div class="modal-body">
                        <p>
                            Jagogame.id membuka peluang untuk <b>3</b> orang untuk dapat bergabung dengan TIM jagogame.id
                            <br/><br/>
                            Jika anda tertarik, dapat hubungi JAGOGAME.ID melalui WA/IG/FB/EMAIL :)
                            <br/><br/>
                            Kita akan latihan rutin, hingga mengikuti turnament-turnament
                            <br/><br/>
                            <b>DAN MENJADI JUARA...</b>
                            <br/><br/>
                            Syarat:
                            <ul>
                                <li>1. Minimal Legend<li>
                                <li>2. Winrate All Season min 55%<li>
                                <li>3. Bisa setidaknya 3 role<li>
                                <li>4. Lolos test skill (Custom your best hero, Your enemy best hero, Random Hero )<li>
                            </ul>
                            *Detail silakan hubungi kami
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-default btnFinish">
                            Finish <i class="fa fa-smile-o"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div> -->

        <div class="modal fade" id="ModalOpenReq" role="dialog">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header text-tengah">
                        <span class="hijau"><b>Turnamen Season 1 Jagogame.id</b><span>
                    </div>
                    <div class="modal-body">
                        <p><b>Turnamen Season 1 JAGOGAME.ID telah dibuka, yuk segera daftarkan TIM kalian dan menangkan turnamen ini!</b></p>
                        <img src="img/turnamen/1.jpg" style="height:60%;"/>
                    </div>
                    <div class="modal-footer">
                        <a href="http://www.bit.ly/JagoGameTurnamen" target="_blank">
                            <button class="btn btn-primary">
                                DAFTAR <i class="fa fa-smile-o"></i>
                            </button>
                        </a>
                            <button class="btn btn-default btnFinish">
                            OK
                        </button>
                    </div>
                </div>
            </div>
        </div>


        <!-- Circular Menu -->
        <?php
            include "menu.html";
        ?>
        <!-- End Circular Menu -->


        <!-- End popup Open Recrutment Team -->
        <script src="js/jquery-3.4.0.min.js"></script>
        <script src="js/jquery-ui.1.12.1.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/main.js"></script>
    </body>

    </html>