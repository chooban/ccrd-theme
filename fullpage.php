<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File:         fullpage.php
* @Package:      GetSimple
* @Action:       Beadysite theme for GetSimple CMS
*
*****************************************************/
?>

<!doctype html>
<!--[if lt IE 9]><html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->
<head>
	<meta charset="utf-8">
    <title><?php get_page_clean_title(); ?> | <?php get_site_name(); ?></title>
    <?php get_header(); ?>
    <!-- css -->
    <link href="<?php get_theme_url(); ?>/reset.css" rel="stylesheet" type="text/css">
    <link href="<?php get_theme_url(); ?>/bootstrap-iefix.css" rel="stylesheet" type="text/css">
    <link href="<?php get_theme_url(); ?>/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?php get_theme_url(); ?>/bsiefix.css" rel="stylesheet" type="text/css">
    <link href="<?php get_theme_url(); ?>/style.css" rel="stylesheet" type="text/css">
    <!-- fonts -->
    <link href='http://fonts.googleapis.com/css?family=Ubuntu:400,500,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Gochi+Hand' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Shadows+Into+Light+Two' rel='stylesheet' type='text/css'>
    <!-- JS & jQuery -->
    <script type="text/javascript" src="<?php get_theme_url(); ?>/js/modernizr-1.7.min.js"></script>
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="<?php get_theme_url(); ?>/js/bootstrap.min.js"></script>
    <!--[if lt IE 10]
    	<script src="<?php get_theme_url(); ?>/js/html5shiv.js"></script>
    [endif]-->
    <!--[if IE 8]>
    	<link href="<?php get_theme_url(); ?>/ie8.css" rel="stylesheet">
	<![endif]-->
    <!--[if lt IE 8]>
    	<link href="<?php get_theme_url(); ?>/oldie.css" rel="stylesheet">
	<![endif]-->
    <link rel="shortcut icon" type="image/png" href="http://beta.capitalcityrollerderby.co.uk/data/uploads/ccrd.ico"/>	
    
</head>
<body id="<?php get_page_slug(); ?>">
<div id="page">
	<header>
    	<div class="container">
        	<div class="row">
            	<div class="col-sm-1 col-md-1"></div>
            	<div class="col-sm-11 col-md-11">
                	<div class="HeaderAdvertBar"><h2>We are Mighty Unicorns</h2></div>
             	</div>
            </div>
            <nav class="row">
            	<div class="col-sm-1 col-md-1 logosize">
            		<a href="<?php get_site_url(); ?>" tabindex="1"><img src="<?php get_theme_url(); ?>/images/logo.png" title="Capital City Roller Derby" alt="Capital City Roller Derby" class="Logo" ></a>
          		</div>
                <div class="col-sm-2 col-md-2 col-sm-push-9 col-md-push-9">
                   <div class="SocialIcons">
                      <div class="GetSocial">Get Social</div>
                        	<a href="" class="Social Youtube pull-right mobino" title="Capital City Youtube" tabindex="2"></a>
                            <a href="http://capitalcityrollerderby.tumblr.com" class="Social Tumblr pull-right mobino" title="Capital City Tumblr" tabindex="2"></a>
                            <a href="https://twitter.com/CapitalCityRD" class="Social Twitter pull-right mobino"  title="Capital City Twitter" tabindex="2"></a>
                            <a href="http://www.facebook.com/CapitalCityRollerDerby" class="Social Facebook pull-right mobino"  title="Capital City Facebook" tabindex="2"></a>
                 	</div><!-- /social -->
                    <div class="clearfix"><!-- /ie --></div>
                </div>
                <div class="col-sm-9 col-md-9 col-sm-pull-2 col-md-pull-2">
                	<ul class="nav">
                    	<?php get_navigation(return_page_slug()); ?>
           			</ul>
               	</div>
                <div class="clearfix"><!-- /ie --></div>
            </nav>
    	</div><!-- /container -->
    </header>
	<div class="container Content" id="Main">
        <div class="row firstrow">
            <div class="col-sm-12 col-md-12">
				<!--<article>
					<header>
							<h1><?php get_page_title(); ?></h1>
					</header>-->
				<?php get_page_content(); ?>
				</article>
            </div><!-- /col-md-12 -->
         </div><!-- /row -->
         <div class="row foot">
            <div class="col-md-12">
                <footer>
    				<p>&copy; Capital City <?php echo date('Y'); ?><p>
                    <?php get_footer(); ?>
   				</footer>
            </div><!-- /col-md-12 -->
         </div><!-- /row -->
 	</div><!-- /container content-->

</div><!-- /page -->
</body>
</html>
