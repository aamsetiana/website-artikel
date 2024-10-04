<?= $this->extend('layout/template'); ?>
<?= $this->section('konten'); ?>

<main>
    <!-- About US Start -->
    <div class="about-area">
        <div class="container">
            <!-- Hot Aimated News Tittle-->
            <div class="row">
                <div class="col-lg-12">
                    <div class="trending-tittle">
                        <strong>Trending now</strong>
                        <!-- <p>Rem ipsum dolor sit amet, consectetur adipisicing elit.</p> -->
                        <div class="trending-animated">
                            <div id="ticker-wrapper-1717658104453" class="ticker-wrapper has-js left">
                                <div id="ticker-1717658104453" class="ticker">
                                    <div id="ticker-title-1717658104453" class="ticker-title"><span></span></div>
                                    <p id="ticker-content-1717658104453" class="ticker-content" style="display: block; opacity: 1; left: 20px;">
                                        <?= !empty($article['title']) ? $article['title'] : "Trending news title" ?>
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
                <div class="col-lg-8">
                    <!-- Trending Tittle -->
                    <div class="about-right mb-90">
                        <?php if (!empty($article)) : ?>
                            <div class="about-img">
                                <img src="<?= !empty($article['urlToImage']) ? $article['urlToImage'] : '/AznewsMaster/assets/img/trending/trending_top.jpg' ?>" alt="">
                            </div>
                            <div class="section-tittle mb-30 pt-30">
                                <h3><?= !empty($article['title']) ? $article['title'] : "News Title" ?></h3>
                            </div>
                            <div class="about-prea">
                                <p class="about-pera1 mb-25">
                                    <?= !empty($article['content']) ? $article['content'] : "Detailed content of the news article." ?>
                                </p>
                            </div>
                            <div class="social-share pt-30">
                                <div class="section-tittle">
                                    <h3 class="mr-20">Share:</h3>
                                    <ul>
                                        <li><a href="#"><img src="/AznewsMaster/assets/img/news/icon-ins.png" alt=""></a></li>
                                        <li><a href="#"><img src="/AznewsMaster/assets/img/news/icon-fb.png" alt=""></a></li>
                                        <li><a href="#"><img src="/AznewsMaster/assets/img/news/icon-tw.png" alt=""></a></li>
                                        <li><a href="#"><img src="/AznewsMaster/assets/img/news/icon-yo.png" alt=""></a></li>
                                    </ul>
                                </div>
                            </div>
                        <?php else : ?>
                            <p>No news found or an error occurred: <?= isset($error) ? $error : '' ?></p>
                        <?php endif; ?>
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
                                    <a href="#"><img src="/AznewsMaster/assets/img/news/icon-fb.png" alt=""></a>
                                </div>
                                <div class="follow-count">
                                    <span>8,045</span>
                                    <p>Fans</p>
                                </div>
                            </div>
                            <div class="follow-us d-flex align-items-center">
                                <div class="follow-social">
                                    <a href="#"><img src="/AznewsMaster/assets/img/news/icon-tw.png" alt=""></a>
                                </div>
                                <div class="follow-count">
                                    <span>8,045</span>
                                    <p>Fans</p>
                                </div>
                            </div>
                            <div class="follow-us d-flex align-items-center">
                                <div class="follow-social">
                                    <a href="#"><img src="/AznewsMaster/assets/img/news/icon-ins.png" alt=""></a>
                                </div>
                                <div class="follow-count">
                                    <span>8,045</span>
                                    <p>Fans</p>
                                </div>
                            </div>
                            <div class="follow-us d-flex align-items-center">
                                <div class="follow-social">
                                    <a href="#"><img src="/AznewsMaster/assets/img/news/icon-yo.png" alt=""></a>
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
                        <img src="/AznewsMaster/assets/img/news/news_card.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About US End -->
</main>

<?= $this->endSection(); ?>