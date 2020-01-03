<?php
/**
 * Template Name: Createproject Page Template
 *
 * Template for displaying for Createproject page.
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
                    <div class="col-md-12">
                        <div class="col-md-6"><h3>Create a new Project</h3></div>
                        <div class="col-md-6" style="text-align: right"><h3><img src="<?php bloginfo("template_directory"); ?>/images/plus.png"><a  class="btn btn-success" href="http://54.236.4.195/dashboard/user-management/"> Add New User</a></h3></div>
                    </div>
                    <div class="col-md-12">
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="col-md-4" style="font-size: 15px; font-weight: bold; line-height: 30px;">Projects Name</div>
                                <div class="col-md-8">
									<input type="input" class="form-control" id="newProjectName" name="newProjectName" required maxlength="50">
								</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="col-md-4" style="font-size: 15px; font-weight: bold; line-height: 30px;">Project State</div>
                                <div class="col-md-8">
                                    <select style="padding:7px 8px;border: none;width: 203px;border: 1px solid #ddd;border-radius: 6px; background: transparent;">
                                        <option>PAC</option>
                                        <option>PRO</option>
                                        <option>CLO</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <div class="col-md-2">&nbsp;</div>
                            <div class="col-md-2">
								<!--<button type="button" class="btn btn-primary">Create</button>-->
								<button type="button" class="btn btn-primary" data-toggle="modal" data-backdrop="true" data-keyboard="true"  data-target="#createAlert" href="#createAlert">Create</button>
							</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #content -->
        </div>

        <!-- #primary -->
    </div>
  <!--  <div id="myModal" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content" style="float: left">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">
                                <a href="http://54.236.4.195/dashboard/user-management/">Request to add a new user</a>
                            </h4>
                            </div>
                            <div class="modal-body">
                                <form role="form" method="post" id="reused_form">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="col-md-4">
                                                <label for="name"> Select a Project:</label>
                                            </div>
                                            <div class="col-md-8">
                                                <select id="listopproject" class="form-control"></select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="col-md-4">
                                                <label for="email"> User Name:</label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="email" class="form-control" id="email" name="email" required maxlength="50">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="col-md-4">
                                                <label for="email"> User Email:</label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="email" class="form-control" id="email" name="email" required maxlength="50">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="col-md-4">
                                                <label for="name"> User Role:</label>
                                            </div>
                                            <div class="col-md-8">
                                                <select class="form-control">
                                                    <option>Admin</option>
                                                    <option>User</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="col-md-4">&nbsp;</div>
                                            <div class="col-md-8">
                                                <button type="submit" class="btn btn-success" id="btnContactUs">Send</button>
                                            </div>
                                        </div>
                                    </div>

                                </form>
                                <div id="success_message" style="width:100%; height:100%; display:none; ">
                                    <h3>Sent your message successfully!</h3> </div>
                                <div id="error_message" style="width:100%; height:100%; display:none; ">
                                    <h3>Error</h3> Sorry there was an error sending your form. </div>
                            </div>
                        </div>
                    </div>
                </div>-->
</div>




<!-- Nixon Add alert popup -->
            <div id="createAlert" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content"  style="background-color:#CBC0F8;">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="col-md-12" style="background-color:#ECF2FA;">
                            <p>Are you sure you want to create this project? </p>
                        </div>
                        <div class="col-md-12"  style="background-color:#ECF2FA;">
                            <div class="form-group">
                                <div class="col-md-4">&nbsp;</div>
                                <div class="col-md-8">
                                     <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="createNewProject()">Yes</button>
                                    <button type="button" class="btn btn-primary" data-dismiss="modal">No</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>





<?php get_footer(); ?>
