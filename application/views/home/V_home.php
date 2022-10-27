<style type="text/css">
    .slick-dots li button:before {
        content: "\2588\2588\2588\2588\2588";
    }
    time > .day {
        display: block;
        font-size: 50pt;
        font-weight: 100;
        line-height: 1;
    }

    time > .month {
        display: block;
        font-size: 20pt;
        font-weight: 900;
        line-height: 1;
    }
    time > .year {
        display: block;
        font-size: 35pt;
        font-weight: 900;
        line-height: 1.1;
    }

    time > span {
        display: none;
    }

    time {
        display: inline-block;
        width: 100%;
        color: rgb(255, 255, 255);
        padding: 5px;
        text-align: center;
        text-transform: uppercase;
        background-image: url(assets/img/logo/watermark.png);
        background-position: left;
        background-size: contain;
        background-repeat: no-repeat;
    }
    .purple-gradient {
        background: linear-gradient(88deg, #034087,#d71921, #fc3f00) !important;
    }
</style>
    
    <header class="masthead" role="banner"> 
        <div class="masthead-shell">
            <div class="primary-content ready-to-animate"> 
                <div class="titling bound"> 
                    <!-- <h1 class="product-name"> 
                    <span>Podomoro University</span> </h1>  -->
                    <p class="tagline" id="tagline">
                        <span style="color: #343a40">Where Future</span> 
                        <span style="color: #023f87">Entrepreneur Begins</span> 
                        <span style="color: #d71921">At</span> 
                        <span style="color: #a19467">Podomoro University</span> 
                    </p>
                </div> 
                    <section class="precis above-fold"> 
                        <div class="plate bound"> 
                            <div class="prose"> 
                                <h2>Go to Online Registration</h2> 
                                <p>Segala sesuatu yang Anda butuhkan untuk menjadi diri Anda yang paling produktif dan selalu terhubung—di rumah, saat bepergian, dan di mana saja.</p> 
                            </div> 
                            <div class="action"> 
                                <a href="" class="internal">
                                    <span>Registration</span></a> 
                            </div> 
                        </div> 
                    </section> 
                    <div class="mobile-cta" aria-hidden="true"> 
                        <div class="bound"> 
                            <h2>Go to Online Registration</h2> 
                            <div class="action-wrapper"> 
                                <div class="action"> 
                                    <a  class="internal">
                                        <span>Registration</span></a> 
                                </div> 
                            </div> 
                        </div> 
                    </div> 
                </div> 
                
            </div> 
    </header>
    <main>
    <!-- Trending Area Start -->
    <div class="trending-area fix">
        <div class="container">
            <div class="trending-main">
                <!-- Trending Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="trending-tittle">
                            
                            
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8">
                        <!-- Trending Top -->
                        <div class="trending-top mb-30">
                            
                            <div class="trend-top-img">
                                <img width="100%" src="assets/img/trending/trending_top.jpg" alt="">
                                <div class="trend-top-cap">
                                    <span>tes</span>
                                    <h2><a href="details.html">tset</a></h2>
                                </div>
                            </div>
                        </div>
                        <!-- Trending Bottom -->
                        <div class="trending-bottom">
                            <div class="row">
                                <div class="col-lg-4">
                                <div class="single-bottom mb-35">
                                    <div class="trend-bottom-img mb-30">
                                        <img src="assets/img/trending/trending_bottom1.jpg" alt="">
                                    </div>
                                    <div class="trend-bottom-cap">
                                        <span class="color1">Lifestyple</span>
                                        <h4><a href="details.html">Get the Illusion of Fuller Lashes by “Mascng.”</a></h4>
                                    </div>
                                </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="single-bottom mb-35">
                                        <div class="trend-bottom-img mb-30">
                                            <img src="assets/img/trending/trending_bottom2.jpg" alt="">
                                        </div>
                                        <div class="trend-bottom-cap">
                                            <span class="color2">Sports</span>
                                            <h4><h4><a href="details.html">Get the Illusion of Fuller Lashes by “Mascng.”</a></h4></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="single-bottom mb-35">
                                        <div class="trend-bottom-img mb-30">
                                            <img src="assets/img/trending/trending_bottom3.jpg" alt="">
                                        </div>
                                        <div class="trend-bottom-cap">
                                            <span class="color3">Travels</span>
                                            <h4><a href="details.html"> Welcome To The Best Model Winner Contest</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Riht content -->
                    <div class="col-lg-4">
                        
                        <?php 
                        if (is_array($response) || is_object($response)) //NewsAPI
                        {   
                            $no = 1;
                            $array = array();
                            foreach($response as $key => $value){                       
                            
                        ?>
                        
                        <div class="trand-right-single d-flex">
                            <div class="trand-right-img">
                                <img src="<?= blogs_url_file; ?>upload/<?= $value['img'];?>" alt="<?= $value['SEO_title']; ?>">
                            </div>
                            <div class="trand-right-cap">
                                <span class="color<?php echo $no; ?>"><?php echo $value['Category'];?></span>
                                <h4><a href="details.html"><?php echo $value['Title'];?></a></h4>
                            </div>
                        </div>
                        <?php $no++;}} ?>
                                                
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Trending Area End -->
    <!--   Weekly-News start -->
    <div class="weekly-news-area pt-50">
        <div class="container">
           <div class="weekly-wrapper">
                <!-- section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle mb-30">
                            <h3>Announcement</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="weekly-news-active dot-style d-flex dot-style">
                            <?php
                            if (is_array($announcement) || is_object($announcement)) // Anaouncement
                            {   
                            $no = 1;
                            $array = array();
                                foreach($announcement as $a => $b){  
                                $getStart = $b['Start'];
                                $newDate = date("d-M-Y", strtotime($getStart));
                                $newDate = date("d-M-Y", strtotime($getStart));
                                // $fromat = moment($getStart).format("D-MM-YYYY HH:mm");
                                $day = date("d",strtotime($getStart));
                                $month = date("F",strtotime($getStart));
                                $year = date("Y",strtotime($getStart));

                            ?>
                            <div class="weekly-single active">
                                <div class="card">
                                        <div class="overlay rounded">
                                            <time class="p-3" datetime="">
                                                <span class="day font-weight-bold"><?=$day?></span>
                                                <span class="month"><?=$month?></span>
                                                <span class="year"><?=$year?></span>
                                                <!-- <span class="time">17-12-2020 16:55</span> -->
                                            </time>
                                        </div>
                                        <div class="p-4">
                                            <h4>
                                                <a href="<?= base_url('details');?>"><?= $b['Title']?></a>
                                            </h4>
                                        </div>
                                </div>
                                <!-- <div class="card">
                                    <span class="day"><?=$day?>-</span>
                                    <span class="month"><?=$month?>-</span>
                                    <span class="year"><?=$year?>-</span>
                                </div>
                                <div class="weekly-caption">
                                    <span class="color<?=$no?>"><?= $month ?></span>
                                    <h4><a href="<?= $b['File']?>"><?= $b['Title']?></a></h4>
                                </div> -->
                            </div> 
                            <?php }} ?>
                            
                        </div>
                    </div>
                </div>
           </div>
        </div>
    </div>           
    <!-- End Weekly-News -->
   <!-- Whats New Start -->
    <section class="whats-news-area pt-50 pb-20">
        <div class="container">
            <div class="row">
            <div class="col-lg-8">
                <div class="row d-flex justify-content-between">
                    <div class="col-lg-3 col-md-3">
                        <div class="section-tittle mb-30">
                            <h3>Undergraduate Programs</h3>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9">
                        <div class="properties__button">
                            <!--Nav Button  -->                                            
                            <nav>                                                                     
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Hotel Business</a>
                                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Product Design</a>
                                    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Architecture</a>
                                    <a class="nav-item nav-link" id="nav-last-tab" data-toggle="tab" href="#nav-last" role="tab" aria-controls="nav-contact" aria-selected="false">Urban & Regional Planning</a>
                                    <a class="nav-item nav-link" id="nav-Sports" data-toggle="tab" href="#nav-nav-Sport" role="tab" aria-controls="nav-contact" aria-selected="false">Business Law</a>
                                    <a class="nav-item nav-link" id="nav-technology" data-toggle="tab" href="#nav-techno" role="tab" aria-controls="nav-contact" aria-selected="false">Entrepreneurship</a>
                                    <a class="nav-item nav-link" id="nav-technology" data-toggle="tab" href="#nav-techno" role="tab" aria-controls="nav-contact" aria-selected="false">Construction Engineering and Management</a>
                                    <a class="nav-item nav-link" id="nav-technology" data-toggle="tab" href="#nav-techno" role="tab" aria-controls="nav-contact" aria-selected="false">Accounting</a>
                                </div>
                            </nav>
                            <!--End Nav Button  -->
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <!-- Nav Card -->
                        <div class="tab-content" id="nav-tabContent">
                            <!-- card one -->
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">           
                                <div class="whats-news-caption">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="single-what-news mb-100">
                                                <div class="what-img">
                                                    <img src="assets/img/news/whatNews1.jpg" alt="">
                                                </div>
                                                <div class="what-cap">
                                                    <span class="color1">Night party</span>
                                                    <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="single-what-news mb-100">
                                                <div class="what-img">
                                                    <img src="assets/img/news/whatNews2.jpg" alt="">
                                                </div>
                                                <div class="what-cap">
                                                    <span class="color1">Night party</span>
                                                    <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                                </div>
                                            </div>
                                        </div> 
                                        <div class="col-lg-6 col-md-6">
                                            <div class="single-what-news mb-100">
                                                <div class="what-img">
                                                    <img src="assets/img/news/whatNews3.jpg" alt="">
                                                </div>
                                                <div class="what-cap">
                                                    <span class="color1">Night party</span>
                                                    <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="single-what-news mb-100">
                                                <div class="what-img">
                                                    <img src="assets/img/news/whatNews4.jpg" alt="">
                                                </div>
                                                <div class="what-cap">
                                                    <span class="color1">Night party</span>
                                                    <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card two -->
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                <div class="whats-news-caption">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="single-what-news mb-100">
                                                <div class="what-img">
                                                    <img src="assets/img/news/whatNews1.jpg" alt="">
                                                </div>
                                                <div class="what-cap">
                                                    <span class="color1">Night party</span>
                                                    <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="single-what-news mb-100">
                                                <div class="what-img">
                                                    <img src="assets/img/news/whatNews2.jpg" alt="">
                                                </div>
                                                <div class="what-cap">
                                                    <span class="color1">Night party</span>
                                                    <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                                </div>
                                            </div>
                                        </div> 
                                        <div class="col-lg-6 col-md-6">
                                            <div class="single-what-news mb-100">
                                                <div class="what-img">
                                                    <img src="assets/img/news/whatNews3.jpg" alt="">
                                                </div>
                                                <div class="what-cap">
                                                    <span class="color1">Night party</span>
                                                    <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="single-what-news mb-100">
                                                <div class="what-img">
                                                    <img src="assets/img/news/whatNews4.jpg" alt="">
                                                </div>
                                                <div class="what-cap">
                                                    <span class="color1">Night party</span>
                                                    <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card three -->
                            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                <div class="whats-news-caption">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="single-what-news mb-100">
                                                <div class="what-img">
                                                    <img src="assets/img/news/whatNews1.jpg" alt="">
                                                </div>
                                                <div class="what-cap">
                                                    <span class="color1">Night party</span>
                                                    <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="single-what-news mb-100">
                                                <div class="what-img">
                                                    <img src="assets/img/news/whatNews2.jpg" alt="">
                                                </div>
                                                <div class="what-cap">
                                                    <span class="color1">Night party</span>
                                                    <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                                </div>
                                            </div>
                                        </div> 
                                        <div class="col-lg-6 col-md-6">
                                            <div class="single-what-news mb-100">
                                                <div class="what-img">
                                                    <img src="assets/img/news/whatNews3.jpg" alt="">
                                                </div>
                                                <div class="what-cap">
                                                    <span class="color1">Night party</span>
                                                    <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="single-what-news mb-100">
                                                <div class="what-img">
                                                    <img src="assets/img/news/whatNews4.jpg" alt="">
                                                </div>
                                                <div class="what-cap">
                                                    <span class="color1">Night party</span>
                                                    <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- card fure -->
                            <div class="tab-pane fade" id="nav-last" role="tabpanel" aria-labelledby="nav-last-tab">
                                <div class="whats-news-caption">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="single-what-news mb-100">
                                                <div class="what-img">
                                                    <img src="assets/img/news/whatNews1.jpg" alt="">
                                                </div>
                                                <div class="what-cap">
                                                    <span class="color1">Night party</span>
                                                    <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="single-what-news mb-100">
                                                <div class="what-img">
                                                    <img src="assets/img/news/whatNews2.jpg" alt="">
                                                </div>
                                                <div class="what-cap">
                                                    <span class="color1">Night party</span>
                                                    <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                                </div>
                                            </div>
                                        </div> 
                                        <div class="col-lg-6 col-md-6">
                                            <div class="single-what-news mb-100">
                                                <div class="what-img">
                                                    <img src="assets/img/news/whatNews3.jpg" alt="">
                                                </div>
                                                <div class="what-cap">
                                                    <span class="color1">Night party</span>
                                                    <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="single-what-news mb-100">
                                                <div class="what-img">
                                                    <img src="assets/img/news/whatNews4.jpg" alt="">
                                                </div>
                                                <div class="what-cap">
                                                    <span class="color1">Night party</span>
                                                    <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- card Five -->
                            <div class="tab-pane fade" id="nav-nav-Sport" role="tabpanel" aria-labelledby="nav-Sports">
                                <div class="whats-news-caption">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="single-what-news mb-100">
                                                <div class="what-img">
                                                    <img src="assets/img/news/whatNews1.jpg" alt="">
                                                </div>
                                                <div class="what-cap">
                                                    <span class="color1">Night party</span>
                                                    <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="single-what-news mb-100">
                                                <div class="what-img">
                                                    <img src="assets/img/news/whatNews2.jpg" alt="">
                                                </div>
                                                <div class="what-cap">
                                                    <span class="color1">Night party</span>
                                                    <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                                </div>
                                            </div>
                                        </div> 
                                        <div class="col-lg-6 col-md-6">
                                            <div class="single-what-news mb-100">
                                                <div class="what-img">
                                                    <img src="assets/img/news/whatNews3.jpg" alt="">
                                                </div>
                                                <div class="what-cap">
                                                    <span class="color1">Night party</span>
                                                    <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="single-what-news mb-100">
                                                <div class="what-img">
                                                    <img src="assets/img/news/whatNews4.jpg" alt="">
                                                </div>
                                                <div class="what-cap">
                                                    <span class="color1">Night party</span>
                                                    <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- card Six -->
                            <div class="tab-pane fade" id="nav-techno" role="tabpanel" aria-labelledby="nav-technology">
                                <div class="whats-news-caption">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="single-what-news mb-100">
                                                <div class="what-img">
                                                    <img src="assets/img/news/whatNews1.jpg" alt="">
                                                </div>
                                                <div class="what-cap">
                                                    <span class="color1">Night party</span>
                                                    <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="single-what-news mb-100">
                                                <div class="what-img">
                                                    <img src="assets/img/news/whatNews2.jpg" alt="">
                                                </div>
                                                <div class="what-cap">
                                                    <span class="color1">Night party</span>
                                                    <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                                </div>
                                            </div>
                                        </div> 
                                        <div class="col-lg-6 col-md-6">
                                            <div class="single-what-news mb-100">
                                                <div class="what-img">
                                                    <img src="assets/img/news/whatNews3.jpg" alt="">
                                                </div>
                                                <div class="what-cap">
                                                    <span class="color1">Night party</span>
                                                    <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="single-what-news mb-100">
                                                <div class="what-img">
                                                    <img src="assets/img/news/whatNews4.jpg" alt="">
                                                </div>
                                                <div class="what-cap">
                                                    <span class="color1">Night party</span>
                                                    <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <!-- End Nav Card -->
                    </div>
                </div>
            </div>
            <div class="col-lg-4">

                    <div class="container py-7">
                    
                    <div class="section-tittle mb-30">
                        <h3>Calender Academic</h3>
                    </div>
                    <!-- Days -->
                    <div class="row">
                      <div class="col-lg-12 mb-3" id="Friday, Nov 13th">
                        <h4 class="mt-0 mb-3 text-dark op-8 font-weight-bold">
                          2022/2023 Ganjil
                        </h4>
                        <ul class="list-timeline list-timeline-primary">
                          <li class="list-timeline-item p-0 pb-3 pb-lg-4 d-flex flex-wrap flex-column">
                            <p class="calend my-0 text-dark flex-fw text-sm text-uppercase"><span class="text-inverse op-8">09:00 - 10:00</span> - Registration</p>
                          </li>
                          <li class="list-timeline-item show p-0 pb-3 pb-lg-4 d-flex flex-wrap flex-column" data-toggle="collapse" data-target="#day-1-item-2">
                            <p class="calend my-0 text-dark flex-fw text-sm text-uppercase"><span class="text-primary font-weight-bold op-8 infinite animated flash" data-animate="flash" data-animate-infinite="1" data-animate-duration="3.5" style="animation-duration: 3.5s;">Now</span> - Vitaly Friedmann</p>
                            <p class="calend my-0 collapse flex-fw text-uppercase text-xs text-dark op-8 show" id="day-1-item-2"> Talk: Wireframing / <span class="text-primary">Room 19</span> </p>
                          </li>
                          <li class="list-timeline-item p-0 pb-3 pb-lg-4 d-flex flex-wrap flex-column">
                            <p class="calend my-0 text-dark flex-fw text-sm text-uppercase"><span class="text-inverse op-8">12:00 - 13:00</span> - Lunch Break</p>
                          </li>
                          <li class="list-timeline-item p-0 pb-3 pb-lg-4 d-flex flex-wrap flex-column" data-toggle="collapse" data-target="#day-1-item-4">
                            <p class="calend my-0 text-dark flex-fw text-sm text-uppercase"><span class="text-inverse op-8">13:00 - 15:00</span> - Anthony Jonas</p>
                            <p class="calend my-0 collapse flex-fw text-uppercase text-xs text-dark op-8" id="day-1-item-4"> Talk: OpenData / <span class="text-primary">Room 31</span> </p>
                          </li>
                          <li class="list-timeline-item p-0 pb-3 pb-lg-4 d-flex flex-wrap flex-column">
                            <p class="calend my-0 text-dark flex-fw text-sm text-uppercase"><span class="text-inverse op-8">15:00 - 16:00</span> - Coffee Break</p>
                          </li>
                          <li class="list-timeline-item p-0 pb-3 pb-lg-4 d-flex flex-wrap flex-column" data-toggle="collapse" data-target="#day-1-item-6">
                            <p class="calend my-0 text-dark flex-fw text-sm text-uppercase"><span class="text-inverse op-8">16:00 - 18:00</span> - Jesscia Lawrence</p>
                            <p class="calend my-0 collapse flex-fw text-uppercase text-xs text-dark op-8" id="day-1-item-6"> Talk: Ninja coding / <span class="text-primary">Room 31</span> </p>
                          </li>
                          <li class="list-timeline-item p-0 pb-3 d-flex flex-wrap flex-column">
                            <p class="calend my-0 text-dark flex-fw text-sm text-uppercase"><span class="text-inverse op-8">18:00 - 23:00</span> - After conference</p>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                <!-- Section Tittle -->
                <div class="section-tittle mb-40">
                    <h3>Follow us<br>
                    On Social Media</h3>
                </div>
                <!-- Flow Socail -->
                <div class="single-follow mb-45">
                    <div class="single-box">
                        <div class="follow-us d-flex align-items-center">
                            <div class="follow-social">
                                <a href="#"><img src="assets/img/news/icon-fb.png" alt=""></a>
                            </div>
                            <div class="follow-count">  
                                <span>8,045</span>
                                <p>Fans</p>
                            </div>
                        </div> 
                        <div class="follow-us d-flex align-items-center">
                            <div class="follow-social">
                                <a href="#"><img src="assets/img/news/icon-tw.png" alt=""></a>
                            </div>
                            <div class="follow-count">
                                <span>8,045</span>
                                <p>Fans</p>
                            </div>
                        </div>
                            <div class="follow-us d-flex align-items-center">
                            <div class="follow-social">
                                <a href="#"><img src="assets/img/news/icon-ins.png" alt=""></a>
                            </div>
                            <div class="follow-count">
                                <span>8,045</span>
                                <p>Fans</p>
                            </div>
                        </div>
                        <div class="follow-us d-flex align-items-center">
                            <div class="follow-social">
                                <a href="#"><img src="assets/img/news/icon-yo.png" alt=""></a>
                            </div>
                            <div class="follow-count">
                                <span>8,045</span>
                                <p>Fans</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- New Poster -->
                <!-- <div class="news-poster d-none d-lg-block">
                    <img src="assets/img/news/news_card.jpg" alt="">
                </div> -->
            </div>
            </div>
        </div>
    </section>
    <!-- Whats New End -->
    <!--   Weekly2-News start -->
    <div class="weekly2-news-area  weekly2-pading gray-bg">
        <div class="container">
            <div class="weekly2-wrapper">
                <!-- section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle mb-30">
                            <h3>Cooporation</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="weekly2-news-active dot-style d-flex dot-style">
                            <div class="weekly2-single">
                                <div class="weekly2-img">
                                    <img src="assets/img/news/weekly2News1.jpg" alt="">
                                </div>
                                <div class="weekly2-caption">
                                    <span class="color1">Corporate</span>
                                    <p>25 Jan 2020</p>
                                    <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                </div>
                            </div> 
                            <div class="weekly2-single">
                                <div class="weekly2-img">
                                    <img src="assets/img/news/weekly2News2.jpg" alt="">
                                </div>
                                <div class="weekly2-caption">
                                    <span class="color1">Event night</span>
                                    <p>25 Jan 2020</p>
                                    <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                </div>
                            </div> 
                            <div class="weekly2-single">
                                <div class="weekly2-img">
                                    <img src="assets/img/news/weekly2News3.jpg" alt="">
                                </div>
                                <div class="weekly2-caption">
                                    <span class="color1">Corporate</span>
                                    <p>25 Jan 2020</p>
                                    <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                </div>
                            </div>
                             <div class="weekly2-single">
                                <div class="weekly2-img">
                                    <img src="assets/img/news/weekly2News4.jpg" alt="">
                                </div>
                                <div class="weekly2-caption">
                                    <span class="color1">Event time</span>
                                    <p>25 Jan 2020</p>
                                    <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                </div>
                            </div> 
                             <div class="weekly2-single">
                                <div class="weekly2-img">
                                    <img src="assets/img/news/weekly2News4.jpg" alt="">
                                </div>
                                <div class="weekly2-caption">
                                    <span class="color1">Corporate</span>
                                    <p>25 Jan 2020</p>
                                    <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>           
    <!-- End Weekly-News -->
    <!-- Start Youtube -->
    <!-- <div class="youtube-area video-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="video-items-active">
                        <div class="video-items text-center">
                            <iframe src="https://www.youtube.com/embed/2tgbQ_Nrpxk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="video-items text-center">
                            <iframe src="https://www.youtube.com/embed/IdFy7l2hSD4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="video-items text-center">
                            <iframe src="https://www.youtube.com/embed/wlxL2ZChX6g" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="video-items text-center">
                            <iframe src="https://www.youtube-nocookie.com/embed/J99I9i4Osps?origin=www.youtube.com" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="video-items text-center">
                        <iframe src="https://www.youtube.com/embed/NRa2h9AJHgA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <div class="video-info">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="video-caption">
                            <div class="top-caption">
                                <span class="color1">Podomoro University</span>
                            </div>
                            <div class="bottom-caption">
                                <h2>Founded by Yayasan Pendidikan Agung Podomoro</h2>
                                <p>Founded by Yayasan Pendidikan Agung Podomoro, and with full support 
                                    from the leading holding company, Agung Podomoro Group, has made Podomoro University a perfect place to study. We develop industry-driven curriculum framework and teaching methodology through work-based learning, hence the students will be equipped with knowledge and 
                                    skills that are required highly and consistent with the needs of business and industry.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="testmonial-nav text-center">
                            <div class="single-video">
                                <iframe src="https://www.youtube.com/embed/2tgbQ_Nrpxk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <div class="video-intro">
                                    <h4>Alur Pendaftaran Online di Podomoro University</h4>
                                </div>
                            </div>
                            <div class="single-video">
                                <iframe src="https://www.youtube.com/embed/IdFy7l2hSD4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <div class="video-intro">
                                    <h4>Fasilitas Podomoro University</h4>
                                </div>
                            </div>
                            <div class="single-video">
                                <iframe src="https://www.youtube.com/embed/wlxL2ZChX6g" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <div class="video-intro">
                                    <h4>You are The Next Entrepreneur</h4>
                                </div>
                            </div>
                            <div class="single-video">
                                <iframe src="https://www.youtube-nocookie.com/embed/J99I9i4Osps?origin=www.youtube.com" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <div class="video-intro">
                                    <h4>The Next Gen Battle Day 3</h4>
                                </div>
                            </div>
                            <div class="single-video">
                                <iframe src="https://www.youtube.com/embed/NRa2h9AJHgA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <div class="video-intro">
                                    <h4>Business Law Program Parents Gathering</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  -->
    <!-- End Start youtube -->
    <!--  Recent Articles start -->
    <div class="recent-articles weekly2-pading">
        <div class="container">
           <div class="recent-wrapper">
                <!-- section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle mb-30">
                            <h3>Worldwide Articles</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="recent-active dot-style d-flex dot-style" >
                            <?php 

                            if (is_array($newsapi) || is_object($newsapi))
                            {   
                                $no = 1;
                                $array = array();
                                foreach($newsapi as $key => $value){
                            ?>
                            <div class="single-recent mb-100" >
                                <div class="what-img">
                                    <img src="<?= $value['urlToImage']; ?>" alt="<?= $value['description']; ?>">
                                </div>
                                <div class="what-cap">
                                    <span class="color<?= $no;?>"><?= $value['author']; ?></span>
                                    <h4><a target="_blank" href="<?= $value['url']?>"><?= $value['title'];?></a></h4>
                                </div>
                            </div>
                            <?php $no++;}} ?>

                        </div>
                    </div>
                </div>
           </div>
        </div>
    </div>           
    <!--Recent Articles End -->
    <!--Start pagination -->
    <div class="pagination-area pb-45 text-center">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    
                    <div class="single-wrap d-flex justify-content-center">
                        <?php 
                            echo $this->pagination->create_links();
                        ?>
                        <!-- <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-start">
                              <li class="page-item"><a class="page-link" href="#"><span class="flaticon-arrow roted"></span></a></li>
                                <li class="page-item active"><a class="page-link" href="#">01</a></li>
                                <li class="page-item"><a class="page-link" href="#">02</a></li>
                                <li class="page-item"><a class="page-link" href="#">03</a></li>
                              <li class="page-item"><a class="page-link" href="#"><span class="flaticon-arrow right-arrow"></span></a></li>
                            </ul>
                          </nav> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End pagination  -->
    </main>


    <!-- <script type="text/javascript">
        dataNEWSAPI();
        function dataNEWSAPI() {
            var url = 'https://newsapi.org/v2/top-headlines?country=id&apiKey=96b7521327044529a95b04762e15d43e';
            return fetch(url)
                .then(response => response.json())
                .then(data => {
                    console.log(data)
                    var total = data.totalResults;
                    var articles = data.articles;
                    var response = '';
                    $.each(articles,function (i,v) {
                        var slickOptions = {
                            slidesToShow: 3,
                            slidesToScroll: 3,
                            rows: 3,
                            dots: true,
                            arrows: false,
                            dotsClass: 'slick-dots slick-dots-black',
                            adaptiveHeight: true,
                        };
                        var response = '<div class="single-recent mb-100">'+
                                        '<div class="what-img">'+
                                            '<img src="'+v.urlToImage+'" alt="'+v.title+'">'+
                                        '</div>'+
                                        '<div class="what-cap">'+
                                            '<span class="color'+i+'">'+v.publishedAt+'</span>'+
                                            '<h4><a href="'+v.url+'">'+v.title+'</a></h4>'+
                                        '</div>'+
                                    '</div>';
                        $('#NewsApiOrg').append(response);
                        $('#NewsApiOrg').slick({
                                              autoplay: false,
                                              dots: false,
                                              infinite: false,
                                              arrows: false,
                                              slidesToShow: 3,
                                              slidesToScroll: 3,
                                              rows: 2
                                            });
                    })
                })
                      
        }
        

       
    </script> -->
    
   
