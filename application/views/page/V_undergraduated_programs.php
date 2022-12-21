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

<div class="container mt-5 mb-5">
    <center><h3 style="color: #0525b2">Undergraduated Programs</h3></center>
    <div class="row">
        <?php foreach ($prodi[0] as $key => $value): ?>
            <div class="col-md-3">
                <a href="https://<?=$prodi[4][$key]['Host']?>" target="_blank">
                    <img src="<?=puis_url?>/images/logoprodi/<?=$prodi[4][$key]['FileLogoP']?>" class="img-fluid">
                </a>
            </div>
        <?php endforeach ?>
    </div>
</div>