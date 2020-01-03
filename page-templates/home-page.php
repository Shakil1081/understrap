<?php
/**
 * Template Name: Home Page Template
 *
 * Template for displaying for home page.
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
                        <div class="col-md-6">
                            <h4>Hi <span class="userName"></span></h4>
                            <h2 style="margin-top:10px"><?php echo get_field( "title_home" ); ?></h2>
								<?php echo get_field( "description_home" ); ?>
                        </div>
                        <div class="col-md-6">
							<?php echo get_field( "tutorials_video" ); ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <h4>Assigned Projects</h4>
                            <table id="homepagetable"  class="table table-striped table-bordered assigned-projects" style="background: #fff;border-radius: 7px; border-collapse: collapse; overflow: hidden;">
								  <thead>
							<tr style="background: #efefef;">
                                        <th>
                                            Projects Name
                                        </th>
                                        <th>
                                            Workbooks
                                        </th>
                                        <th>
                                            Date
                                        </th>
                                    </tr>
								</thead>
                                <tbody>
                                   
                                    <tr>
							<td style="border-color: transparent;"></td>
                                        <td style="border-color: transparent;">
                                            <img src="http://54.236.4.195/dashboard/wp-content/uploads/2019/12/Double-Ring-1.5s-200px.gif" class="img-responsive" />               </td>
							<td style="border-color: transparent;"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-6">
							<h4><?php echo get_field( "list_title" ); ?></h4>

							<ul class="assigned-projects">
								<?php $posts_query = new WP_Query('posts_per_page=5');
								while ($posts_query->have_posts()) : $posts_query->the_post();
								?>
								<li><a href="<?php the_permalink(); ?>"><b><?php the_title(); ?></b>
								<?php the_excerpt(); ?></a></li>
								<?php endwhile; wp_reset_query(); ?>
							</ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #content -->
        </div>

        <!-- #primary -->
    </div>
</div>
<script>
        $.getJSON("http://54.236.4.195/api/projects.php",function(data){
		   allDataInfo = data;
			//alert(allDataInfo);
				dataInitialization();
			 
			for(var i=0;i<data.length;i++){
				
				if(typeof data[i].current_evaluation !== "undefined" ){
					var pjname = '<a href="http://54.236.4.195/dashboard/workbooks/?pageID=workbook&pID='+i+'&phaseID='+ data[i].current_evaluation+'">'+data[i].projectName+"</a> ";
				$.ajax('http://54.236.4.195/api/workbooks.php?p=6783067', {
				type: 'GET',  // http method
				success: function (responce) {		
					var homrPagetabke ='';
					for(var j=0;j<responce.length;j++){
			if(responce[j].assignedto != null ){
                  homrPagetabke +='<tr><td>'+pjname+'</td><td><a href="'+responce[j].url+'" Title= "Assigned: '+responce[j].assignedto+'" ">'+responce[j].title+'</a> <br><span class="badge badge-pill badge-primary">'+responce[j].status+'</span>'; 
				homrPagetabke +='</td><td>'+ "startdate not in api"+'</td></tr>';
				}
					}
					$("#homepagetable > tbody").html(homrPagetabke);			
					
				},
				error: function (jqXhr, textStatus, errorMessage) {
						
					}
			}
					  
					  );
					
				} 
				
			}
		});	
</script>


<?php get_footer(); ?>
