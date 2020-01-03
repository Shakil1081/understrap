	var allDataInfo= new Array();
	
	$(document).ready(function() {
		loadAllData();
	});

	function loadAllData(){
		 $(".ajax-loader").show();
        $.getJSON("http://54.236.4.195/api/projects.php",function(data){
		   allDataInfo = data;
				dataInitialization();
			$('.ajax-loader').hide();
		});	
	}	
	
	function dataInitialization(){
	var left_menuList = '';
		var projectList = '';
		$.each(allDataInfo, function(key, value){
			left_menuList +='<li>';
			left_menuList +='<a href="'+window.location.origin+'/dashboard/workbooks/index.php?pageID=workbook&pID='+key+'&phaseID=PAC" onclick="projectlist('+key+')" >'+value.projectName+'</a>';
			left_menuList +='</li>';
			
			var v_status = '';
			if(value.verified=='1'){
				v_status = 'Verified <i class="fa fa-check-circle" aria-hidden="true"></i>';
			}else{
				v_status = 'Not Verified <i class="fa fa-times-circle" aria-hidden="true"></i>';
			}
			
			projectList +='<tr onclick="projectlist('+key+')">';
			projectList +='<td><a href="'+window.location.origin+'/dashboard/workbooks/index.php?pageID=workbook&pID='+key+'&phaseID=PAC" onclick="projectlist('+key+')" ><strong>'+value.projectName+'</strong></a></td>';
			projectList +='<td>PAC</td>';
			projectList +='<td>'+value.dpsfirstoil+'</td>';
			projectList +='<td>'+v_status+'</td>';
			projectList +='<td>'+value.location+'</td>';
			projectList +='</tr>';
		});
		
		$('#myTab').html(left_menuList);
		$('#grid-projectList').append(projectList);}
	
	
	
	function createNewProject(){
		alert('Please Enter Project Name');
		$('#success_message').show();
		setTimeout(function () {
			$('#success_message').hide();                    
		}, 1500);
	}

