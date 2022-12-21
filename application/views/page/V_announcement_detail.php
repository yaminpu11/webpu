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
        <div class="col-md-8">
            <h4><strong><?=$detail['Title']?></strong></h4>
            <hr>
            <small>Author : <?=$detail['Name']?> | Date : <?=tgl_ina($detail['Start'])?> - <?=tgl_ina($detail['End'])?></small><br>
            <?=$detail['Message']?>
        </div>
        <div class="col-md-4">
            <h4><strong>Recent Announcement</strong></h4>
            <hr>
            <?php foreach ($recent_announcement as $key => $value): ?>
                <?php
                    $getStart = $value['Start'];
                    $newDate = date("d-M-Y", strtotime($getStart));
                    // $fromat = moment($getStart).format("D-MM-YYYY HH:mm");
                    $day = date("d",strtotime($getStart));
                    $month = date("F",strtotime($getStart));
                    $year = date("Y",strtotime($getStart));
                ?>

                    <div class="card shadow mb-3">
                        <div class="card-body p-0">
                            <div class="row">
                                <div class="col-5" >
                                    <time class="p-3" style="height:100%" datetime=""><br>
                                        <span class="day font-weight-bold" style="font-size:20px"><?=$day?></span>
                                        <span class="month" style="font-size:20px"><?=$month?></span>
                                        <span class="year" style="font-size:20px"><?=$year?></span>
                                    </time>
                                </div>
                                <div class="col-7 pt-3 pr-5">
                                    <h5><a href="<?= base_url('announcement/').$value['ID'];?>"><?= $value['Title']?></a></h5>
                                    <hr style="margin: 0px 0px;">
                                    <strong><?=tgl_ina($value['Start'])?> - <?=tgl_ina($value['End'])?></strong>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php endforeach ?>
        </div>
    </div>
            
</div>