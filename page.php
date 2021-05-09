<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1" />
        <link rel="shortcut icon" href="<?php echo $siteurl; ?>/wp-content/uploads/2021/05/cropped-logo-jago-keuangan-merah.png" type="image/x-icon" />
        <meta name="description" content="" />
        <title><?php echo the_title(); ?> - Akses Member Jago Keuangan</title>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/web/assets/mobirise-icons2/mobirise2.css" />
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/web/assets/mobirise-icons-bold/mobirise-icons-bold.css" />
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/tether/tether.min.css" />
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/bootstrap/css/bootstrap.min.css" />
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/bootstrap/css/bootstrap-grid.min.css" />
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/bootstrap/css/bootstrap-reboot.min.css" />
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/socicon/css/styles.css" />
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/theme/css/style.css" />
        <link rel="preload" href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'" />
        <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap" /></noscript>
        <link rel="preload" as="style" href="<?php echo get_template_directory_uri(); ?>/assets/css/app.css" />
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/app.css" type="text/css" />
    </head>
    <body>
    	<nav class="navbar navbar-expand-lg navbar-light bg-light position-relative">
			<a class="btnNav" type="button" onclick="history.back();"><button class="btn btn-warning">Back</button></a>
		    <a class="btnNav" href="<?php echo $siteurl; ?>/wp-login.php?action=logout"><button class="btn btn-warning">Logout</button></a>
		</nav>
			<div class="contaier-fluid">
				<?php if (have_posts()) :
					while (have_posts()) :
						the_post();?>
						<h1 class="text-center mt-3 mb-3"><?php echo the_title(); ?></h1>
						<div class="row">
							<div class="col-12 col-md-12 col-lg-12">
								<?php the_content();?>
							</div>
						</div>
					<?php
					endwhile;
				endif; ?>
			</div>
			<section class="footer5 cid-swrUSA2u46" once="footers" id="footer5-6">
        <div class="container">
            <div class="media-container-row">
                <div class="col-md-2 col-6">
                    <div class="media-wrap">
                        <a href="http://jagokeuangan.com"> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-jago-keuangan-merah.png" alt="jago keuangan" /> </a>
                    </div>
                </div>
                <div class="col-10 col-6">
                    <p class="mbr-text align-right links mbr-fonts-style display-7">
                        <a href="#" class="text-white">About</a> &nbsp;&nbsp;&nbsp;&nbsp; <a href="#" class="text-white">Terms</a>&nbsp; &nbsp;&nbsp;&nbsp;<a href="#" class="text-white">Contact</a>
                    </p>
                </div>
            </div>
            <div class="footer-lower">
                <div class="media-container-row">
                    <div class="col-md-12"><hr /></div>
                </div>
                <div class="media-container-row">
                    <div class="col-md-6 copyright"><p class="mbr-text mbr-fonts-style display-7">© Copyright 2021 jagokeuangan.com - All Rights Reserved</p></div>
                    <div class="col-md-6">
                        <div class="social-list align-right">
                            <div class="soc-item">
                                <a href="https://twitter.com/" target="_blank"> <span class="mbr-iconfont mbr-iconfont-social socicon-twitter socicon" style="color: rgb(255, 255, 255); fill: rgb(255, 255, 255);"></span> </a>
                            </div>
                            <div class="soc-item">
                                <a href="https://www.facebook.com/" target="_blank"> <span class="mbr-iconfont mbr-iconfont-social socicon-facebook socicon" style="color: rgb(255, 255, 255); fill: rgb(255, 255, 255);"></span> </a>
                            </div>
                            <div class="soc-item">
                                <a href="https://instagram.com" target="_blank"> <span class="mbr-iconfont mbr-iconfont-social socicon-instagram socicon" style="color: rgb(255, 255, 255); fill: rgb(255, 255, 255);"></span> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/web/assets/jquery/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/popper/popper.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/tether/tether.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/smoothscroll/smooth-scroll.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/playervimeo/vimeo_player.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/app.js"></script>
  </body>
</html>