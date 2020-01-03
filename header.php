<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>
<html lang="en-US" class="gr__localhost">
<!--<![endif]-->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>Independent Project Analysis</title>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="http://localhost/ipaoct/xmlrpc.php">
    <!--[if lt IE 9]>
	<script src="js/html5.js"></script>
	<![endif]-->
    <script type="text/javascript" src="<?php bloginfo("template_directory"); ?>/js/jquery-2.0.2.js"></script>
    <script type="text/javascript" src="<?php bloginfo("template_directory"); ?>/js/regression.js"></script>
    <script type="text/javascript" src="<?php bloginfo("template_directory"); ?>/js/functions.js"></script>
    <script type="text/javascript">
        //<![CDATA[
        $(window).load(function() {
            $('a[rel=popover]').popover({
                html: 'true',
                placement: 'top'
            })
        });

        //]]>
    </script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato%3A300%2C400%2C700%2C900%2C300italic%2C400italic%2C700italic&amp;subset=latin%2Clatin-ext" type="text/css" media="all">
    <link rel="stylesheet" href="<?php bloginfo("template_directory"); ?>/genericons/genericons.css?ver=3.0.3" type="text/css" media="all">

    <link rel='stylesheet' href='<?php bloginfo("template_directory"); ?>/css/bar.css' type='text/css'>
    <link rel='stylesheet' href='<?php bloginfo("template_directory"); ?>/css/style.css' type='text/css' media='all' />
    <link rel='stylesheet' href='<?php bloginfo("template_directory"); ?>/css/blocks.css' type='text/css' media='all' />

    <!--[if lt IE 9]>
<link rel='stylesheet' id='twentyfourteen-ie-css'  href='css/ie.css?ver=20131205' type='text/css' media='all' />
<![endif]-->
    <link rel="stylesheet" id="bootstrap-css" href="<?php bloginfo("template_directory"); ?>/css/bootstrap.css?ver=4.9.12" type="text/css" media="all">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script type="text/javascript" src="<?php bloginfo("template_directory"); ?>/js/bootstrap.js?ver=4.9.12"></script>
 <!--<script type="text/javascript" src="js/app/workbook_info.js"></script>-->
	        <script type="text/javascript" src="<?php bloginfo("template_directory"); ?>/js/projectList.js"></script>
	<script type="text/javascript" src="<?php bloginfo("template_directory"); ?>/js/functionjs.js"></script>
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	
	
	<?php if(isset($_GET['pID'])){
			$id=$_GET['pID'];
		}else{
			$id=0;
		} ?>
	
	
	<script>
		// Store
		if(typeof localStorage.getItem("lastvisite") == ''){
			localStorage.setItem('lastvisite',0);
		}
		var visitedproject =<?php echo $id;?>;
		
		if(localStorage.getItem("lastvisite")<= visitedproject){	
			localStorage.setItem('lastvisite',(visitedproject+1));
		}
	</script>
	
</head>

<body class="home page-template page-template-home-page page-template-home-page-php page page-id-6 logged-in admin-bar full-width grid wpb-js-composer js-comp-ver-4.12 vc_responsive customize-support" data-gr-c-s-loaded="true" style="">
	
	<div class="ajax-loader">
		<img src="http://54.236.4.195/dashboard/wp-content/uploads/2019/12/loder.gif" class="img-responsive" />
	</div>
	

        <header id="masthead" class="container" role="banner">
            <div class="header-main">
                <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				<img src="<?php bloginfo("template_directory"); ?>/images/ipa-logo.jpg" id="csl-customsite-logo" class="csl-customsite-logo"></a></h1>
                <div class="search-toggle userName">
                    Bruce McLaren
                </div>

                <nav id="primary-navigation" class="site-navigation primary-navigation" role="navigation">
                        <button class="menu-toggle"><?php _e( 'Primary Menu', 'understrap' ); ?></button>
                        <a class="screen-reader-text skip-link" href="#content"><?php _e( 'Skip to content', 'twentyfourteen' ); ?></a>
                        <?php
                        wp_nav_menu(
                                array(
                                        'theme_location' => 'primary',
                                        'menu_class'     => 'nav-menu',
                                        'menu_id'        => 'primary-menu',
                                )
                        );
                        ?>
                </nav>
            </div>

            <div id="search-container" class="search-box-wrapper hide">
                <div class="search-box">
                    <a href="http://54.236.4.195/login.action?logout=true">Log Out</a>
                </div>
            </div>
        </header>
        <!-- #masthead -->

        