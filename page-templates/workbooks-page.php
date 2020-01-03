<?php
/**
 * Template Name: Workbooks Page Template
 *
 * Template for displaying for Workbooks page.
 *
 * @package understrap
 */
// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();
?>

<?php 

?>
<div class="container">
    <?php get_sidebar(); ?>
    <div id="main-content" class="main-content col-md-10">

        <!-- #secondary -->

        <div id="primary" class="content-area">
            <div id="content" class="site-content" role="main">
               



<div class="clearfix">
		<div class="row">
			<div id="projectgrid" class="clearfix">

					<div class="col-md-12">
						<h2 style="margin-bottom: 20px" id="bradCrum"></h2>
						<div id="crumbs">
						</div>
						<div class="table-responsive">
						<table  class="table" cellspacing="0" width="100%; border:0; padding:0" id="grid-workBookInfo"></table>
						</div>
					</div>
					<div class="col-md-12" id="getreport">
					<a  id="generatSnap" onclick="getreport(1)" type="button"  type="button" class="btn btn-lg btn-primary pull-right"  href="<?php echo get_site_url().'/reports/?pageID=reports&pID=0';?>" disabled> Lock Workbooks to Generate Snapshot</a>
					</div>
	  
			</div>

		</div>

</div>

<div id='nnnn'></div>
	
	
	
	
<script>

var pList= new Array();
var ppID = null;
	
function assignUser(wID){
	
	var user = document.getElementById('a'+wID).value;
	
	var settings = {
		  "async": true,
		  "crossDomain": true,
		  "url": "http://54.236.4.195/ajax/confiforms/rest/update.action?pageId="+wID+"&f=wb&q=*&fv=assignedto:"+user,
		  "method": "POST",
		  "headers": {
			"Authorization": "Bearer 6612f2d614c8628474183749e5917693e44518d3",
			"User-Agent": "PostmanRuntime/7.19.0",
			// "Accept": "*-*",
			"Cache-Control": "no-cache",
			"Postman-Token": "95bc8388-9717-4905-869b-15b82cc460e8,082b4a19-40fc-41b6-b1ea-40132b1f40b4",
			"Host": "54.236.4.195",
			"Accept-Encoding": "gzip, deflate",
			"Content-Length": "0",
			"Connection": "keep-alive",
			"cache-control": "no-cache"
			}
		};
		
		$.ajax(settings).done(function (responses) {      
			getWorkBookInfo(<?php echo $_GET['pID']?>,ppID);
		});
}

	function genarateForm(workbookID){
		var subForm =' <a style="color:red" href="javascript:void(0);" rel="popover" '; 
		subForm +=' data-content="<form id=&quot;userAssign&quot; name=&quot;mainForm&quot; method=&quot;post&quot; action=&quot;#&quot; style=&quot;margin:0&quot;>';
		subForm +=' <p style=&quot;margin-bottom:8px;&quot;>';
		subForm +=' <input type=&quot;text&quot; id=&quot;a'+workbookID+'&quot; name=&quot;text&quot; value=&quot;&quot; />';
		subForm +=' </p>';
		subForm +=' <p style=&quot;margin-bottom:8px;&quot;>';
		subForm +=' <input type=&quot;button&quot; onclick=&quot;assignUser('+workbookID+')&quot name=&quot;Submit&quot; value=&quot;Submit&quot; />';
		subForm +=' </p>';
		subForm +=' </form>" data-placement="top" data-original-title="" title=""><i class="fa fa-plus-circle" aria-hidden="true"></i> Assign Workbooks</a>';
		return subForm;
	}
	
	function loadingfunc(pid){
		$.getJSON("http://54.236.4.195/api/projects.php",function(data){
				pList = data;
				getWorkBookInfo(pid);
		});	
	}
	
	function getWorkBookInfo(projectID,projectState=null){
		
		var currentProjectState=null;
		var pIndex=null;
		if(projectState==null){
			currentProjectState = pList[projectID].current_evaluation;
			ppID = projectState;
		}else{
			currentProjectState = projectState;
			ppID = projectState;
		}
		
		if(currentProjectState=='pac'){
			pIndex = 0;
		}else if(currentProjectState=='pro'){
			pIndex = 1;
		}else if(currentProjectState=='clo'){
			pIndex = 2;
		}
		
		var phasesID = pList[projectID].phases[pIndex].url;
		phasesID = phasesID.substring(43);
		
		var workBookInfo = null;
		$('#grid-workBookInfo').html('<img src="http://54.236.4.195/dashboard/wp-content/uploads/2019/12/Double-Ring-1.5s-200px.gif" class="img-responsive" style=" margin: auto; " />');
		
		$.getJSON("http://54.236.4.195/api/workbooks.php?p="+phasesID,function(data){		
			$('#bradCrum').html('View Project List &gt; '+pList[projectID].projectName);
		
			/* Start Project state */
			// var currentProjectState = 'PRO';
			var clo = '<i class="fa fa-lock" aria-hidden="true"></i>';
			var pro = '<i class="fa fa-lock" aria-hidden="true"></i>';
			var pac = '<i class="fa fa-lock" aria-hidden="true"></i>';
		
			if(currentProjectState=='clo'){
				clo = '';
				pro = '';
				pac = '';
			}else if(currentProjectState=='pro'){
				clo = '<i class="fa fa-lock" aria-hidden="true"></i>';
				pro = '';
				pac = '';
			}else if(currentProjectState=='pac'){
				clo = '<i class="fa fa-lock" aria-hidden="true"></i>';
				pro = '<i class="fa fa-lock" aria-hidden="true"></i>';
				pac = '';
			}
		
			var stateHtml = '<ul>';
			stateHtml += '<li><a href="javascript:getWorkBookInfo('+projectID+',\'pac\')" onclick=>Pacesetter Phase'+pac+'</a></li>';
			stateHtml += '<li><a href="javascript:getWorkBookInfo('+projectID+',\'pro\')">Prospective Phasee'+pro+'</a></li>';
			stateHtml += '<li><a href="javascript:getWorkBookInfo('+projectID+',\'clo\')">Closeout Phase'+clo+'</a></li>';
			stateHtml += '<li><a href="#4"></a></li>';
			stateHtml += '</ul>';
			
			$('#crumbs').html(stateHtml);	
	        /* End Project state */    							

			var lockUnlock = new Array('<td>Unlocked <i class="fa fa-unlock" aria-hidden="true"></i></td>', '<td>Submitted <i class="fa fa-unlock" aria-hidden="false"></i></td>');
			var workBookRow ='<tbody><tr style="background: #ddd"><td><h5 style="margin:0">Workbooks</h5></td><td><h5 style="margin:0">Locked/Unlocked</h5></td><td><h5 style="margin:0">Status</h5></td><td><h5 style="margin:0">Progress</h5></td><td><h5 style="margin:0">Assigned To</h5></td></tr>';
		
		
		
			$.each(data, function(key, value){
				
				var arrayIndex = value.submitted==null ? 0:value.submitted;
				var progressStatus='';
				
				if(value.assignedto==null){
					progressStatus = 'Unassigned';
				}else if(value.status==null){
					progressStatus = 'Pending';
				}else{
					progressStatus = value.status;
				}
			
				var pBr = value.progress==null ? '':value.progress;
			
				workBookRow += '<tr>';
				//workBookRow += '<td><strong><a href="pages/viewpage.action?pageId='+value.id+'" target="_blank">'+value.title+'</a></strong></td>';
				workBookRow += '<td><strong><a href="'+value.url+'" target="_blank">'+value.title+'</a></strong></td>';
				workBookRow += lockUnlock[arrayIndex];
				workBookRow += '<td style="color:blue">'+progressStatus+'</td>';
				workBookRow += '<td><div class="progress">';

				if(value.progress == 0 || value.progress == 100){
					workBookRow += '<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="'+pBr+'" aria-valuemin="0" aria-valuemax="100" style="width:'+pBr+'%">'+pBr+'</div>';
				}else{
					workBookRow += '<div class="progress-bar progress-bar-progress" role="progressbar" aria-valuenow="'+pBr+'" aria-valuemin="0" aria-valuemax="100" style="width:'+pBr+'%">'+pBr+'</div>';
				}
				workBookRow +='</div></td>';
				var assignedPerson = value.assignedto==null ? genarateForm(value.id):value.assignedto;
				workBookRow +='<td>'+assignedPerson+'</td>';
				workBookRow +='</tr>';
			});
		
		
			$('#grid-workBookInfo').html(workBookRow); 
			$('#generatSnap').show('slow');
			$('a[rel=popover]').popover({
html: 'true',
placement: 'top'
})
			

		});
	}
		
$(document).ready(function() {
	//callfunction(<?php echo $_GET['pID']?>);
	loadingfunc(<?php echo $_GET['pID']?>);
	//getWorkBookInfo(<?php echo $_GET['pID']?>);
	//alert(<?php echo $_GET['pID']?>);
});

</script>	
	
	
	
	
		
	
	
	

            </div>
            <!-- #content -->
        </div>

        <!-- #primary -->
    </div>
</div>
<?php get_footer(); ?>