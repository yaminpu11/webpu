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
            <h4>News List</h4><hr>
                
            <?php foreach ($news as $key => $value): ?>
                <div class="row mb-5">
                    <div class="col-md-4">
                        <img src="<?=blogs_url.'uploads/'.$value['Images']?>" class="img-fluid">
                    </div>
                    <div class="col-md-8">
                        <a href="<?=base_url()?>news/<?=$value['ID_title']?>"><strong><h5><?=$value['Title']?></h5></strong></a>
                        <small><?=tgl_ina($value['CreateAT'])?></small>
                        <?php 
                            $explodetext = explode('.', $value['Images']) 
                        ?>
                        <?php if ($explodetext[1] != 'gif'): ?>
                            <p><?=text_panjang(htmlspecialchars($value['Content']))?></p>
                        <?php endif ?>
                        <br>
                        <span class="badge badge-primary"><?=$value['Name']?></span>
                    </div>
                </div>
            <?php endforeach ?>

            <nav>
              <ul class="pagination">
                <?php if (!empty($page)): ?>
                    <?php if ($page > 1): ?>
                        <li class="page-item"><a class="page-link" href="<?=base_url()?>news?page=<?=$page-1?>"><</a></li>
                    <?php endif ?>
                <?php endif ?>
                <li class="page-item"><a class="page-link" href="<?=base_url()?>news?page=<?=$page+1?>">></a></li>
              </ul>
            </nav>

        </div>
        <div class="col-md-4">
            <div class="card shadow">
                <div class="card-body">
                    <h4>Recent News</h4><hr>
                    <?php foreach ($recent_news as $key => $value): ?>
                        <div class="row mb-6">
                            <div class="col-md-4">
                                <img src="<?=blogs_url.'uploads/'.$value['Images']?>" class="img-fluid">
                            </div>
                            <div class="col-md-6">
                                <span class="badge badge-primary"><?=$value['Name']?></span>
                                <a href="<?=base_url()?>news/<?=$value['ID_title']?>"><strong><h5><?=$value['Title']?></h5></strong></a>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
            <hr>

            <div class="card shadow">
                <div class="card-body">
                    <h4>Trending Categories</h4><hr>
                    <a href="<?=base_url()?>news/category"><span class="badge badge-primary">All Categories</span></a><br>
                    <?php foreach ($trend_cat as $key => $value): ?>
                        <a href="<?=base_url()?>news?category=<?=$value['Name']?>"><span class="badge badge-primary"><?=$value['Name']?></span>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </div>
</div>