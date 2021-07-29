<?php include "simple_html_dom.php";?> 
<!DOCTYPE html>
<html lang="uk-UA">
<head>
    <!-- Required Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Автоматизований ресурс відслідковування акційної товарів роздрібної торгівлі.  Розробив Тимків Артурв для дипломної роботи">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Page Title -->
    <title>Свобода покупок</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/logo/favicon.png" type="image/x-icon">

    <!-- CSS Files -->
    <link rel="stylesheet" href="assets/css/bootstrap-4.1.3.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel="pingback" href="http://velmart.ua/xmlrpc.php">

</head>
<body>
    <!-- Preloader Starts -->
    <div class="preloader">
        <div class="spinner"></div>
    </div>
    <!-- Preloader End -->

    <!-- Header Area Starts -->
    <header class="header-area main-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="logo-area">
                         <a href="/">
                             <img width="50" src="assets/images/logo/logo.png" alt="Logo"> <span class="logo_descr">Свобода покупок</span>
                         </a>
                    </div>                </div>
                <div class="col-lg-9">
                    <div class="custom-navbar">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>  
                    <div class="main-menu">
                        <ul>
                            <li class="active"><a href="/">Головна</a></li>
                            <li><a href="about.html">Про ресурс</a></li>
                            <li><a href="news.html">Новини</a></li>
                            <li><a href="contact.html">Контакти</a></li>
                            <li class="menu-btn">
                                <a href="#" class="template-btn">Перейти до покупок</a>
                                <ul class="sub-menu">
                                    <li><a href="blog-home.html"><img src="assets/images/img_shop/silpo-50.png"></a></li>
                                    <li><a href="blog-details.html"><img src="assets/images/img_shop/atb-50.png"></a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->

    <!-- Banner Area Starts -->
    <section class="banner-area banner-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-text text-center">
                        <h3>Відслідковування акційних товарів роздрібної торгівлі<span class="bg-blue"> відповідно до території</span> </h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Area End -->

    <section class="about-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <button class="accordion"><img src="assets/images/img_shop/silpo-50.png">Сільпо</button>
                    <div class="panels">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    Акційні товари заборонено парсити адміністрацією магазину
                                    <?php
             //                            $urlstartsilpo = 'https://silpo.ua/offers/cina-tizhnya';
    									// $html = file_get_html($urlstartsilpo);
             //                            for ($k=0; $k < 50; $k++) { 
             //                                foreach($html->find('div.page-generator') as $articlesilpo) {
                                                
             //                                }
             //                                // foreach ($itemsilpo as  $valusilpo) {
             //                                    echo $articlesilpo;
             //                                // }
             //                            }
                                    ?>   
                                </div>
                            </div>
                        </div>
                    </div>

                    <button class="accordion"><img src="assets/images/img_shop/eurospar-50.png">Eurospar</button>
                    <div class="panels">
                        <div class="container">

                            <div class="row">
                                <div class="col-lg-12">
                                    <h4 class="text-black text-center">Товари Відсутні</h4>          
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- товари тільки у картинках -->
                    <button class="accordion"><img src="assets/images/img_shop/metro-50.png">METRO</button>
                    <div class="panels">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <?php
                                        $htmlmetro1 = file_get_html('https://www.metro.ua/Promotions/uvaga-tsinova-perevaga/dairy?itm_pm=ua:ncp:ctr:pt:3:5');

                                        foreach($htmlmetro1->find('div.image-teaser-component') as $articlemetro){
        
                                            }
                                            echo $articlemetro;

                                        $htmlmetro2 = file_get_html('https://www.metro.ua/Promotions/uvaga-tsinova-perevaga/ryba?itm_pm=ua:ncp:ctr:pt:3:6');

                                        foreach($htmlmetro2->find('div.image-teaser-component') as $articlemetro1){
        
                                            }
                                            echo $articlemetro1;
                                        $htmlmetro3 = file_get_html('https://www.metro.ua/Promotions/uvaga-tsinova-perevaga/dairy?itm_pm=ua:ncp:ctr:pt:3:7');

                                        foreach($htmlmetro3->find('div.image-teaser-component') as $articlemetro2){
        
                                            }
                                            echo $articlemetro2;
                                        $htmlmetro4 = file_get_html('https://www.metro.ua/Promotions/uvaga-tsinova-perevaga/kovbasni?itm_pm=ua:ncp:ctr:pt:4:5');

                                        foreach($htmlmetro4->find('div.image-teaser-component') as $articlemetro3){
        
                                            }
                                            echo $articlemetro3;
                                        $htmlmetro5 = file_get_html('https://www.metro.ua/Promotions/uvaga-tsinova-perevaga/bakaliia?itm_pm=ua:ncp:ctr:pt:4:6');

                                        foreach($htmlmetro5->find('div.image-teaser-component') as $articlemetro4){
        
                                            }
                                            echo $articlemetro4;
                                        $htmlmetro6 = file_get_html('https://www.metro.ua/Promotions/uvaga-tsinova-perevaga/sweets?itm_pm=ua:ncp:ctr:pt:4:7');

                                        foreach($htmlmetro6->find('div.image-teaser-component') as $articlemetro5){
        
                                            }
                                            echo $articlemetro5;
                                        $htmlmetro7 = file_get_html('https://www.metro.ua/Promotions/uvaga-tsinova-perevaga/hot?itm_pm=ua:ncp:ctr:pt:5:5');

                                        foreach($htmlmetro7->find('div.image-teaser-component') as $articlemetro6){
        
                                            }
                                            echo $articlemetro6;
                                        $htmlmetro8 = file_get_html('https://www.metro.ua/Promotions/uvaga-tsinova-perevaga/bezalko?itm_pm=ua:ncp:ctr:pt:5:6');

                                        foreach($htmlmetro8->find('div.image-teaser-component') as $articlemetro7){
        
                                            }
                                            echo $articlemetro7;
                                        $htmlmetro9 = file_get_html('https://www.metro.ua/Promotions/uvaga-tsinova-perevaga/beer?itm_pm=ua:ncp:ctr:pt:5:7');

                                        foreach($htmlmetro9->find('div.image-teaser-component') as $articlemetro8){
        
                                            }
                                            echo $articlemetro8;
                                        $htmlmetro10 = file_get_html('https://www.metro.ua/Promotions/uvaga-tsinova-perevaga/spirits?itm_pm=ua:ncp:ctr:pt:6:5');

                                        foreach($htmlmetro10->find('div.image-teaser-component') as $articlemetro9){
        
                                            }
                                            echo $articlemetro9;
                                        $htmlmetro11 = file_get_html('https://www.metro.ua/Promotions/uvaga-tsinova-perevaga/spirits?itm_pm=ua:ncp:ctr:pt:6:6');

                                        foreach($htmlmetro11->find('div.image-teaser-component') as $articlemetro10){
        
                                            }
                                            echo $articlemetro10;
                                        $htmlmetro12 = file_get_html('https://www.metro.ua/Promotions/uvaga-tsinova-perevaga/spirits?itm_pm=ua:ncp:ctr:pt:6:7');

                                        foreach($htmlmetro12->find('div.image-teaser-component') as $articlemetro11){
        
                                            }
                                            echo $articlemetro11;
                                        $htmlmetro13 = file_get_html('https://www.metro.ua/Promotions/uvaga-tsinova-perevaga/kitchen?itm_pm=ua:ncp:ctr:pt:7:5');

                                        foreach($htmlmetro13->find('div.image-teaser-component') as $articlemetro12){
        
                                            }
                                            echo $articlemetro12;
                                    ?>         
                                </div>
                            </div>
                        </div>
                    </div>

                    <button class="accordion"><img src="assets/images/img_shop/spar-2-50.png">SPAR</button>
                    <div class="panels">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h4 class="text-black text-center">Товари Відсутні</h4>          
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="accordion"><img src="assets/images/img_shop/tor-ba-50.png">TOR-BA</button>
                    <div class="panels">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h4 class="text-black text-center">Товари Відсутні</h4>          
                                </div>
                            </div>
                        </div>
                    </div>

                    <button class="accordion"><img src="assets/images/img_shop/arsen-50.png">Арсен</button>
                    <div class="panels">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <?php
                                        // $htmlevrotek = file_get_html('http://evrotek.com/ua/arsen/akcii-tovar-nedeli/?cityID=2');
                                        // foreach($htmlevrotek->find('div.img') as $articleevrotek){
                                        // }
                                        // echo $articleevrotek;
                                    ?>             
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="accordion"><img src="assets/images/img_shop/velmart-50.png">Велмарт</button>
                    <div class="panels">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <?php
                                        // $htmlvelmart = file_get_html('http://velmart.ua/product-of-week/');

                                        // foreach($htmlvelmart->find('div.jet-woo-products') as $articlevelmart){
        
                                        // }
                                        // echo $articlevelmart;
                                    ?>          
                                </div>
                            </div>
                        </div>
                    </div>

                    <button class="accordion"><img src="assets/images/img_shop/eko-market-50.png">Еко Маркет</button>
                    <div class="panels">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <?php
                                        // $htmlmarket = file_get_html('https://www.eko.com.ua/ua/action/single/1/?aid=72');

                                        // foreach($htmlmarket->find('div.singleContainer') as $elementmarket)
                                        // echo $elementmarket;
                                         ?> <img src="<?php  echo $elementmarket->src; ?>"> <?php
                                               
                                    ?>        
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Тільки у магазині -->
                    <button class="accordion"><img src="assets/images/img_shop/myasomarket-50.png">М’ясомаркет</button>
                    <div class="panels">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <p class="te[text-center"><strong>Участь в Акції</strong><br> 
                                        2.1.Учасником Акції можуть бути будь-які громадяни України, які проживають на території
                                        України та досягли повноліття (18 років), які ретельно виконали всі дії, необхідні для участі в Акції,
                                        зазначені в цих Правилах, та зареєстровані в програмі лояльності «Сімейний Гаманець» (надалі —
                                        «Учасник» або «Учасники»). Фактом участі в Акції кожен Учасник підтверджує свою повну згоду з
                                        усіма умовами даних Офіційних Правил.
                                        2.2. Учасниками Акції не визнаються і не мають права брати участь в Акції:
                                        1) працівники та представники Виконавця / Організатора Акції та будь-яких інших компаній, які
                                        безпосередньо беруть участь в підготовці та проведенні Акції;
                                        2) чоловік або дружина осіб, перелічених в підпункті 1) п.2.2. цих Правил, а також найближчі родичі
                                        (діти, брати/сестри, батьки);
                                        3) особи, яким, на момент проведення Акції, ще не виповнилось 18 років.
                                        </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <button class="accordion"><img src="assets/images/img_shop/rukavichka-50.png">Рукавичка</button>
                    <div class="panels">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <?php
            //                             $htmlrukavychka = file_get_html('https://rukavychka.ua/products/');

            //                             foreach($htmlrukavychka->find('div.product-list') as $articlerukavychka){
        
            //                                 }
            //                                 echo $articlerukavychka;
            //                             $urlstartrukavychka = 'https://rukavychka.ua/products/';
    								// 	$htmlrukavychka = file_get_html($urlstartrukavychka);
            //                             for ($k=0; $k < 50; $k++) { 
            //                                 foreach($htmlrukavychka->find('div.product-list') as $articlerukavychka) {
            //                                     $itemrukavychka['salename']     = $article->find('div.one-action-sale', $k)->outertext;
            //                                     $itemrukavychka['img'] ='<div class="one-action-thumb">
            //     <a href="javascript:void(0);" data-toggle="modal" data-target="#product_882"><img class="tov_img" src="https://www.atbmarket.com' . $article->find('div .one-action-thumb img', $k)->src . '"></a>
            // </div>';
            //                                     $item['name']    = $article->find('div.one-action-descr', $k)->outertext;
            //                                 }
            //                                 echo '<div class="one-action-item"> <div class="one-action-in">';
            //                                 foreach ($item as  $valu) {
            //                                     echo $valu . "<br/>";
            //                                 }
            //                                 echo '</div> </div>';
            //                             }
                                    ?>           
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="accordion"><img src="assets/images/img_shop/sirne-korolyvstvo-50.png">Сирне королівство</button>
                    <div class="panels">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h4 class="text-black text-center">Товари Відсутні</h4>          
                                </div>
                            </div>
                        </div>
                    </div>

                    <button class="accordion"><img src="assets/images/img_shop/furshet-50.png">Фуршет</button>
                    <div class="panels">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h4 class="text-black text-center">Товари Відсутні</h4>          
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="accordion"><img src="assets/images/img_shop/winetime-50.png">ТМ "WINETIME"</button>
                    <div class="panels">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h4 class="text-black text-center">Товари Відсутні</h4>          
                                </div>
                            </div>
                        </div>
                    </div>

                    <button class="accordion"><img src="assets/images/img_shop/atb-50.png"><span id="defaultOpen1">АТБ</span></button>
                    <div class="panels">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                	<div class="shop-list-body">
                                    <?php 
                                        $urlstart = 'https://www.atbmarket.com/uk/promo/akciya-ekonomiya';
    									$html = file_get_html($urlstart);
                                        for ($k=0; $k < 50; $k++) { 
                                            foreach($html->find('div.shop-list-wrap') as $article) {
                                                $item['salename']     = $article->find('div.one-action-sale', $k)->outertext;
                                                $item['img'] ='<div class="one-action-thumb">
                <a href="javascript:void(0);" data-toggle="modal" data-target="#product_882"><img class="tov_img" src="https://www.atbmarket.com' . $article->find('div .one-action-thumb img', $k)->src . '"></a>
            </div>';
                                                $item['name']    = $article->find('div.one-action-descr', $k)->outertext;
                                            }
                                            echo '<div class="one-action-item"> <div class="one-action-in">';
                                            foreach ($item as  $valu) {
                                                echo $valu . "<br/>";
                                            }
                                            echo '</div> </div>';
                                        }
                                    ?>  
                                    </div>          
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    
    <!-- Footer Area Starts -->
    <footer class="footer-area">
        <div class="footer-copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <span>
&copy;<script>document.write(new Date().getFullYear());</script> Розробив Тимків Артурв для  <a href="https://colorlib.com" target="_blank">дипломної роботи</a>All rights reserved 
</span>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Area End -->


    <!-- Javascript -->
    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
    <script src="assets/js/vendor/bootstrap-4.1.3.min.js"></script>
    <script src="assets/js/vendor/wow.min.js"></script>
    <script src="assets/js/main.js"></script>


</body>
</html>
