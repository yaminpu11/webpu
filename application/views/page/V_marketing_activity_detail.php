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
            <?=$detail['Description']?>
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