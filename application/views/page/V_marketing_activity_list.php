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
            <h4>Marketing Activity List</h4><hr>
                
            <?php foreach ($marketing as $key => $value): ?>

            <?php
                $getStart = $value['Start'];
                $newDate = date("d-M-Y", strtotime($getStart));
                // $fromat = moment($getStart).format("D-MM-YYYY HH:mm");
                $day = date("d",strtotime($getStart));
                $month = date("F",strtotime($getStart));
                $year = date("Y",strtotime($getStart));
            ?>

            <div class="col-md-12 mb-3">
                <div class="card shadow">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-5">
                                <?php if (!empty($value['Banner'])): ?>
                                    <img src="<?=puis_url?>uploads/admisi/banner/<?=$value['Banner']?>" class="img-fluid">
                                <?php endif ?>
                                <?php if (empty($value['Banner'])): ?>
                                    <time class="p-3" datetime="">
                                        <span class="day font-weight-bold"><?=$day?></span>
                                        <span class="month"><?=$month?></span>
                                        <span class="year"><?=$year?></span>
                                    </time>
                                <?php endif ?>
                                    
                            </div>
                            <div class="col-7 pt-3 pr-5">
                                <h4><a href="<?= base_url('marketing_activity/').$value['ID'];?>"><?= $value['Title']?></a></h4>
                                <hr style="margin: 0px 0px;">
                                <strong><?=tgl_ina($value['Start'])?> - <?=tgl_ina($value['End'])?></strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach ?>

            <nav>
              <ul class="pagination">
                <?php if (!empty($page)): ?>
                    <?php if ($page > 1): ?>
                        <li class="page-item"><a class="page-link" href="<?=base_url()?>marketing_activity?page=<?=$page-1?>"><</a></li>
                    <?php endif ?>
                <?php endif ?>
                <li class="page-item"><a class="page-link" href="<?=base_url()?>marketing_activity?page=<?=$page+1?>">></a></li>
              </ul>
            </nav>

        </div>
        <div class="col-md-4">
            <div class="card shadow">
                <div class="card-body">
                    <h4>Recent Acitivy</h4><hr>
                    <?php foreach ($recent_marketing as $key => $value): ?>
                        <div class="row mb-6">
                            <div class="col-md-12">
                                <a href="<?=base_url()?>marketing_activity/<?=$value['ID']?>"><strong><h5><?=$value['Title']?></h5></strong></a>
                                <?=tgl_ina($value['Start'])?> - <?=tgl_ina($value['End'])?>
                                <hr>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
            <hr>
        </div>
    </div>
</div>