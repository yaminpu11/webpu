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

    .card-img-overlay {
      background-color: rgba(#000, 0.4);
    }
</style>

<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-3">
          <div class="card">
            <img class="card-img" src="<?=base_url()?>assets/banner_info.jpg" alt="News" style="opacity: 0.3;">
            <div class="card-img-overlay text-white d-flex flex-column justify-content-center">
              <a href="<?=base_url()?>news"><center><button type="button" class="btn btn-outline-primary">News</button></center></a>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="card">
            <img class="card-img" src="<?=base_url()?>assets/banner_info.jpg" alt="News" style="opacity: 0.3;">
            <div class="card-img-overlay text-white d-flex flex-column justify-content-center">
              <a href="<?=base_url()?>announcement"><center><button type="button" class="btn btn-outline-primary">Announcement</button></center></a>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="card">
            <img class="card-img" src="<?=base_url()?>assets/banner_info.jpg" alt="News" style="opacity: 0.3;">
            <div class="card-img-overlay text-white d-flex flex-column justify-content-center">
              <center><button type="button" class="btn btn-outline-primary">Marketing</button></center>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="card">
            <img class="card-img" src="<?=base_url()?>assets/banner_info.jpg" alt="News" style="opacity: 0.3;">
            <div class="card-img-overlay text-white d-flex flex-column justify-content-center">
              <center><button type="button" class="btn btn-outline-primary">World News</button></center>
            </div>
          </div>
        </div>

    </div>
</div>