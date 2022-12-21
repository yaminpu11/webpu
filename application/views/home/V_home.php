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
    
    <!-- <header class="masthead" role="banner"> 
        <div class="masthead-shell">
            <div class="primary-content ready-to-animate"> 
                <div class="titling bound"> 
                    <h1 class="product-name"> 
                    <span>Podomoro University</span> </h1>
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
    </header> -->

    <div style="background: url(https://bootstrapious.com/i/snippets/sn-bg-image/bg.jpg)" class="page-holder bg-cover">

      <div class="container py-5">
        <header class="text-white py-5">
          <h1 class="display-4 font-weight-bold mb-4 text-white">PODOMORO UNIVERSITY</h1>

          <p class="lead mb-0 text-white">Starts your journey with us</p>
          <!-- <p class="font-italic text-white">Snippet By <a href="https://bootstrapious.com" class="text-white">
              <u>Bootstrapious</u></a>
          </p> -->
        </header>

      </div>
    </div>

    <main>

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

                                    <?php foreach ($ProdiList as $key => $value): ?>
                                        <?php if ($key == 0): ?>
                                            <a class="nav-item nav-link active" id="nav-prod<?=$key?>-tab" data-toggle="tab" href="#nav-prod<?=$key?>" role="tab" aria-controls="nav-prod<?=$key?>" aria-selected="true"><?=$value['NameEng']?></a>
                                        <?php endif ?>
                                        <?php if ($key != 0): ?>
                                            <a class="nav-item nav-link" id="nav-prod<?=$key?>-tab" data-toggle="tab" href="#nav-prod<?=$key?>" role="tab" aria-controls="nav-prod<?=$key?>" aria-selected="true"><?=$value['NameEng']?></a>
                                        <?php endif ?>
                                            
                                    <?php endforeach ?>

                                    <!-- <a class="nav-item nav-link active" id="nav-hbp-tab" data-toggle="tab" href="#nav-hbp" role="tab" aria-controls="nav-hbp" aria-selected="true">Hotel Business</a>
                                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Product Design</a>
                                    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Architecture</a>
                                    <a class="nav-item nav-link" id="nav-last-tab" data-toggle="tab" href="#nav-last" role="tab" aria-controls="nav-contact" aria-selected="false">Urban & Regional Planning</a>
                                    <a class="nav-item nav-link" id="nav-Sports" data-toggle="tab" href="#nav-nav-Sport" role="tab" aria-controls="nav-contact" aria-selected="false">Business Law</a>
                                    <a class="nav-item nav-link" id="nav-enterpreneur" data-toggle="tab" href="#nav-enter" role="tab" aria-controls="nav-contact" aria-selected="false">Entrepreneurship</a>
                                    <a class="nav-item nav-link" id="nav-const" data-toggle="tab" href="#nav-const" role="tab" aria-controls="nav-contact" aria-selected="false">Construction Engineering and Management</a>
                                    <a class="nav-item nav-link" id="nav-accounting" data-toggle="tab" href="#nav-accounting" role="tab" aria-controls="nav-contact" aria-selected="false">Accounting</a> -->
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
                            <?php foreach ($ProdiList as $key => $value): ?>
                                <?php if ($key == 0): ?>
                                    <div class="tab-pane fade show active" id="nav-prod<?=$key?>" role="tabpanel" aria-labelledby="nav-prod<?=$key?>-tab">     
                                <?php endif ?>
                                <?php if ($key != 0): ?>
                                    <div class="tab-pane fade" id="nav-prod<?=$key?>" role="tabpanel" aria-labelledby="nav-prod<?=$key?>-tab">     
                                <?php endif ?>
                                    
                                    <?php if (!empty($ProdiSlider[$key])): ?>
                                        <div id="carouselControlProdi<?=$key?>" class="carousel slide" data-ride="carousel">
                                          <div class="carousel-inner">
                                            <?php foreach ($ProdiSlider[$key] as $keyslider => $valueslider): ?>
                                                <?php if ($keyslider == 0): ?>
                                                    <div class="carousel-item active">
                                                <?php endif ?>
                                                <?php if ($keyslider != 0): ?>
                                                    <div class="carousel-item">
                                                <?php endif ?>
                                                
                                                  <img class="d-block w-100" src="https://pcam.podomorouniversity.ac.id/images/Slider/5ddf77624ab44_1_55544481.jpg">
                                                </div>
                                            <?php endforeach ?>
                                            
                                          </div>
                                          <a class="carousel-control-prev" href="#carouselControlProdi<?=$key?>" role="button" data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                          </a>
                                          <a class="carousel-control-next" href="#carouselControlProdi<?=$key?>" role="button" data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                          </a>
                                        </div>
                                    <?php endif ?>
                                    
                                    <h3><i class="far fa-gem mt-5"></i><strong> About</strong></h3>
                                    
                                        <?php if (!empty($ProdiAbout[$key])): ?>
                                            <?=$ProdiAbout[$key]['Description']?>
                                        <?php endif ?>
                                    <br><br>
                                    <a href="https://<?=$ProdiHost[$key]['Host']?>" class="btn btn-primary" target="_blank">More Information</a>
                                </div>
                            <?php endforeach ?>
                            <!-- <div class="tab-pane fade show active" id="nav-hbp" role="tabpanel" aria-labelledby="nav-hbp-tab">           
                                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                  <div class="carousel-inner">
                                    <div class="carousel-item active">
                                      <img class="d-block w-100" src="https://pcam.podomorouniversity.ac.id/images/Slider/5ddf77624ab44_1_55544481.jpg" alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                      <img class="d-block w-100" src="https://pcam.podomorouniversity.ac.id/images/Slider/5ddf74314eafd_1_617348435.jpg" alt="Second slide">
                                    </div>
                                  </div>
                                  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                  </a>
                                  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                  </a>
                                </div>
                                <h3><i class="far fa-gem mt-5"></i><strong> About</strong></h3>
                                <p>Hotel Business Program in Podomoro University is a unique four years program that offers a wide range of knowledge, skills and networks to the industry. Since the very beginning of the study program, students will be trained to have an entrepreneurial mindset that includes critical thinking, independency, and problem-solving attitude as well as effective communication skill.</p>
                                <p>During the study, students are required to accomplish two internship programs. The first one aims for the students to experience the operational side of the industry, while the second one is to experience the management side of the industry. This program allows the students to gain not only knowledge but also skill and attitude required by the industry in both national or international scope.</p>

                                <button class="btn btn-primary">More Information</button>
                            </div>

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

                            <div class="tab-pane fade" id="nav-enter" role="tabpanel" aria-labelledby="nav-enter">
                                <div id="carouselEnt" class="carousel slide" data-ride="carousel">
                                  <div class="carousel-inner">
                                    <div class="carousel-item active">
                                      <img class="d-block w-100" src="https://pcam.podomorouniversity.ac.id/images/Slider/5e4ca65894c28_1_3806002.png" alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                      <img class="d-block w-100" src="https://pcam.podomorouniversity.ac.id/images/Slider/5e4b6779732be_1_1253016335.png" alt="Second slide">
                                    </div>
                                    <div class="carousel-item">
                                      <img class="d-block w-100" src="https://pcam.podomorouniversity.ac.id/images/Slider/5e4b6748b86af_1_2003117597.png" alt="Second slide">
                                    </div>
                                    <div class="carousel-item">
                                      <img class="d-block w-100" src="https://pcam.podomorouniversity.ac.id/images/Slider/5e4b66d9d2758_1_429537631.png" alt="Second slide">
                                    </div>
                                    <div class="carousel-item">
                                      <img class="d-block w-100" src="https://pcam.podomorouniversity.ac.id/images/Slider/5e4b67dfa3506_1_1228451282.png" alt="Second slide">
                                    </div>
                                  </div>
                                  <a class="carousel-control-prev" href="#carouselEnt" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                  </a>
                                  <a class="carousel-control-next" href="#carouselEnt" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                  </a>
                                </div>

                                <h3><i class="far fa-gem mt-5"></i><strong> About</strong></h3>
                                <p>Entrepreneurship program in Podomoro University develop students’ mindsets in creating values by managing  resources innovatively and creatively.  The curriculum and  learning method is enhanced with the collaboration with the Babson Global, Inc. USA. The curriculum framework focuses on the experiential learning hence the students are able to understand the business creation process. theory is packaged in a learning experiential where students directly execute business creating process. Through the entrepreneurial curriculum, the graduates are prepared to be able to face the industry world both nationally and internationally.</p>

                                <h3><i class="fa fa-graduation-cap mt-5"></i><strong> Graduate Profile</strong></h3>
                                <p>The graduates of Hotel Business Programs are future leaders in the hospitality industry in various fields such as hotels and other service-based industries with specialties in below divisions<br><br>

                                1. Front Office<br>
                                2. Culinary<br>
                                3. Food and Beverages Management<br>
                                4. Service Management<br>
                                5. Human Resources<br>
                                6. Revenue Management, Sales. and Marketing<br>
                                7. Communications & Events<br></p>

                                <a href="https://ent.podomorouniversity.ac.id/" target="_blank" class="btn btn-primary">More Information</a>
                            </div>

                            <div class="tab-pane fade" id="nav-const" role="tabpanel" aria-labelledby="nav-const">
                                <div id="carouselConst" class="carousel slide" data-ride="carousel">
                                  <div class="carousel-inner">
                                    <div class="carousel-item active">
                                      <img class="d-block w-100" src="https://pcam.podomorouniversity.ac.id/images/Slider/5e4ca65894c28_1_3806002.png" alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                      <img class="d-block w-100" src="https://pcam.podomorouniversity.ac.id/images/Slider/5e4b6779732be_1_1253016335.png" alt="Second slide">
                                    </div>
                                    <div class="carousel-item">
                                      <img class="d-block w-100" src="https://pcam.podomorouniversity.ac.id/images/Slider/5e4b6748b86af_1_2003117597.png" alt="Second slide">
                                    </div>
                                    <div class="carousel-item">
                                      <img class="d-block w-100" src="https://pcam.podomorouniversity.ac.id/images/Slider/5e4b66d9d2758_1_429537631.png" alt="Second slide">
                                    </div>
                                    <div class="carousel-item">
                                      <img class="d-block w-100" src="https://pcam.podomorouniversity.ac.id/images/Slider/5e4b67dfa3506_1_1228451282.png" alt="Second slide">
                                    </div>
                                  </div>
                                  <a class="carousel-control-prev" href="#carouselConst" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                  </a>
                                  <a class="carousel-control-next" href="#carouselConst" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                  </a>
                                </div>

                                <h3><i class="far fa-gem mt-5"></i><strong> About</strong></h3>
                                <p>Entrepreneurship program in Podomoro University develop students’ mindsets in creating values by managing  resources innovatively and creatively.  The curriculum and  learning method is enhanced with the collaboration with the Babson Global, Inc. USA. The curriculum framework focuses on the experiential learning hence the students are able to understand the business creation process. theory is packaged in a learning experiential where students directly execute business creating process. Through the entrepreneurial curriculum, the graduates are prepared to be able to face the industry world both nationally and internationally.</p>

                                <h3><i class="fa fa-graduation-cap mt-5"></i><strong> Graduate Profile</strong></h3>
                                <p>The graduates of Hotel Business Programs are future leaders in the hospitality industry in various fields such as hotels and other service-based industries with specialties in below divisions<br><br>

                                1. Front Office<br>
                                2. Culinary<br>
                                3. Food and Beverages Management<br>
                                4. Service Management<br>
                                5. Human Resources<br>
                                6. Revenue Management, Sales. and Marketing<br>
                                7. Communications & Events<br></p>

                                <a href="https://ent.podomorouniversity.ac.id/" target="_blank" class="btn btn-primary">More Information</a>
                            </div>

                            <div class="tab-pane fade" id="nav-accounting" role="tabpanel" aria-labelledby="nav-accounting">
                                <div id="carouselAccounting" class="carousel slide" data-ride="carousel">
                                  <div class="carousel-inner">
                                    <div class="carousel-item active">
                                      <img class="d-block w-100" src="https://pcam.podomorouniversity.ac.id/images/Slider/5e4ca65894c28_1_3806002.png" alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                      <img class="d-block w-100" src="https://pcam.podomorouniversity.ac.id/images/Slider/5e4b6779732be_1_1253016335.png" alt="Second slide">
                                    </div>
                                    <div class="carousel-item">
                                      <img class="d-block w-100" src="https://pcam.podomorouniversity.ac.id/images/Slider/5e4b6748b86af_1_2003117597.png" alt="Second slide">
                                    </div>
                                    <div class="carousel-item">
                                      <img class="d-block w-100" src="https://pcam.podomorouniversity.ac.id/images/Slider/5e4b66d9d2758_1_429537631.png" alt="Second slide">
                                    </div>
                                    <div class="carousel-item">
                                      <img class="d-block w-100" src="https://pcam.podomorouniversity.ac.id/images/Slider/5e4b67dfa3506_1_1228451282.png" alt="Second slide">
                                    </div>
                                  </div>
                                  <a class="carousel-control-prev" href="#carouselAccounting" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                  </a>
                                  <a class="carousel-control-next" href="#carouselAccounting" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                  </a>
                                </div>

                                <h3><i class="far fa-gem mt-5"></i><strong> About</strong></h3>
                                <p>Entrepreneurship program in Podomoro University develop students’ mindsets in creating values by managing  resources innovatively and creatively.  The curriculum and  learning method is enhanced with the collaboration with the Babson Global, Inc. USA. The curriculum framework focuses on the experiential learning hence the students are able to understand the business creation process. theory is packaged in a learning experiential where students directly execute business creating process. Through the entrepreneurial curriculum, the graduates are prepared to be able to face the industry world both nationally and internationally.</p>

                                <h3><i class="fa fa-graduation-cap mt-5"></i><strong> Graduate Profile</strong></h3>
                                <p>The graduates of Hotel Business Programs are future leaders in the hospitality industry in various fields such as hotels and other service-based industries with specialties in below divisions<br><br>

                                1. Front Office<br>
                                2. Culinary<br>
                                3. Food and Beverages Management<br>
                                4. Service Management<br>
                                5. Human Resources<br>
                                6. Revenue Management, Sales. and Marketing<br>
                                7. Communications & Events<br></p>

                                <a href="https://ent.podomorouniversity.ac.id/" target="_blank" class="btn btn-primary">More Information</a>
                            </div> -->
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
                          <?=$semester_name?>
                        </h4>
                        <ul class="list-timeline list-timeline-primary">

                           <?php foreach ($calendar as $key => $value): ?>
                                 <li class="list-timeline-item p-0 pb-3 pb-lg-4 d-flex flex-wrap flex-column">
                                   <p class="calend my-0 text-dark flex-fw text-sm text-uppercase"><span class="text-inverse op-8"><?=tgl_ina($value['date_start'])?> - <?=tgl_ina($value['date_end'])?></span><br><?=$value['name']?></p>
                                 </li>
                           <?php endforeach ?>
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
                                <a href="https://www.facebook.com/PodomoroUniversity/" target="_blank">
                                    <img src="assets/img/news/icon-fb.png" alt="">
                                </a>
                            </div>
                            <div class="follow-count">  
                                <span>Facebook</span>
                            </div>
                        </div> 
                        <div class="follow-us d-flex align-items-center">
                            <div class="follow-social">
                                <a href="https://twitter.com/podomorouniv" target="_blank">
                                    <img src="assets/img/news/icon-tw.png" alt="">
                                </a>
                            </div>
                            <div class="follow-count">
                                <span>Twitter</span>
                            </div>
                        </div>
                        <div class="follow-us d-flex align-items-center">
                            <div class="follow-social">
                                <a href="https://www.instagram.com/podomorouniversity/?hl=en" target="_blank">
                                    <img src="assets/img/news/icon-ins.png" alt="">
                                </a>
                            </div>
                            <div class="follow-count">
                                <span>Instagram</span>
                            </div>
                        </div>
                        <div class="follow-us d-flex align-items-center">
                            <div class="follow-social">
                                <a href="https://www.youtube.com/user/podomorouniversity" target="_blank">
                                    <img src="assets/img/news/icon-yo.png" alt="">
                                </a>
                            </div>
                            <div class="follow-count">
                                <span>Youtube</span>
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

    <!-- Trending Area Start -->
    <div class="trending-area fix">
        <div class="container">
            <div class="trending-main">
                <!-- Trending Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="trending-tittle">
                            
                            <h3>News</h3>
                            
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8">
                        <!-- Trending Top -->
                        <div class="trending-top mb-30">
                            
                            <div class="trend-top-img">
                                <img width="100%" src="<?=blogs_url?>upload/<?=$response[0]['img']?>" alt="">
                                <div class="trend-top-cap">
                                    <span><?=$response[0]['Category']?></span>
                                    <h2><a href="<?=base_url()?>news/<?=$response[0]['ID_title']?>"><?=$response[0]['Title']?></a></h2>
                                </div>
                            </div>
                        </div>
                        <!-- Trending Bottom -->
                        <div class="trending-bottom">
                            <div class="row">
                                <?php for ($i=1; $i <= 3; $i++) :?>
                                    <div class="col-lg-4">
                                        <div class="single-bottom mb-35">
                                            <div class="trend-bottom-img mb-30">
                                                <img src="<?=blogs_url?>upload/<?=$response[$i]['img']?>" alt="">
                                            </div>
                                            <div class="trend-bottom-cap">
                                                <span class="color1"><?=$response[$i]['Category']?></span>
                                                <h4><a href="<?=base_url()?>news/<?=$response[$i]['ID_title']?>"><?=$response[$i]['Title']?></a></h4>
                                            </div>
                                        </div>
                                    </div>
                                <?php endfor; ?>
                            </div>
                        </div>
                    </div>
                    <!-- Riht content -->
                    <div class="col-lg-4">
                        
                        <?php for ($i=4; $i <= 8; $i++) :?>
                    
                        <div class="trand-right-single d-flex">
                            <div class="trand-right-img">
                                <img src="<?= blogs_url_file; ?>upload/<?= $response[$i]['img'];?>" alt="<?= $response[$i]['SEO_title']; ?>">
                            </div>
                            <div class="trand-right-cap">
                                <span class="color<?php echo $no; ?>"><?php echo $response[$i]['Category'];?></span>
                                <h4><a href="details.html"><?php echo $response[$i]['Title'];?></a></h4>
                            </div>
                        </div>
                        <?php endfor; ?>
                                                
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Trending Area End -->
    
    
    <!--   Weekly2-News start -->
    <div class="weekly2-news-area  weekly2-pading gray-bg">
        <div class="container">
            <div class="weekly2-wrapper">
                <!-- section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle mb-30">
                            <h3>Marketing Activity</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="weekly2-news-active dot-style d-flex dot-style">
                            <?php foreach ($marketingactivity as $key => $value): ?>
                                <?php 
                                    $getStart = $value['Start'];
                                    $newDate = date("d-M-Y", strtotime($getStart));
                                    $newDate = date("d-M-Y", strtotime($getStart));
                                    // $fromat = moment($getStart).format("D-MM-YYYY HH:mm");
                                    $day = date("d",strtotime($getStart));
                                    $month = date("F",strtotime($getStart));
                                    $year = date("Y",strtotime($getStart));
                                ?>
                                <div class="weekly2-single">
                                    <div class="card">
                                        <?php if (!empty($value['Banner'])): ?>
                                            <img class="card-img-top" src="<?=puis_url?>uploads/admisi/banner/<?=$value['Banner']?>" alt="Card image cap">
                                            
                                        <?php endif ?>
                                        <?php if (empty($value['Banner'])): ?>
                                            <div class="overlay rounded">
                                                <time class="p-3" datetime="">
                                                    <span class="day font-weight-bold"><?=$day?></span>
                                                    <span class="month"><?=$month?></span>
                                                    <span class="year"><?=$year?></span>
                                                </time>
                                            </div>
                                        <?php endif ?>
                                            
                                        <div class="p-4">
                                            <h4>
                                                <a href="<?= base_url('details');?>"><?= $b['Title']?></a>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach ?>
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
    <!-- <div class="pagination-area pb-45 text-center">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    
                    <div class="single-wrap d-flex justify-content-center">
                        <?php 
                            echo $this->pagination->create_links();
                        ?>
                        pass <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-start">
                              <li class="page-item"><a class="page-link" href="#"><span class="flaticon-arrow roted"></span></a></li>
                                <li class="page-item active"><a class="page-link" href="#">01</a></li>
                                <li class="page-item"><a class="page-link" href="#">02</a></li>
                                <li class="page-item"><a class="page-link" href="#">03</a></li>
                              <li class="page-item"><a class="page-link" href="#"><span class="flaticon-arrow right-arrow"></span></a></li>
                            </ul>
                          </nav> pass
                    </div>
                </div>
            </div>
        </div>
    </div> -->
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
    
   
