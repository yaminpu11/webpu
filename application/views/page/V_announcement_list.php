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
    <div class="row">
        <div class="col-md-12">
            <h4>Announcement List</h4><hr>
            
            <div class="row">
                <?php foreach ($announcement as $key => $value): ?>

                <?php
                    $getStart = $value['Start'];
                    $newDate = date("d-M-Y", strtotime($getStart));
                    // $fromat = moment($getStart).format("D-MM-YYYY HH:mm");
                    $day = date("d",strtotime($getStart));
                    $month = date("F",strtotime($getStart));
                    $year = date("Y",strtotime($getStart));
                ?>

                <div class="col-md-6 mb-3">
                    <div class="card shadow">
                        <div class="card-body p-0">
                            <div class="row">
                                <div class="col-5">
                                    <time class="p-3" datetime="">
                                        <span class="day font-weight-bold"><?=$day?></span>
                                        <span class="month"><?=$month?></span>
                                        <span class="year"><?=$year?></span>
                                    </time>
                                </div>
                                <div class="col-7 pt-3 pr-5">
                                    <h4><a href="<?= base_url('announcement/').$value['ID'];?>"><?= $value['Title']?></a></h4>
                                    <hr style="margin: 0px 0px;">
                                    <strong><?=tgl_ina($value['Start'])?> - <?=tgl_ina($value['End'])?></strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach ?>
            </div>
            
        </div>
    </div>
    <center>
        <nav>
        <center>
          <ul class="pagination mt-5 text-center">
            <?php if (!empty($page)): ?>
                <?php if ($page > 1): ?>
                    <li class="page-item"><a class="page-link" href="<?=base_url()?>news?page=<?=$page-1?>"><</a></li>
                <?php endif ?>
            <?php endif ?>
            <li class="page-item"><a class="page-link" href="<?=base_url()?>news?page=<?=$page+1?>">></a></li>
          </ul>
        </nav>
    </center>
</div>