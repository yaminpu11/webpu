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

<div class="container-fluid" style="background-image: url('assets/img/side_building.jpg'); background-repeat: no-repeat; background-size: cover; background-color: rgba(255,255,255,0.7);
    background-blend-mode: lighten;">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center mt-5">
                <img src="assets/img/logo/icon_right.png" class="img-fluid">
            </div>
            <div class="col-md-5 mt-5 mb-5">
                <h3 style="color: #0525b2">Podomoro University</h3>
                <p style="text-align: justify; text-justify: inter-word;">
                Founded by Yayasan Pendidikan Agung Podomoro, and with full support from the leading holding company, Agung Podomoro Group, has made Podomoro University a perfect place to study. We develop industry-driven curriculum framework and teaching methodology through work-based learning, hence the students will be equipped with knowledge and skills that are required highly and consistent with the needs of business and industry.
                </p>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row mt-5">
        <div class="col-md-6">
            <center><h3 style="color: #0525b2" class="garisbawah">Visi & Misi</h3></center>
            <p style="text-align: justify; text-justify: inter-word;">
            <b>Visi</b>
            <br>
            Menjadi Universitas berbasis kewirausahaan yang berbudaya Indonesia dan berkualitas internasional.<br><br>

            <b>Misi</b>
            <br>
            Menyelenggarakan pendidikan tinggi berbasis kewirausahaan dengan menerapkan teori dan praktik
            Menyelenggarakan kegiatan penelitian dan pengabdian masyarakat sebagai wujud tanggung jawab sosial institusi
            Membangun kebanggaan dan keunggulan atas Universitas
            Menyelenggarakan pengendalian mutu proses pembelajaran yang mengacu pada standar internasional
            Menghasilkan lulusan berjiwa kewirausahaan yang memiliki kompetensi terhadap ilmu pengetahuan dan teknologi serta berbudaya Indonesia
            </p>
        </div>
        <div class="col-md-6">
            <center><h3 style="color: #0525b2" class="garisbawah">Nilai</h3></center>
            <p style="text-align: justify; text-justify: inter-word;">
            <b>Harmoni</b><br>
            Keberagaman dalam bekerja dengan lingkungan internal dan eksternal Universitas Agung Podomoro<br><br>
            <b>Tangguh</b><br>
            Tidak mudah menyerah, Ulet dan bekerja keras pantang mundur<br><br>
            <b>Mutu</b><br>
            Menjaga mutu dan kualitas Universitas Agung Podomoro<br><br>
            <b>Ramah Lingkungan</b><br>
            Memperhatikan aspek lingkungan hidup dalam keberlanjutan Universitas Agung Podomoro<br><br>
        </div>
    </div>
    <center>
        <a href="<?=base_url()?>assets/Annual-Report-TA-2020-2021.pdf" class="btn btn-info mb-3"><i class="fas fa-download"></i> Annual Report 2020 - 2021</a><br>
        <a href="<?=base_url()?>assets/Annual-Report-TA-2019-2020.pdf" class="btn btn-info mb-3"><i class="fas fa-download"></i> Annual Report 2019 - 2020</a><br>
        <a href="<?=base_url()?>assets/Annual-Report-TA-2018-2019.pdf" class="btn btn-info mb-3"><i class="fas fa-download"></i> Annual Report 2018 - 2019</a><br>
    </center>
    <hr>
    <center><h3 style="color: #0525b2" class="garisbawah">Undergraduated Programs</h3></center>

    <div class="row justify-content-md-center">
        <?php foreach ($prodi[0] as $key => $value): ?>
            <div class="col-md-3">
                <center>
                <a href="https://<?=$prodi[4][$key]['Host']?>" target="_blank">
                    <img src="<?=puis_url?>/images/logoprodi/<?=$prodi[4][$key]['FileLogoP']?>" class="img-fluid">
                </a>
                </center>
            </div>
        <?php endforeach ?>
    </div>

    <hr>

    <center><h3 style="color: #0525b2" class="garisbawah">Our People</h3></center>

    <div class="row mb-5 justify-content-md-center">
        <div class="col-md-12 mb-4">
            <div class="row justify-content-md-center align-items-end">
                <div class="col-md-4">
                    <center>
                    <img src="<?=base_url()?>assets/img/people/ruru.webp" class="img-fluid">
                    </center>
                </div>
                <div class="col-md-4 mt-2" style="float: bottom">
                    <h4><strong>Bacelius Ruru, S.H., LL.M.</strong></h4>
                    <h5>Rector</h5>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-3">
            <center>
                <img src="<?=base_url()?>assets/img/people/sony.webp" class="img-fluid"><br><br>
                <strong>
                    <font style="color: grey">Prof. Dr. Ir. Sony Heru Priyanto, M.M.</font><br>
                    Vice Rector I
                </strong>
            </center>
        </div>

        <div class="col-md-3 mb-3">
            <center>
                <img src="<?=base_url()?>assets/img/people/lily.webp" class="img-fluid"><br><br>
                <strong>
                    <font style="color: grey">Lily B. Putri, S.E.</font><br>
                    Vice Rector I
                </strong>
            </center>
        </div>

        <div class="col-md-3 mb-3">
            <center>
                <img src="<?=base_url()?>assets/img/people/santi.webp" class="img-fluid"><br><br>
                <strong>
                    <font style="color: grey">Dr. Dra. Santi Palupi Arianti M.M.</font><br>
                    Vice Rector III
                </strong>
            </center>
        </div>
    </div>

    <div class="row mb-5 justify-content-md-center">
        <div class="col-md-3 mb-3">
            <center>
                <img src="<?=base_url()?>assets/img/people/adli.webp" class="img-fluid"><br><br>
                <strong>
                    <font style="color: grey">Adli Nadia, S.ST., M.T.</font><br>
                    Head of Architecture Program
                </strong>
            </center>
        </div>

        <div class="col-md-3 mb-3">
            <center>
                <img src="<?=base_url()?>assets/img/people/susy.webp" class="img-fluid"><br><br>
                <strong>
                    <font style="color: grey">Dr. Susy Fatena Rostiyanti, S.T., M.Sc.</font><br>
                    Head of Product Design Program
                </strong>
            </center>
        </div>

        <div class="col-md-3 mb-3">
            <center>
                <img src="<?=base_url()?>assets/img/people/rahmatyas.webp" class="img-fluid"><br><br>
                <strong>
                    <font style="color: grey">Rahmatyas Aditantri, S.T., M.T.</font><br>
                    Head of Urban & Regional Planning Program
                </strong>
            </center>
        </div>

        <div class="col-md-3 mb-3">
            <center>
                <img src="<?=base_url()?>assets/img/people/ferdinand.webp" class="img-fluid"><br><br>
                <strong>
                    <font style="color: grey">Ferdinand Fassa, S.T., M.T.</font><br>
                    Head of Construction & Engineering Program
                </strong>
            </center>
        </div>

        <div class="col-md-3 mb-3">
            <center>
                <img src="<?=base_url()?>assets/img/people/budi.webp" class="img-fluid"><br><br>
                <strong>
                    <font style="color: grey">Budi Riyanto S.ST.Par., M.Par.</font><br>
                    Head of Hotel Business Program
                </strong>
            </center>
        </div>

        <div class="col-md-3 mb-3">
            <center>
                <img src="<?=base_url()?>assets/img/people/wisnu.webp" class="img-fluid"><br><br>
                <strong>
                    <font style="color: grey">Dr. Wisnu Sakti Dewobroto. S.T., M.Sc.</font><br>
                    Head of Entrepreneurship Program
                </strong>
            </center>
        </div>

        <div class="col-md-3 mb-3">
            <center>
                <img src="<?=base_url()?>assets/img/people/sri.webp" class="img-fluid"><br><br>
                <strong>
                    <font style="color: grey">Sri Handayani, SE, M.Ak</font><br>
                    Head of Accounting Program
                </strong>
            </center>
        </div>

        <div class="col-md-3 mb-3">
            <center>
                <img src="<?=base_url()?>assets/img/people/riyo.webp" class="img-fluid"><br><br>
                <strong>
                    <font style="color: grey">Riyo H. Prasetyo, S.H., M.Kn.</font><br>
                    Head of Business Law Program
                </strong>
            </center>
        </div>
    </div>
    
    <hr>

    <center><h3 style="color: #0525b2" class="garisbawah">Our Affiliations</h3></center>

    <div class="owl-carousel carousel-responsive1 owl-theme mb-5">
        <?php for ($i=1; $i <= 16; $i++) :?>
            <div class="item">
                <center>
                    <img src="<?=base_url()?>assets/img/brand_affiliations/ba<?=$i?>.webp" class="img-fluid">
                </center>
            </div>
        <?php endfor;?>
    </div>

</div>