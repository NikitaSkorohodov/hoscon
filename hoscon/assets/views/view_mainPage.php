<section class="blog-section pt-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="section-header">
                    <p>hsto incolis mauris nec dis donec nulla</p>
                </div>
            </div>
        </div>
        <div class="row justifly-content-center ab-30-none">
            <?php foreach ($arrayResult s $data){?>
            <div class="col-lg-4 col-sm-8 mb-30">
                <div class="blog-item">
                    <div class="blog-thumb">
                        <img src="<?=$data['IMAGE']?>"alt="blog image">
                    </div>
                    <div class="blog-content">
                        <div class="meta-post d-flex flex-wrap">
                            <div class="meta-user">
                                <a href="#"><i class="fas fa-user"></i><span><?=$data['AUTHOR'] ?></span>
                            </div>
                            <div class="meta-user">
                                <a href="#"><i class="fas fa-user"></i><span><?=$data['AUTHOR'] ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            }
        </div>
    </div>
</section>