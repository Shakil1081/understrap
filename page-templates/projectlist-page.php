<?php
/**
 * Template Name: Projectlist Page Template
 *
 * Template for displaying for Projectlist page.
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
                        <div id="myDIV">
                            <div class="col-md-6">
                                <h3>Opened Projects</h3></div>
                            <div class="col-md-6" style="text-align: right">
                                <h3><img src="<?php bloginfo("template_directory"); ?>/images/plus.png">
                                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>create-a-new-project"><button onclick="createanewProject()" class="btn btn-success"> Add New Projects</button></a></h3></div>
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table class="table" cellspacing="0" width="100%; border:0; padding:0" id="grid-projectList">

                                        <thead>
                                            <tr style="background: #ddd">
                                                <th scope="col">Project Name</th>
                                                <th scope="col">Evaluation Type</th>
                                                <th scope="col">Date Open</th>
                                                <th scope="col">Workbooks Status</th>
                                                <th scope="col">Project Location</th>
                                            </tr>

                                        </thead>

                                        <tbody id="projectlist">
		
											
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row">
                                    <!--<div class="col-md-12"><h5>... View More Projects</h5></div>-->
                                </div>
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
<?php get_footer(); ?>
