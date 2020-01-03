<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<footer id="colophon" class="container" role="contentinfo">

            <div class="site-info">
                <div class="clearfix">
                    <div class="col-md-12">
                        <div class="col-md-4">
                            <p style="margin: 0; font-size: 16px;">© 2019 Independent Project Analysis, Inc &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>
                        </div>
                        <div class="col-md-8">
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
    <script>
/*var jqxhr = $.get( "http://54.236.4.195/rest/api/user/current", function(data) {
if (data.displayName == 'Anonymous' ){
window.location.replace("http://54.236.4.195/");
}else{
$(".userName").html(data.displayName);
}
}).fail(function() {
alert( "error" );
});*/</script>

</body>
</html>