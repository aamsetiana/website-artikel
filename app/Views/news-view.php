<?= $this->extend('layout/template'); ?>
<?= $this->section('konten'); ?>

<main>
    <!-- Trending Area Start -->
    <div class="trending-area fix" id="mainContent">
        <div class="container">
            <div class="trending-main">
                <!-- Trending Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="trending-tittle">
                                    <strong>latest news</strong>
                                    <!-- <p>Rem ipsum dolor sit amet, consectetur adipisicing elit.</p> -->
                                    <div class="trending-animated">
                                        <div id="ticker-wrapper-1717658104453" class="ticker-wrapper has-js left">
                                            <div id="ticker-1717658104453" class="ticker">
                                                <div id="ticker-title-1717658104453" class="ticker-title"><span></span></div>
                                                <p id="ticker-content-1717658104453" class="ticker-content" style="display: block; opacity: 1; left: 20px;">
                                                    <?= !empty($article['title']) ? $article['title'] : "the latest news this time" ?>
                                                </p>
                                                <div id="ticker-swipe-1717658104453" class="ticker-swipe" style="left: 20px; margin-left: 283.5px;">
                                                    <span style="display: block;"><!-- --></span>
                                                </div>
                                            </div>
                                            <ul id="ticker-controls-1717658104453" class="ticker-controls">
                                                <li id="play-pause-1717658104453" class="jnt-play-pause controls"><a href=""><!-- --></a></li>
                                                <li id="prev-1717658104453" class="jnt-prev controls"><a href=""><!-- --></a></li>
                                                <li id="next-1717658104453" class="jnt-next controls"><a href=""><!-- --></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="trending-top mb-30">
                                    <?php if (!empty($article1)) : ?>
                                        <div class="trend-top-img">
                                            <img src="<?= $article1['urlToImage'] ?>" alt="">
                                            <div class="trend-top-cap">
                                                <span><?= $article1['source']['name'] ?></span>
                                                <h2><a href="<?= $article1['url'] ?>" target="_blank"><?= !empty($article1['title']) ? $article1['title'] : "Request API Limit" ?></a> </a></h2>
                                            </div>
                                        </div>
                                    <?php else : ?>
                                        <p>Request API Limit: <?= isset($error) ? $error : '' ?></p>
                                    <?php endif; ?>
                                </div>
                                <!-- Trending Bottom -->
                                <div class="trending-bottom">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="single-bottom mb-35">
                                                <div class="trend-bottom-img mb-30">
                                                    <?php if (!empty($article2)) : ?>
                                                        <img src="<?= $article2['urlToImage'] ?>" alt="">
                                                    <?php else : ?>
                                                        <img src="assets/img/trending/trending_bottom1.jpg" alt="">
                                                    <?php endif; ?>
                                                </div>
                                                <div class="trend-bottom-cap">
                                                    <span class="color1"><?= !empty($article2) ? $article2['source']['name'] : 'Unknown' ?></span>
                                                    <h4><a href="<?= isset($article2['url']) ? $article2['url'] : '#' ?>" target="_blank"><?= !empty($article2['title']) ? $article2['title'] : "Request API Limit" ?></a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="single-bottom mb-35">
                                                <div class="trend-bottom-img mb-30">
                                                    <?php if (!empty($article3)) : ?>
                                                        <img src="<?= $article3['urlToImage'] ?>" alt="">
                                                    <?php else : ?>
                                                        <img src="assets/img/trending/trending_bottom2.jpg" alt="">
                                                    <?php endif; ?>
                                                </div>
                                                <div class="trend-bottom-cap">
                                                    <span class="color2"><?= !empty($article3) ? $article3['source']['name'] : 'Unknown' ?></span>
                                                    <h4><a href="<?= isset($article3['url']) ? $article3['url'] : '#' ?>" target="_blank"><?= !empty($article3['title']) ? $article3['title'] : "Request API Limit" ?></a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="single-bottom mb-35">
                                                <div class="trend-bottom-img mb-30">
                                                    <?php if (!empty($article4)) : ?>
                                                        <img src="<?= $article4['urlToImage'] ?>" alt="">
                                                    <?php else : ?>
                                                        <img src="assets/img/trending/trending_bottom2.jpg" alt="">
                                                    <?php endif; ?>
                                                </div>
                                                <div class="trend-bottom-cap">
                                                    <span class="color2"><?= !empty($article4) ? $article4['source']['name'] : 'Unknown' ?></span>
                                                    <h4><a href="<?= isset($article4['url']) ? $article4['url'] : '#' ?>" target="_blank"><?= !empty($article4['title']) ? $article4['title'] : "Request API Limit" ?></a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Right content -->
                            <!-- <div class="col-lg-4">
                                <div class="trand-right-single d-flex">
                                    <div class="trand-right-img">
                                        <img src="AznewsMaster/assets/img/trending/right1.jpg" alt="">
                                    </div>
                                    <div class="trand-right-cap">
                                        <span class="color1">Concert</span>
                                        <h4><a href="details.html">Welcome To The Best Model Winner Contest</a></h4>
                                    </div>
                                </div>
                                <div class="trand-right-single d-flex">
                                    <div class="trand-right-img">
                                        <img src="assets/img/trending/right2.jpg" alt="">
                                    </div>
                                    <div class="trand-right-cap">
                                        <span class="color3">sea beach</span>
                                        <h4><a href="details.html">Welcome To The Best Model Winner Contest</a></h4>
                                    </div>
                                </div>
                                <div class="trand-right-single d-flex">
                                    <div class="trand-right-img">
                                        <img src="assets/img/trending/right3.jpg" alt="">
                                    </div>
                                    <div class="trand-right-cap">
                                        <span class="color2">Bike Show</span>
                                        <h4><a href="details.html">Welcome To The Best Model Winner Contest</a></h4>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Trending Area End -->


            <!-- Whats New Start -->
            <section class="whats-news-area pt-50 pb-20">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="row d-flex justify-content-between">
                                <div class="col-lg-3 col-md-3">
                                    <div class="section-tittle mb-30">
                                        <h3>News Category</h3>
                                    </div>
                                </div>
                                <div class="col-lg-9 col-md-9">
                                    <div class="properties__button">
                                        <!--Nav Button  -->
                                        <nav>
                                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">All</a>
                                                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Kategori 1</a>
                                                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Kategori 2</a>
                                                <a class="nav-item nav-link" id="nav-last-tab" data-toggle="tab" href="#nav-last" role="tab" aria-controls="nav-contact" aria-selected="false">Kategori 3</a>
                                                <a class="nav-item nav-link" id="nav-Sports" data-toggle="tab" href="#nav-nav-Sport" role="tab" aria-controls="nav-contact" aria-selected="false">Kategori 4</a>
                                                <!-- <a class="nav-item nav-link" id="nav-technology" data-toggle="tab" href="#nav-techno" role="tab" aria-controls="nav-contact" aria-selected="false">Technology</a> -->
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
                                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                            <div class="whats-news-caption">
                                                <div class="row">
                                                    <!-- Artikel 1 -->
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="single-what-news mb-100">
                                                            <div class="what-img">
                                                                <img src="<?= isset($article1['urlToImage']) ? $article1['urlToImage'] : 'AznewsMaster/assets/img/news/whatNews1.jpg' ?>" alt="">
                                                            </div>
                                                            <div class="what-cap">
                                                                <span class="color1"><?= $article1['source']['name'] ?? 'Unknown' ?></span>
                                                                <h4><a href="<?= isset($article1['url']) ? $article1['url'] : '#' ?>" target="_blank"><?= !empty($article1['title']) ? $article1['title'] : "Request API Limit" ?></a></h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Artikel 2 -->
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="single-what-news mb-100">
                                                            <div class="what-img">
                                                                <img src="<?= isset($article2['urlToImage']) ? $article2['urlToImage'] : 'AznewsMaster/assets/img/news/whatNews2.jpg' ?>" alt="">
                                                            </div>
                                                            <div class="what-cap">
                                                                <span class="color1"><?= $article2['source']['name'] ?? 'Unknown' ?></span>
                                                                <h4><a href="<?= isset($article2['url']) ? $article2['url'] : '#' ?>" target="_blank"><?= !empty($article2['title']) ? $article2['title'] : "Request API Limit" ?></a></h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Artikel 3 -->
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="single-what-news mb-100">
                                                            <div class="what-img">
                                                                <img src="<?= isset($article3['urlToImage']) ? $article3['urlToImage'] : 'AznewsMaster/assets/img/news/whatNews3.jpg' ?>" alt="">
                                                            </div>
                                                            <div class="what-cap">
                                                                <span class="color1"><?= $article3['source']['name'] ?? 'Unknown' ?></span>
                                                                <h4><a href="<?= isset($article3['url']) ? $article3['url'] : '#' ?>" target="_blank"><?= !empty($article3['title']) ? $article3['title'] : "Request API Limit" ?></a></h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Artikel 4 -->
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="single-what-news mb-100">
                                                            <div class="what-img">
                                                                <img src="<?= isset($article4['urlToImage']) ? $article4['urlToImage'] : 'AznewsMaster/assets/img/news/whatNews4.jpg' ?>" alt="">
                                                            </div>
                                                            <div class="what-cap">
                                                                <span class="color1"><?= $article4['source']['name'] ?? 'Unknown' ?></span>
                                                                <h4><a href="<?= isset($article4['url']) ? $article4['url'] : '#' ?>" target="_blank"><?= !empty($article4['title']) ? $article4['title'] : "Request API Limit" ?></a></h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Card two -->
                                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                            <div class="whats-news-caption">
                                                <div class="row">
                                                    <!-- Artikel 1 -->
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="single-what-news mb-100">
                                                            <div class="what-img">
                                                                <img src="<?= isset($article1['urlToImage']) ? $article1['urlToImage'] : 'AznewsMaster/assets/img/news/whatNews1.jpg' ?>" alt="">
                                                            </div>
                                                            <div class="what-cap">
                                                                <span class="color1"><?= $article1['source']['name'] ?? 'Unknown' ?></span>
                                                                <h4><a href="<?= isset($article1['url']) ? $article1['url'] : '#' ?>" target="_blank"><?= !empty($article1['title']) ? $article1['title'] : "Request API Limit" ?></a></h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- <div class="col-lg-6 col-md-6">
                                                        <div class="single-what-news mb-100">
                                                            <div class="what-img">
                                                                <img src="assets/img/news/whatNews2.jpg" alt="">
                                                            </div>
                                                            <div class="what-cap">
                                                                <span class="color1">Night party</span>
                                                                <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
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
                                                                <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                                            </div>
                                                        </div>
                                                    </div> -->
                                                    <!-- <div class="col-lg-6 col-md-6">
                                                        <div class="single-what-news mb-100">
                                                            <div class="what-img">
                                                                <img src="assets/img/news/whatNews4.jpg" alt="">
                                                            </div>
                                                            <div class="what-cap">
                                                                <span class="color1">Night party</span>
                                                                <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                                            </div>
                                                        </div>
                                                    </div> -->
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Card three -->
                                        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                            <div class="whats-news-caption">
                                                <div class="row">
                                                    <!-- Artikel 2 -->
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="single-what-news mb-100">
                                                            <div class="what-img">
                                                                <img src="<?= isset($article2['urlToImage']) ? $article2['urlToImage'] : 'AznewsMaster/assets/img/news/whatNews2.jpg' ?>" alt="">
                                                            </div>
                                                            <div class="what-cap">
                                                                <span class="color1"><?= $article2['source']['name'] ?? 'Unknown' ?></span>
                                                                <h4><a href="<?= isset($article2['url']) ? $article2['url'] : '#' ?>" target="_blank"><?= !empty($article2['title']) ? $article2['title'] : "Request API Limit" ?></a></h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- <div class="col-lg-6 col-md-6">
                                                        <div class="single-what-news mb-100">
                                                            <div class="what-img">
                                                                <img src="assets/img/news/whatNews2.jpg" alt="">
                                                            </div>
                                                            <div class="what-cap">
                                                                <span class="color1">Night party</span>
                                                                <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
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
                                                                <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
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
                                                                <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                                            </div>
                                                        </div>
                                                    </div> -->
                                                </div>
                                            </div>
                                        </div>
                                        <!-- card fure -->
                                        <div class="tab-pane fade" id="nav-last" role="tabpanel" aria-labelledby="nav-last-tab">
                                            <div class="whats-news-caption">
                                                <div class="row">
                                                    <!-- Artikel 3 -->
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="single-what-news mb-100">
                                                            <div class="what-img">
                                                                <img src="<?= isset($article3['urlToImage']) ? $article3['urlToImage'] : 'AznewsMaster/assets/img/news/whatNews3.jpg' ?>" alt="">
                                                            </div>
                                                            <div class="what-cap">
                                                                <span class="color1"><?= $article3['source']['name'] ?? 'Unknown' ?></span>
                                                                <h4><a href="<?= isset($article3['url']) ? $article3['url'] : '#' ?>" target="_blank"><?= !empty($article3['title']) ? $article3['title'] : "Request API Limit" ?></a></h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- card Five -->
                                        <div class="tab-pane fade" id="nav-nav-Sport" role="tabpanel" aria-labelledby="nav-Sports">
                                            <div class="whats-news-caption">
                                                <div class="row">
                                                    <!-- Artikel 4 -->
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="single-what-news mb-100">
                                                            <div class="what-img">
                                                                <img src="<?= isset($article4['urlToImage']) ? $article4['urlToImage'] : 'AznewsMaster/assets/img/news/whatNews4.jpg' ?>" alt="">
                                                            </div>
                                                            <div class="what-cap">
                                                                <span class="color1"><?= $article4['source']['name'] ?? 'Unknown' ?></span>
                                                                <h4><a href="<?= isset($article4['url']) ? $article4['url'] : '#' ?>" target="_blank"><?= !empty($article4['title']) ? $article4['title'] : "Request API Limit" ?></a></h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Nav Card -->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <!-- Section Tittle -->
                            <div class="section-tittle mb-40">
                                <h3>Follow Us</h3>
                            </div>
                            <!-- Flow Socail -->
                            <div class="single-follow mb-45">
                                <div class="single-box">
                                    <div class="follow-us d-flex align-items-center">
                                        <div class="follow-social">
                                            <a href="#"><img src="AznewsMaster/assets/img/news/icon-fb.png" alt=""></a>
                                        </div>
                                        <div class="follow-count">
                                            <span>8,045</span>
                                            <p>Fans</p>
                                        </div>
                                    </div>
                                    <div class="follow-us d-flex align-items-center">
                                        <div class="follow-social">
                                            <a href="#"><img src="AznewsMaster/assets/img/news/icon-tw.png" alt=""></a>
                                        </div>
                                        <div class="follow-count">
                                            <span>8,045</span>
                                            <p>Fans</p>
                                        </div>
                                    </div>
                                    <div class="follow-us d-flex align-items-center">
                                        <div class="follow-social">
                                            <a href="#"><img src="AznewsMaster/assets/img/news/icon-ins.png" alt=""></a>
                                        </div>
                                        <div class="follow-count">
                                            <span>8,045</span>
                                            <p>Fans</p>
                                        </div>
                                    </div>
                                    <div class="follow-us d-flex align-items-center">
                                        <div class="follow-social">
                                            <a href="#"><img src="AznewsMaster/assets/img/news/icon-yo.png" alt=""></a>
                                        </div>
                                        <div class="follow-count">
                                            <span>8,045</span>
                                            <p>Fans</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- New Poster -->
                            <div class="news-poster d-none d-lg-block">
                                <img src="AznewsMaster/assets/img/news/news_card.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Whats New End -->
            <!--   Weekly2-News start -->
            <div class="weekly2-news-area weekly2-pading bg-gray">
                <style>
                    .weekly2-news-area {
                        padding: 20px;
                    }

                    .weekly2-news-area h2 {
                        font-size: 24px;
                        font-weight: 600;
                        margin-bottom: 40px;
                    }

                    .single-news-item {
                        border: none;
                    }

                    .card-img-top {
                        height: 200px;
                        object-fit: cover;
                    }

                    .card-body {
                        padding: 20px;
                    }

                    .card-title a {
                        color: #333;
                        text-decoration: none;
                        transition: color 0.3s;
                    }

                    /* .card-title a:hover {
                        color: #007bff;
                    } */

                    .badge {
                        font-size: 12px;
                        padding: 5px 10px;
                        margin-bottom: 10px;
                    }

                    .date {
                        display: block;
                        margin-bottom: 15px;
                    }
                </style>
                <div class="container">
                    <div class="weekly2-wrapper">
                        <div class="row justify-content-center">
                            <div class="col-12">
                                <h2 class="section-title mb-30 text-center">Popular News Articles</h2>
                            </div>
                        </div>
                        <div class="row gx-4 gy-4">
                            <?php foreach ([$article1, $article2, $article3, $article4] as $article) : ?>
                                <?php if ($article) : ?>
                                    <div class="col-lg-3 col-md-6 col-sm-12">
                                        <div class="single-news-item card shadow-sm">
                                            <img src="<?= $article['urlToImage'] ?? '/AznewsMaster/assets/img/news/weekly2News4.jpg' ?>" class="card-img-top" alt="<?= $article['title'] ?? 'No Title' ?>">
                                            <div class="card-body">
                                            <span class="badge bg-primary text-white"><?= substr($article['author'] ?? 'Uncategorized', 0, 20) . (strlen($article['author'] ?? '') > 20 ? '...' : '') ?></span>
                                                <span class="text-muted date"><small><?= isset($article['publishedAt']) ? date('d M Y', strtotime($article['publishedAt'])) : 'Unknown Date' ?></small></span>
                                                <h5 class="card-title">
                                                    <a href="<?= $article['url'] ?? '#' ?>" target="_blank"><?= $article['title'] ?? 'No Title' ?></a>
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>


            <!-- End Weekly-News -->
            <!-- Start Youtube -->

            <!-- End Start youtube -->
            <!--  Recent Articles start -->


            <!--Recent Articles End -->
            <!--Start pagination -->
            <!-- <div class="pagination-area pb-45 text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="single-wrap d-flex justify-content-center">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination justify-content-start">
                                        <li class="page-item"><a class="page-link" href="#"><span class="flaticon-arrow roted"></span></a></li>
                                        <li class="page-item active"><a class="page-link" href="#">01</a></li>
                                        <li class="page-item"><a class="page-link" href="#">02</a></li>
                                        <li class="page-item"><a class="page-link" href="#">03</a></li>
                                        <li class="page-item"><a class="page-link" href="#"><span class="flaticon-arrow right-arrow"></span></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- End pagination  -->
</main>


<?= $this->endSection(); ?>