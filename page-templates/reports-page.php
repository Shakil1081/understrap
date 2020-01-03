<?php
/**
 * Template Name: Reports Page Template
 *
 * Template for displaying for Reports page.
 *
 * @package understrap
 */
// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();
?>
<div class="container">
    <?php get_sidebar(); ?>
    <div id="main-content" class="main-content col-md-10">

        <!-- #secondary -->

        <div id="primary" class="content-area">
            <div id="content" class="site-content" role="main">
                <div class="clearfix">
                    <div class="row">

                        <div class="col-md-12">
                            <div id="reportgrid" class="clearfix">
                                <div class="table-responsive">
                                    <table class="table" cellspacing="0" width="100%; border:0; padding:0">
                                        <tbody>
                                            <tr>
                                                <td rowspan="3" style="vertical-align: middle; text-align: center; width: 200px; border-bottom: none; font-size:25px" id="projname"></td>
                                                <td style="padding:5px">Asset Cost</td>
                                                <td style="padding:5px" id="esttottotal_acttottotal" colspan="3"></td>
                                                <td rowspan="3" id="verified" style="vertical-align: middle; width: 200px; border-bottom: none;"></td>
                                            </tr>
                                            <tr>
                                                <td style="padding:5px">Project Manager</td>
                                                <td style="padding:5px" id="pmname"></td>
                                                <td style="padding:5px">Last Update</td>
                                                <td style="padding:5px">:Jan 30, 2019</td>
                                            </tr>
                                            <tr>
                                                <td style="padding:5px">Location</td>
                                                <td style="padding:5px" id="ipacountry"></td>
                                                <td style="padding:5px">First Production</td>
                                                <td style="padding:5px" id="dpsfirstoil"></td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <div id="crumbs">
                                        <ul>
                                            <li><a <?php if(isset($_GET['phaseID']) && $_GET['phaseID']=="PAC") { ?> class="current" <?php } ?> href="<?php echo esc_url( home_url( '/' ) ); ?>reports/index.php?pageID=reports&pID=<?php echo $_GET['pID'] ?>&phaseID=PAC">Pacesetter Phase</a></li>
                                            <li><a <?php if(isset($_GET['phaseID']) && $_GET['phaseID']=="PRO") { ?> class="current" <?php } ?> href="<?php echo esc_url( home_url( '/' ) ); ?>reports/index.php?pageID=reports&pID=<?php echo $_GET['pID'] ?>&phaseID=PRO">Prospective Phase <i class="fa fa-lock" aria-hidden="true"></i></a></li>
                                            <li><a <?php if(isset($_GET['phaseID']) && $_GET['phaseID']=="CLO") { ?> class="current" <?php } ?> href="<?php echo esc_url( home_url( '/' ) ); ?>reports/index.php?pageID=reports&pID=<?php echo $_GET['pID'] ?>&phaseID=CLO">Closeout Phase <i class="fa fa-lock" aria-hidden="true"></i></a></li>
                                            <li><a href="#4"></a></li>
                                        </ul>
                                    </div>

                                    <div class="col-md-12" style="background:#fff; margin-bottom: 30px; padding-bottom:30px; border: 1px solid #ccc;">
                                        <div class="col-md-5">
                                            <h4><img src="<?php bloginfo("template_directory"); ?>/images/fel_icon.png"> FEL Rating</h4>
                                            <h6>IPA Insights and Analysis</h6>
                                            <h6>Subsea FEL Rating <span id="subseafel">Competitive</span></h6>
                                            <p style="font-size: 13px">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. </p>
                                            <h6>Wells FEL Rating <span id="wellsfel">Industry Average</span></h6>
                                            <p style="font-size: 13px">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. </p>

                                        </div>
                                        <div class="col-md-1">&nbsp;</div>
                                        <div class="col-md-6">
                                            <div class="chart">
                                                <div class="col-md-12">
                                                    <div class="col-md-6"><h5 style="text-align: center;">Facilities FEL</h5></div>
                                                    <div class="col-md-6"><h5 style="text-align: center;">Wells Program</h5></div>
                                                </div>
                                                <table id="data-table-chart" border="1" cellpadding="10" cellspacing="0"
                                                       summary="Percentage of knowledge acquired during my experience
                                                       for each technology or language."></table>
                                            </div>

                                        </div>
                                    </div>
                                    <br/>
                                    <br/>
                                    <div class="col-md-12"  style="background:#fff; margin-bottom: 30px;  padding-bottom:30px; border: 1px solid #ccc;">
                                        <div class="col-md-5">
                                            <h4><img src="<?php bloginfo("template_directory"); ?>/images/cost_icon.png">Cost Index</h4>
                                            <h6>IPA Insights and Analysis</h6>
                                            <h6>Subsea Cost <span id="subseafel_cost">Competitive</span></h6>
                                            <p style="font-size: 13px">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. </p>
                                            <h6>Wells Cost <span id="wellsfel_cost">Industry Average</span></h6>
                                            <p style="font-size: 13px">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. </p>

                                        </div>
                                        <div class="col-md-1">&nbsp;</div>
                                        <div class="col-md-6">
                                            <div class="chartt">
                                                <div class="col-md-12">
                                                    <div class="col-md-6"><h5 style="text-align: center;">Facilities Cost</h5></div>
                                                    <div class="col-md-6"><h5 style="text-align: center;">Wells Cost</h5></div>
                                                </div>
                                                <table id="data-table-chartt" border="1" cellpadding="10" cellspacing="0"
                                                       summary="Percentage of knowledge acquired during my experience
                                                       for each technology or language."></table>
                                            </div>

                                        </div>
                                    </div>
                                    <br/>
                                    <br/>
                                    <div class="col-md-12"  style="background:#fff; margin-bottom: 30px;  padding-bottom:30px; border: 1px solid #ccc;">
                                        <div class="col-md-5">
                                            <h4><img src="<?php bloginfo("template_directory"); ?>/images/schedule_icon.png">Duration Index</h4>
                                            <h6>IPA Insights and Analysis</h6>
                                            <h6>Subsea Execution Duration <span id="subseafel_dura">Competitive</span></h6>
                                            <p style="font-size: 13px">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. </p>
                                            <h6>Wells Program Duration <span id="wellsfel_dura">Industry Average</span></h6>
                                            <p style="font-size: 13px">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. </p>

                                        </div>
                                        <div class="col-md-1">&nbsp;</div>
                                        <div class="col-md-6">
                                            <div class="charttt">
                                                <div class="col-md-12">
                                                    <div class="col-md-6"><h5 style="text-align: center;">Facilities EFL</h5></div>
                                                    <div class="col-md-6"><h5 style="text-align: center;">Wells Program</h5></div>
                                                </div>
                                                <table id="data-table-charttt" border="1" cellpadding="10" cellspacing="0"
                                                       summary="Percentage of knowledge acquired during my experience
                                                       for each technology or language."></table>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>	
                <?php
                $curl = curl_init();
                curl_setopt_array($curl, array(
                  CURLOPT_URL => "http://54.236.4.195/api/dashboard.php",
                  CURLOPT_RETURNTRANSFER => true,
                  CURLOPT_TIMEOUT => 30,
                  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                  CURLOPT_CUSTOMREQUEST => "GET",
                  CURLOPT_HTTPHEADER => array(
                    "cache-control: no-cache"
                  ),
                ));
                
                $response = curl_exec($curl);
                $err = curl_error($curl);
                
                curl_close($curl);
                ?>

                <script>
                    function projectWiseReport(projectID) {
                        var json_string = <?php echo $response; ?>;
                        console.log(json_string);
                        //var json_string = allDataInfo;
                        // var json_string = JSON.parse(allDataInfo[0]);
                        var esttottotalacttottotal = "$" + Math.round(json_string[projectID].esttottotal) + "MM Estimated " + "/ $" + Math.round(json_string[projectID].acttottotal) + "MM Actual";
                        $("#esttottotal_acttottotal").html(esttottotalacttottotal);
                        $("#projname").html(json_string[projectID].projname);
                        $("#pmname").html(json_string[projectID].pmname);
                        $("#dpsfirstoil").html(json_string[projectID].dpsfirstoil);
                        $("#ipacountry").html(json_string[projectID].ipacountry);
                        var ipafulldef = json_string[projectID].ipafulldef;
                        var ipadrldef = json_string[projectID].ipadrldef;
                        var ave_fel_def = 0;
                        var ave_well_def = 0;
                        for (i = 0; i < json_string.length; i++) {
                            ave_fel_def += Number(json_string[i].ipafulldef);
                            ave_well_def += Number(json_string[i].ipadrldef);
                        }
                        var ave_fel_def = ave_fel_def / parseInt(json_string.length);
                        var ave_well_def = ave_well_def / parseInt(json_string.length);
                        /* Start Subsea FEL Report Calculation */
                        if (ipafulldef >= 3 && ipafulldef <= 4.75) { /* BEST (Blue) */
                            document.getElementById('subseafel').setAttribute("class", "subsea_blue");
                        } else if (ipafulldef >= 4.76 && ipafulldef <= 6.05) { /* Good (Green) */
                            document.getElementById('subseafel').setAttribute("class", "subsea_green");
                        } else if (ipafulldef >= 6.06 && ipafulldef <= 6.65) { /* Fair (Yellow) */
                            document.getElementById('subseafel').setAttribute("class", "subsea_yellow");
                        } else if (ipafulldef >= 6.66 && ipafulldef <= 7.85) { /* Scope Progress (Orange) */
                            document.getElementById('subseafel').setAttribute("class", "subsea_orange");
                        } else if (ipafulldef >= 7.86 && ipafulldef <= 9.05) { /* Scope Progress (Darkred) */
                            document.getElementById('subseafel').setAttribute("class", "subsea_darkred");
                        }
                        /* Start Wells FEL Report Calculation */
                        if (ipadrldef >= 3 && ipadrldef <= 4.75) { /*BEST (Blue) */
                            document.getElementById('wellsfel').setAttribute("class", "wellsfel_blue");
                        } else if (ipadrldef >= 4.76 && ipadrldef <= 6.05) { /* Good (Green) */
                            document.getElementById('wellsfel').setAttribute("class", "wellsfel_green");
                        } else if (ipadrldef >= 6.06 && ipadrldef <= 6.65) { /* Fair (Yellow) */
                            document.getElementById('wellsfel').setAttribute("class", "wellsfel_yellow");
                        } else if (ipadrldef >= 6.66 && ipadrldef <= 7.85) { /* Scope Progress (Orange) */
                            document.getElementById('wellsfel').setAttribute("class", "wellsfel_orange");
                        } else if (ipadrldef >= 7.86 && ipadrldef <= 9.05) { /* Scope Progress (Darkred) */
                            document.getElementById('wellsfel').setAttribute("class", "wellsfel_darkred");
                        }

                        var ipalev3subcidx = json_string[projectID].ipalev3subcidx;
                        var ipalev3subcaggr = json_string[projectID].ipalev3subcaggr;
                        var cidx_caggr = (ipalev3subcidx / ipalev3subcaggr).toFixed(2);
                        /* Start Subsea Cost Report Calculation */
                        if (cidx_caggr < 1.05) { /* Green <1.05  */
                            document.getElementById('subseafel_cost').setAttribute("class", "subseacost_green");
                        } else if (cidx_caggr >= 1.05 && cidx_caggr <= 1.25) { /* Orange 1.05-1.25  */
                            document.getElementById('subseafel_cost').setAttribute("class", "subseacost_yellow");
                        } else if (cidx_caggr > 1.25) { /* Darkred >1.25  */
                            document.getElementById('subseafel_cost').setAttribute("class", "subseacost_darkred");
                        }

                        var ipalev3drlidx = json_string[projectID].ipalev3drlidx;
                        var ipalev3drlaggr = json_string[projectID].ipalev3drlaggr;
                        var lidx_laggr = (ipalev3drlidx / ipalev3drlaggr).toFixed(2);
                        /* Start Wells Cost Report Calculation */
                        if (lidx_laggr < 1.05) { /* Green <1.05  */
                            document.getElementById('wellsfel_cost').setAttribute("class", "wellscost_green");
                        } else if (lidx_laggr >= 1.05 && lidx_laggr <= 1.25) { /* Orange 1.05-1.25  */
                            document.getElementById('wellsfel_cost').setAttribute("class", "wellscost_yellow");
                        } else if (lidx_laggr > 1.25) { /* Darkred >1.25  */
                            document.getElementById('wellsfel_cost').setAttribute("class", "wellscost_darkred");
                        }
                        var ipatecidx = json_string[projectID].ipatecidx;
                        var ipatecaggr = json_string[projectID].ipatecaggr;
                        var ecidx_ecaggr = (ipatecidx / ipatecaggr).toFixed(2);
                        /* Start Subsea Duration Report Calculation */
                        if (ecidx_ecaggr < 1.05) { /* Green <1.05  */
                            document.getElementById('subseafel_dura').setAttribute("class", "subseadura_green");
                        } else if (ecidx_ecaggr >= 1.05 && ecidx_ecaggr <= 1.25) { /* Orange 1.05-1.25  */
                            document.getElementById('subseafel_dura').setAttribute("class", "subseadura_yellow");
                        } else if (ecidx_ecaggr > 1.25) { /* Darkred >1.25  */
                            document.getElementById('subseafel_dura').setAttribute("class", "subseadura_darkred");
                        }
                        var ipadrlduridx = json_string[projectID].ipadrlduridx;
                        var ipadrlduraggr = json_string[projectID].ipadrlduraggr;
                        var duridx_duraggr = (ipadrlduridx / ipadrlduraggr).toFixed(2);
                        /* Start Wells Duration Report Calculation */
                        if (duridx_duraggr < 1.05) { /* Green <1.05  */
                            document.getElementById('wellsfel_dura').setAttribute("class", "wellsdura_green");
                        } else if (duridx_duraggr >= 1.05 && duridx_duraggr <= 1.25) { /* Orange 1.05-1.25  */
                            document.getElementById('wellsfel_dura').setAttribute("class", "wellsdura_yellow");
                        } else if (duridx_duraggr > 1.25) { /* Darkred >1.25  */
                            document.getElementById('wellsfel_dura').setAttribute("class", "wellsdura_darkred");
                        }
                        var verified = json_string[projectID].verified;
                        if (verified == 1) {
                            $("#verified").html('<img src="<?php bloginfo('template_directory'); ?>/images/verified.png">');
                        } else {
                            $("#verified").html('<img src="<?php bloginfo('template_directory'); ?>/images/not_verified.png">');
                        }
                        /* Start FEL Report */
                        var data1 = '<thead><tr><td>&nbsp;</td><th scope="col"></th></tr></thead><tbody><tr><th scope="row">Actual</th><td>' + ipafulldef + '</td></tr><tr><th scope="row">Portfolio</th><td>' + ave_fel_def + '</td></tr></tbody><tbody><tr><th scope="row">Actual</th><td>' + ipadrldef + '</td></tr><tr><th scope="row">Portfolio</th><td>' + ave_well_def + '</td></tr></tbody>';
                        document.getElementById('data-table-chart').innerHTML = data1;
                        /* Start Cost Report */
                        var data2 = '<thead><tr><td>&nbsp;</td><th scope="col"></th></tr></thead><tbody><tr><th scope="row">Actual</th><td>' + ipalev3subcidx + '</td></tr><tr><th scope="row">Estimated</th><td>' + ipalev3subcaggr + '</td></tr><tr><th scope="row">Portfolio</th><td>' + cidx_caggr + '</td></tr></tbody><tbody><tr><th scope="row">Actual</th><td>' + ipalev3drlidx + '</td></tr><tr><th scope="row">Estimated</th><td>' + ipalev3drlaggr + '</td></tr><tr><th scope="row">Portfolio</th><td>' + lidx_laggr + '</td></tr></tbody>';
                        document.getElementById('data-table-chartt').innerHTML = data2;
                        /* Start Duration Report */
                        var data3 = '<thead><tr><td>&nbsp;</td><th scope="col"></th></tr></thead><tbody><tr><th scope="row">Actual</th><td>' + ipatecidx + '</td></tr><tr><th scope="row">Estimated</th><td>' + ipatecaggr + '</td></tr><tr><th scope="row">Portfolio</th><td>' + ecidx_ecaggr + '</td></tr></tbody><tbody><tr><th scope="row">Actual</th><td>' + ipadrlduridx + '</td></tr><tr><th scope="row">Estimated</th><td>' + ipadrlduraggr + '</td></tr><tr><th scope="row">Portfolio</th><td>' + duridx_duraggr + '</td></tr></tbody>';
                        document.getElementById('data-table-charttt').innerHTML = data3;

                        createGraphChart('#data-table-chart', '.chart');
                        createGraphChartt('#data-table-chartt', '.chartt');
                        createGraphCharttt('#data-table-charttt', '.charttt');
                    }
                    
                    $(document).ready(function () {
                        projectWiseReport(<?php echo $_GET['pID'] ?>);
                    });

                </script>
            </div>
            <!-- #content -->
        </div>

        <!-- #primary -->
    </div>
</div>
<?php get_footer(); ?>
