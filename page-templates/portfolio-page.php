<?php
/**
 * Template Name: Portfolio Page Template
 *
 * Template for displaying for Portfolio page.
 *
 * @package understrap
 */
// Exit if accessed directly.
?>

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
    <link rel="stylesheet" href="<?php bloginfo("template_directory"); ?>/genericons/genericons.css?ver=3.0.3" type="text/css" media="all">

    <link rel='stylesheet' href='<?php bloginfo("template_directory"); ?>/css/bar.css' type='text/css'>
    <link rel='stylesheet' href='<?php bloginfo("template_directory"); ?>/css/style.css' type='text/css' media='all' />
    <link rel='stylesheet' href='<?php bloginfo("template_directory"); ?>/css/blocks.css' type='text/css' media='all' />

    <!--[if lt IE 9]>
<link rel='stylesheet' id='twentyfourteen-ie-css'  href='css/ie.css?ver=20131205' type='text/css' media='all' />
<![endif]-->
    <link rel="stylesheet" id="bootstrap-css" href="<?php bloginfo("template_directory"); ?>/css/bootstrap.css?ver=4.9.12" type="text/css" media="all">
    <link rel="stylesheet" id="font-awesome-official-css" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" type="text/css" media="all" integrity="sha384-KA6wR/X5RY4zFAHpv/CnoG2UW1uogYfdnP67Uv7eULvTveboZJg0qUpmJZb5VqzN" crossorigin="anonymous">
    <script type="text/javascript" src="<?php bloginfo("template_directory"); ?>/js/bootstrap.js?ver=4.9.12"></script>
    <div id="anychart-embed-samples-bct-scatter-chart-01" class="anychart-embed anychart-embed-samples-bct-scatter-chart-01">
        <script src="https://cdn.anychart.com/releases/8.7.0/js/anychart-base.min.js?hcode=a0c21fc77e1449cc86299c5faa067dc4"></script>
        <script src="https://cdn.anychart.com/releases/8.7.0/js/anychart-exports.min.js?hcode=a0c21fc77e1449cc86299c5faa067dc4"></script>
        <script src="https://cdn.anychart.com/releases/8.7.0/js/anychart-ui.min.js?hcode=a0c21fc77e1449cc86299c5faa067dc4">
		</script>

        <!--<script type="text/javascript" src="js/app/workbook_info.js"></script>-->
       

          <script>
			  
			
            (function() {
                function ac_add_to_head(el) {
                    var head = document.getElementsByTagName('head')[0];
                    head.insertBefore(el, head.firstChild);
                }

                function ac_add_link(url) {
                    var el = document.createElement('link');
                    el.rel = 'stylesheet';
                    el.type = 'text/css';
                    el.media = 'all';
                    el.href = url;
                    ac_add_to_head(el);
                }

                function ac_add_style(css) {
                    var ac_style = document.createElement('style');
                    if (ac_style.styleSheet) ac_style.styleSheet.cssText = css;
                    else ac_style.appendChild(document.createTextNode(css));
                    ac_add_to_head(ac_style);
                }
                ac_add_link('https://cdn.anychart.com/releases/8.7.0/css/anychart-ui.min.css?hcode=a0c21fc77e1449cc86299c5faa067dc4');
                ac_add_style(document.getElementById("ac_style_samples-bct-scatter-chart-01").innerHTML);
                ac_add_style(".anychart-embed-samples-bct-scatter-chart-01{width:600px;height:450px;}");
            })();
        </script>

        <script>
            var g_project_id = '';
            /*===================================================================================*/

            function felIndex(a, b) {

                var ipafulldef = a || 0,
                    ipadrldef = b || 0;
                var classNam = '.porFelf',
                    texrclass = '.porFelfttl';
                /*  for a =================================================================*/
                /*BEST (Blue) */
                if (ipafulldef >= 3 && ipafulldef <= 4.75) {
                    $(classNam).css("background-color", "blue");
                    $(texrclass).text("BEST");
                }

                /*Best Practical (Blue) */
                if (ipafulldef >= 3.75 && ipafulldef <= 4.75) {
                    $(classNam).css("background-color", "blue");
                    $(texrclass).text("Best Practical");
                }

                /* Good (Green) */
                if (ipafulldef >= 4.76 && ipafulldef <= 6.05) {
                    $(classNam).css("background-color", "green");
                    $(texrclass).text("Good");
                }

                /*Fair (Yellow) */
                if (ipafulldef >= 6.06 && ipafulldef <= 7.35) {
                    $(classNam).css("background-color", "yellow");
                    $(texrclass).text("Fair");
                }

                /*Poor  (Orange) */
                if (ipafulldef >= 7.36 && ipafulldef <= 8.45) {
                    $('#porFelf').css("background-color", "orange");
                    $(texrclass).text("Poor");
                }

                /*Screening Study (Red) */
                if (ipafulldef >= 8.46 && ipafulldef <= 12) {
                    $('#porFelf').css("background-color", "red");
                    $(texrclass).text("Screening Study ");
                }

                /* for b ===============================================================*/

                /*BEST (Blue) */
                classNam = '.porFelW', texrclass = '.porFelwttl';

                if (ipadrldef >= 3 && ipadrldef <= 4.75) {
                    $(classNam).css("background-color", "blue");
                    $(texrclass).text("BEST");
                }

                /*Best Practical (Blue) */
                if (ipadrldef >= 5.0 && ipadrldef <= 6.0) {
                    $(classNam).css("background-color", "blue");
                    $(texrclass).text("Best Practical");
                }

                /* Good (Green) */
                if (ipadrldef >= 4.76 && ipadrldef <= 5.75) {
                    $(classNam).css("background-color", "green");
                    $(texrclass).text("Good");
                }

                /*Fair (Yellow) */
                if (ipadrldef >= 5.76 && ipadrldef <= 6.75) {
                    $(classNam).css("background-color", "yellow");
                    $(texrclass).text("Fair");
                }

                /*Poor  (Orange) */
                if (ipadrldef >= 6.76 && ipadrldef <= 7.75) {
                    $(classNam).css("background-color", "orange");
                    $(texrclass).text("Poor");
                }

                /*Screening Study (Red) */
                if (ipadrldef >= 7.76 && ipadrldef <= 12) {
                    $('#porFelf').css("background-color", "red");
                    $(texrclass).text("Screening Study ");
                }
            }

            function checkreportpagecostindex(a, b) {

                classNam = '.porCostf', texrclass = '.porCostfttl';
                /* Better/Competitive: <1.05 */
                if (a <= 1.4) {
                    $(classNam).css("background-color", "green");
                    $(texrclass).text("Better");
                }

                /* Average: 1.05-1.25 */
                if (a >= 1.05 && a <= 1.25) {
                    $(classNam).css("background-color", "yellow");
                    $(texrclass).text("Average");
                }

                /* Worse/Not Competitive: >1.25 */
                if (a >= 1.25) {
                    $(classNam).css("background-color", "rad");
                    $(texrclass).text("Worse");
                }

                /* for b=====================================*/
                classNam = '.porCostfw', texrclass = '.porCostfttlw';
                /* Better/Competitive: >1.05 */
                if (b <= 1.4) {
                    $(classNam).css("background-color", "green");
                    $(texrclass).text("BEST");
                }

                /* Average: 1.05-1.25 */
                if (b >= 1.05 && b <= 1.25) {
                    $(classNam).css("background-color", "blue");
                    $(texrclass).text("Best Practical");
                }

                /* Worse/Not Competitive: >1.25 */
                if (b >= 1.25) {
                    $(classNam).css("background-color", "green");
                    $(texrclass).text("Worse");
                }

            }

            // This function complear valu between 1.05 t0 >1.25 reang   

            function smallcom(a, classNam, texrclass) {
                /* Better/Competitive: <1.05 */
                if (a <= 1.4) {
                    $(classNam).css("background-color", "green");
                    $(texrclass).text("Better");
                }

                /* Average: 1.05-1.25 */
                if (a >= 1.05 && a <= 1.25) {
                    $(classNam).css("background-color", "yellow");
                    $(texrclass).text("Average");
                }

                /* Worse/Not Competitive: >1.25 */
                if (a >= 1.25) {
                    $(classNam).css("background-color", "rad");
                    $(texrclass).text("Worse");
                }
            }

            /*  all project section  will check cooe box ==========================================*/
            function coloebox(a) {
                /* Better/Competitive: <1.05 */
                if (a <= 1.5) {
                    return '<span class="cBetter" title="Better">&nbsp;</span>' + a.toFixed(2);
                }

                /* Average: 1.05-1.25 */
                if (a >= 1.05 && a <= 1.25) {
                    return '<span class="cAverage" title="Average">&nbsp;</span>' + a.toFixed(2);
                }

                /* Worse/Not Competitive: >1.25 */
                if (a >= 1.25) {
                    return '<span class="cWorse" title="Worse">&nbsp;</span>' + a;
                }
            }

            /*===================================================================================*/

            function callfunction(projectid) {
                var a = document.getElementById("createanewProject");
                var x = document.getElementById("reportgrid");
                var y = document.getElementById("projectgrid");
                var z = document.getElementById("myDIV");
                a.style.display = "none";
                x.style.display = "none";
                y.style.display = "block";
                z.style.display = "none";
                //$(classNam).append(projectid);

                var settings = {
                    "async": true,
                    "crossDomain": true,
					beforeSend: function(){
					$('.ajax-loader').show();
				},
                    "url": "	http://54.236.4.195/api/dashboard.php",
                    "method": "POST",
                    "headers": {
                        "Accept": "*/*",
                        "Cache-Control": "no-cache",
                        "Host": "54.236.4.195",
                        "Accept-Encoding": "gzip, deflate",
                        "Content-Length": "0",
                        "Connection": "keep-alive",
                        "cache-control": "no-cache"
                    }
                }

                $.ajax(settings).done(function(responses) {
					setTimeout(function(){
						$('.ajax-loader').hide();

					},1000);
                    var i, text = "",
                        rowTableData = "";
                    felIndex(report[0].ipafulldef, report[0].ipadrldef);
                    //console.log(responses);

                });

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
                    <a href="#">Log Out</a>
                </div>
            </div>
        </header>
        <!-- #masthead -->

        
<div class="container">
    <?php get_sidebar(); ?>
    <div id="main-content" class="main-content col-md-10">

        <!-- #secondary -->

        <div id="primary" class="content-area">
            <div id="content" class="site-content" role="main">
                <div class="clearfix">
                    <div class="row colorchange">
                        <div class="col-md-12">
                            <h3>My Portfolio</h3>
                            <p style="border-bottom: 1px solid #aaa; padding-bottom: 13px;"><img src="<?php bloginfo("template_directory"); ?>/images/info.png"> Since your last visit, <span id='visited'></span> projects have been added to your portfolio</p>
                        </div>
                        <div class="col-md-4">
                            <h4 style="border-bottom: 4px solid #aaa; margin-bottom: 30px; padding-bottom: 10px;"><img src="<?php bloginfo("template_directory"); ?>/images/fel_icon.png"> FEL Index</h4>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="porFelf">Facilities
                                        <br>
                                        <br>
                                        <br>
                                        <h3 class="porFelfttl">Good</h3></div>
                                    <p>Subsea FEL</p>
                                </div>
                                <div class="col-md-6">
                                    <div class="porFelW">Wells
                                        <br>
                                        <br>
                                        <br>
                                        <h3 class="porFelwttl">Average</h3></div>
                                    <p>Wells FEL</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <h4 style="border-bottom: 4px solid #aaa; margin-bottom: 30px; padding-bottom: 10px;"><img src="<?php bloginfo("template_directory"); ?>/images/cost_icon.png"> Cost Index</h4>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="porCostf">Facilities
                                        <br>
                                        <br>
                                        <br>
                                        <h3 class="porCostfttl">Poor</h3></div>
                                    <p>Subsea FEL</p>
                                </div>
                                <div class="col-md-6">
                                    <div class="porCostfw" >Wells
                                        <br>
                                        <br>
                                        <br>
                                        <h3 class="porCostfttlw">Average</h3></div>
                                    <p>Wells Cost</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <h4 style="border-bottom: 3px solid #aaa; margin-bottom: 30px; padding-bottom: 10px;"><img src="<?php bloginfo("template_directory"); ?>/images/schedule_icon.png"> Schedule Index</h4>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="porSchedulef" style="background: #0D693A; height: 150px; color: #fff; padding: 13px">Facilities
                                        <br>
                                        <br>
                                        <br>
                                        <h3 class="porSchedulefttl">Good</h3></div>
                                    <p >Subsea FEL</p>
                                </div>
                                <div class="col-md-6">
                                    <div class="porSchedulew">Wells
                                        <br>
                                        <br>
                                        <br>
                                        <h3 class="porSchedulewttl">Average</h3></div>
                                    <p>Wells FEL</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="listGdata">Select</label>
                                <select class="form-control" id="listGdata">
                                    <option value="all">Asset Cost</option>
                                    <option value="facilitiesCostindexarr1">Facilities Cost</option>
                                    <option value="wellsCostindexarr1">Wells Cost</option>
                                    <option value="subseaDurationarr1">Subsea Duration</option>
                                    <option value="wellsDurationarr1">Wells Duration</option>
                                    <option value="subseaFELarr1">Subsea FEL</option>
                                    <option value="wellsFELarr1">Wells FEL</option>
                                </select>
                            </div>

                            <div id="container"> </div>
                            <br>
                            <br>
                            <br>
                        </div>
                        <div class="col-md-6">
                            <h4 style="padding-top:10px; border-top: 1px solid #aaa"><?php echo get_field( "title_Ipa_Insight" ); ?></h4>
							<?php echo get_field( "ips_insight_details" ); ?>
							
                            
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <h4>All Projects</h4></div>
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table id="example" class="table" cellspacing="0" width="100%;">
                                    <thead>
                                        <tr>
                                            <th>Project Name</th>
                                            <th>Auth Year</th>
                                            <th>Status</th>
                                            <th>Cost Index</th>
                                            <th>Wells Cost</th>
                                            <th>Schedule Index</th>
                                            <th>FEL Rating</th>
                                            <th>Location</th>
                                            <th>IPA Varified</th>
                                        </tr>
                                    </thead>

                                    <tbody id="tablereportpage">
                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #content -->
        </div>

        <!-- #primary -->
    </div>
</div>

<footer id="colophon" class="container" role="contentinfo">

            <div class="site-info">
                <div class="clearfix">
                    <div class="col-md-12">
                        <div class="col-md-6">
                            <p style="margin: 0; font-size: 16px;">© 2019 Independent Project Analysis, Inc &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>
                        </div>
                        <div class="col-md-6">
							<?php
							wp_nav_menu( array( 
								'theme_location' => 'my-custom-menu', 
								'container_class' => 'custom-menu-class' ) ); 
							?>

                        </div>
                    </div>
                </div>
            </div>
            <!-- .site-info -->
        </footer>
        <!-- #colophon -->

    <!-- #page -->
	
    <script type="text/javascript" src="<?php bloginfo("template_directory"); ?>/js/graph.js"></script>
    <script type="text/javascript" src="<?php bloginfo("template_directory"); ?>/js/highcharts.js"></script>
    <script type="text/javascript" src="<?php bloginfo("template_directory"); ?>/js/regression.js"></script>
	<script type="text/javascript" src="<?php bloginfo("template_directory"); ?>/js/projectList.js"></script>
    <script>
        $(document).ready(function() {
			 $(".ajax-loader").show();
            var settings = {
                "async": true,
                "crossDomain": true,
                "url": "http://54.236.4.195/api/dashboard.php",
                "method": "POST",
            }

            $.ajax(settings).done(function(response) {
						 $(".ajax-loader").hide();
                /* Checking the verification if not 0 then its verified*/
                function checkverifiction(data) {
                    var check = '<i class="fa fa-times-circle" aria-hidden="true" title="Not Verified"></i>'
                    if (data != "0") {
                        check = '<i class="fa fa-check-circle" aria-hidden="true" title="Verified"></i>'
                    }
                    return check;
                }

                var i, text = "",
                    text2 = "",
                    rowTableData = "",
                    rowTableData2 = "";
                var reportipalev3assidx = 0,
                    reportipalev3assaggr = 0,
                    reportipatecidx = 0,
                    reportipatecaggr = 0;
                var reportipatecidxwell = 0,
                    reportipatecaggrwell = 0,
                    reportfoipalev3facidx = 0,
                    reportipalev3facaggr = 0;

                var graph = [],
                    facilitiesCostindexarr = [],
                    wellsCostindexarr = [],
                    subseaDurationarr = [],
                    wellsDurationarr = [];
                var subseaFELarr = [],
                    wellsFELarr = [];

                for (i = 0; i < response.length; i++) {

                    text += '<li> <a href="javascript:void(0)" onclick="projectlist(' + i + ')">' + response[i].projname + '</a></li>';

                    rowTableData += ' <tr onclick="callfunction(' + i + ')"> <td>' + response[i].projname + '</td><td>' + response[i].projname + '</td><td>' + response[i].dpseng + '</td><td>' + checkverifiction(response[i].verified) + '</td><td>' + response[i].ipacountry + '</td></tr>';
                    /* this this tr set for report page */
                    rowTableData2 += ' <tr onclick="callfunction(' + i + ')"><td>' + response[i].projname + '</td> <td>' + response[i].dpseng.substr(-4, 4) + '</td><td>' + response[i].dasfirstoil + '</td> <td>' + coloebox(response[i].ipalev3subcidx / response[i].ipalev3subcaggr) + '</td>  <td>' + coloebox(response[i].ipadrlduridx / response[i].ipadrlduraggr) + '</td> <td>' + coloebox(response[i].ipatecidx / response[i].ipatecaggr) + '</td><td>' + coloebox(response[i].ipafulldef) + '</td><td>' + response[i].ipacountry + '</td><td>' + checkverifiction(response[i].verified) + '</td></tr>';

                    /* Generating every singeal array fro dropdown */
                    graph.push({
                        x: Number(response[i].ipalev3drlidx),
                        value: Number(response[i].ipalev3drlaggr)
                    });

                    facilitiesCostindexarr.push({
                        x: Number(response[i].ipalev3drlidx),
                        value: Number(response[i].ipalev3drlaggr)
                    });
                    wellsCostindexarr.push({
                        x: Number(response[i].ipalev3drlidx),
                        value: Number(response[i].ipalev3drlaggr)
                    });
                    subseaDurationarr.push({
                        x: Number(response[i].ipatecidx),
                        value: Number(response[i].ipalev3drlaggr)
                    });

                    wellsDurationarr.push({
                        x: Number(response[i].ipadrlduridx),
                        value: Number(response[i].ipadrlduraggr)
                    });
                    subseaFELarr.push({
                        x: 0,
                        value: Number(response[i].ipafulldef)
                    });
                    wellsFELarr.push({
                        x: 0,
                        value: Number(response[i].ipadrldef)
                    });

                    //Dashboard Portfolio level Cost index for Facilities  ipatecidx/ipatecaggr  ipadrlduridx/ipadrlduraggr
                    reportfoipalev3facidx += Number(response[i].foipalev3facidx);
                    reportipalev3facaggr += Number(response[i].ipalev3facaggr); // no index at your projectList

                    //Dashboard Portfolio level Cost index for Facilities and Wells 
                    reportipalev3assidx += Number(response[i].ipalev3drlaggr);
                    reportipalev3assaggr += Number(response[i].ipalev3drlidx);

                    //Dashboard Portfolio level Schedule index for Facilities
                    reportipatecidx += Number(response[i].ipatecidx);
                    reportipatecaggr += Number(response[i].ipatecaggr);

                    //Dashboard Portfolio level Schedule index for Wells 
                    reportipatecidxwell += Number(response[i].ipadrlduridx);
                    reportipatecaggrwell += Number(response[i].ipadrlduraggr);
                }

                /* My Portfolio page  Cost Index  Schedule Index */

                var costindexFacilitiesf = (reportfoipalev3facidx / reportipalev3facaggr);
                var costindexFacilitiesw = (reportipalev3assidx / reportipalev3assaggr);

                var scheduleIndexf = (reportipatecidx / reportipatecaggr);
                var scheduleIndexw = (reportipatecidxwell / reportipatecaggrwell);

                //$('#projectlist').html(rowTableData); 
                $('#tablereportpage').html(rowTableData2);
                //$('#myTab').html(text);

                //console.log(graph);

                var allgreaph = graph.concat(facilitiesCostindexarr, wellsCostindexarr, subseaDurationarr, wellsDurationarr, subseaFELarr, wellsFELarr);

                //console.log(costindexFacilitiesf+"------11-------"+costindexFacilitiesw+'--22---'+scheduleIndexf+'---33-'+scheduleIndexw);
                checkreportpagecostindex(costindexFacilitiesf, costindexFacilitiesw);
                smallcom(scheduleIndexf, ".porSchedulef", ".porSchedulefttl");
                smallcom(scheduleIndexw, ".porSchedulew", ".porSchedulewttl");
                var allgreaph = graph.concat(facilitiesCostindexarr, wellsCostindexarr, subseaDurationarr, wellsDurationarr, subseaFELarr, wellsFELarr);

                $("#listGdata").change(function() {
                    allgreaph = subseaDurationarr;
                    //alert($("#listGdata :selected").val());
                    /*
                    facilitiesCostindexarr
                    wellsCostindexarr
                    subseaDurationarr
                    wellsDurationarr
                    subseaFELarr
                    wellsFELarr */

                    $('#container').empty();
                    anychart.onDocumentReady(

                        function() {

                            // create data for the first series
                            var data_1 = graph;

                            // create data for the second series
                                var data_2 = [{
                            x: 0,
                            value: 0.9
                        }, {
                            x: 3,
                            value: 1.5
                        }];

                            // create a chart
                            var chart = anychart.scatter();

                            // create the first series (marker) and set the data
                            var series1 = chart.marker(allgreaph);

                            // create the second series (line) and set the data
                            var series2 = chart.line(data_2);

                            chart.yScale().minimum(0.9).maximum(1.5);
                            chart.yScale().ticks().interval(0.1);

                            chart.xScale().minimum(0.0).maximum(3);
                            chart.xScale().ticks().interval(0.5);

                            // enable major grids
                            chart.xGrid(true);
                            chart.yGrid(true);

                            // enable minor grids 
                            chart.xMinorGrid(true);
                            chart.yMinorGrid(true);

                            // set the chart title
                            chart.title($("#listGdata :selected").text());

                            // set the container id
                            chart.container("container");

                            // initiate drawing the chart
                            chart.draw();
                        });

                });

                anychart.onDocumentReady(

                    function() {

                        // create data for the first series
                        var data_1 = graph;

                        // create data for the second series
                        var data_2 = [{
                            x: 0,
                            value: 0.9
                        }, {
                            x: 3,
                            value: 1.5
                        }];

                        // create a chart
                        var chart = anychart.scatter();

                        // create the first series (marker) and set the data
                        var series1 = chart.marker(allgreaph);

                        // create the second series (line) and set the data
                        var series2 = chart.line(data_2);

                        chart.yScale().minimum(0.9).maximum(1.5);
                        chart.yScale().ticks().interval(0.1);

                        chart.xScale().minimum(0.0).maximum(3);
                        chart.xScale().ticks().interval(0.5);

                        // enable major grids
                        chart.xGrid(true);
                        chart.yGrid(true);

                        // enable minor grids 
                        chart.xMinorGrid(true);
                        chart.yMinorGrid(true);

                        // set the chart title
                        chart.title("Asset Cost index");

                        // set the container id
                        chart.container("container");

                        // initiate drawing the chart
                        chart.draw();
                    });

            });

        });
		
    </script>

<script>
	$( document ).ready(function() {
    console.log( "ready!" );
});
 $(document).ready(function(){
	 $('#visited').html(localStorage.getItem("lastvisite"));
 })
var jqxhr = $.get( "http://54.236.4.195/rest/api/user/current", function(data) {
if (data.displayName == 'Anonymous' ){
window.location.replace("http://54.236.4.195/");
}else{
$(".userName").html(data.displayName);
}
}).fail(function() {
alert( "error" );
});
	</script>

</body>
</html>
