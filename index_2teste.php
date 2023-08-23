<?php
    include 'header.php'; 
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Amazon Finds (dps alterar titulo sla)</title>
    <style>
        .card {
            display: inline-block;
            width: 20%;
            margin-right: 10px;
            vertical-align: top;
            background-color: #F0F0F0;
        }
    </style>
</head>
<body>
    <header>
        <div class="px-3 py-2 bg-dark text-bg-dark border-bottom">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a class="navbar-brand" href="#">
                <img src="imgs/logo_teste.png" width="130" height="50" alt="Logo">
            </a>
            <a href="/" class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none">
                <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
            </a>
            
            <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
                
                <li>
                    <a href="#" class="nav-link text-white">
                    <i style="padding-left: 30%" class="fa fa-house"></i><br>
                        Home
                    </a>
                </li>

                <li>
                    <a href="https://www.tiktok.com/@amazonfinds_2k23" target="_blank" class="nav-link text-white">
                    <i style="padding-left: 35%" class="fa-brands fa-tiktok"></i><br>
                        TikTok
                    </a>
                </li>
            </ul>
            </div>
        </div>
        </div>
    </header>
    <div class="centrado">
        <div class="container text-center">
            <div class="row">
                <div class="col">
                <h6><b>Portable Air Compressor</b></h6>
                    <a href="https://www.amazon.com/dp/B0BXQX4PJ8?crid=23FR6CUNSF9KA&keywords=autosky+tire+inflator+portable+air+compressor&qid=1691719431&sprefix=autosky+tire+%2Caps%2C214&sr=8-1-spons&sp_csd=d2lkZ2V0TmFtZT1zcF9hdGY&psc=1&linkCode=li2&tag=tiktok0959-20&linkId=6cdb0d5c4c41518fb53fd59044d9dcb6&language=en_US&ref_=as_li_ss_il" target="_Blank">
                        <img src="//ws-na.amazon-adsystem.com/widgets/q?_encoding=UTF8&ASIN=B0BXQX4PJ8&Format=SL160&ID=AsinImage&MarketPlace=US&ServiceVersion=20070822&WS=1&tag=tiktok0959-20&language=en_US" class="img-thumbnail" alt="car air freshner">
                    </a>
                </div>
                <div class="col">
                    
                </div>
                <div class="col">
                    
                </div>
                <div class="col">
                    
                </div>
                <div class="col">
                    
                </div>
                <div class="col">
                    
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>
<script>
    $(document).ready(function() {
        $("#carro").hide();
        $("#carro2").hide();
        $("#carro3").hide();
        $("#card4").hide();
        $("#carro_esconder").hide();
        $("#esconder2").hide();
    });

    document.getElementById("carro").addEventListener("click", function() {
        window.open("https://amzn.to/3OyBWml", "_blank"); // Redirecionamento
    });

    document.getElementById("carro2").addEventListener("click", function() {
        window.open("https://amzn.to/3QxHtMo", "_blank"); // Redirecionamento
    });

    document.getElementById("carro3").addEventListener("click", function() {
        window.open("https://amzn.to/3Ytrd0K", "_blank"); // Redirecionamento
    });

    document.getElementById("carro_mostrar").addEventListener("click", function() {
        $("#carro").slideDown();
        $("#carro2").slideDown();
        $("#carro3").slideDown();
        $("#carro_esconder").show();
        $("#carro_mostrar").hide();
    });

    document.getElementById("carro_esconder").addEventListener("click", function() {
        $("#carro").slideUp();
        $("#carro2").slideUp();
        $("#carro3").slideUp();
        $("#carro_mostrar").show();
        $("#carro_esconder").hide();
    });

    document.getElementById("mostrar2").addEventListener("click", function() {
        $("#card4").slideDown();
        $("#esconder2").show();
        $("#mostrar2").hide();
    });

    document.getElementById("esconder2").addEventListener("click", function() {
        $("#card4").slideUp();
        $("#mostrar2").show();
        $("#esconder2").hide();
    });
</script>