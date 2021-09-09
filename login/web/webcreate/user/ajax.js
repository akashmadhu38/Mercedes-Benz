var script = document.createElement('script');
script.src = 'jquerylib.js';
script.type = 'text/javascript';
document.getElementsByTagName('head')[0].appendChild(script);


function getcourse(val,id) {
	$.ajax({
	type: "POST",
  	//url: "get_state.php?f=dist", 
				url  : "bind.php?cat_s=BindCourse",
	//url: "get_state.php?method=dist();",
	data:'cat='+val,
	success: function(data){
		$(id).html(data);
	}
	});
}
function getcourse_dept(val,id) {
	$.ajax({
	type: "POST",
  	//url: "get_state.php?f=dist", 
				url  : "bind.php?dept=BindCourse",
	//url: "get_state.php?method=dist();",
	data:'deptid='+val,
	success: function(data){
		$(id).html(data);
	}
	});
}

function getstudent(batch,sem,id) {
	$.ajax({             //data: 'a='+No1 +'&b='+No2 +'&c='+No3 +'&d='+No4,
	type: "POST",        //url:"getdata.php?timestamp="+timestamp+"&uid="+id+"&uname="+name,
  	//url: "get_state.php?f=dist", ?accountCode="+stringAccountCode+"&aa="+someAccount
				url  : "bind.php?stud_sb=BindStudent",
				//url:"getdata.php?timestamp="+timestamp+"&uid="+id+"&uname="+name,
	//url: "get_state.php?method=dist();",
	//data:'sem='+val1,
	data: 'sem='+sem+'&batch='+batch,
	success: function(data){
		$(id).html(data);
	}
	});
}

function getimagedetails(color,classid,id) {
	$.ajax({             //data: 'a='+No1 +'&b='+No2 +'&c='+No3 +'&d='+No4,
	type: "POST",        //url:"getdata.php?timestamp="+timestamp+"&uid="+id+"&uname="+name,
  	//url: "get_state.php?f=dist", ?accountCode="+stringAccountCode+"&aa="+someAccount
				url  : "bind.php?clid=BindColorDetails",
				//url:"getdata.php?timestamp="+timestamp+"&uid="+id+"&uname="+name,
	//url: "get_state.php?method=dist();",
	//data:'sem='+val1,
	data: 'color='+color+'&classid='+classid,
	success: function(data){
		$(id).html(data);
	}
	});
}

function getstudent_details(batch,sem,per,vid,id) {
	$.ajax({             //data: 'a='+No1 +'&b='+No2 +'&c='+No3 +'&d='+No4,
	type: "POST",        //url:"getdata.php?timestamp="+timestamp+"&uid="+id+"&uname="+name,
  	//url: "get_state.php?f=dist", ?accountCode="+stringAccountCode+"&aa="+someAccount
				url  : "bind.php?stud_details=BindStudent_Details",
				//url:"getdata.php?timestamp="+timestamp+"&uid="+id+"&uname="+name,
	//url: "get_state.php?method=dist();",
	//data:'sem='+val1,
	data: 'sem='+sem+'&batch='+batch+'&per='+per+'&vid='+vid,
	success: function(data){
		$(id).html(data);
	}
	});
}

function getsubject_lab(sem,cid,id) {
	$.ajax({             //data: 'a='+No1 +'&b='+No2 +'&c='+No3 +'&d='+No4,
	type: "POST",        //url:"getdata.php?timestamp="+timestamp+"&uid="+id+"&uname="+name,
  	//url: "get_state.php?f=dist", ?accountCode="+stringAccountCode+"&aa="+someAccount
				url  : "bind.php?sem_ml=BindSubject_lab",
				//url:"getdata.php?timestamp="+timestamp+"&uid="+id+"&uname="+name,
	//url: "get_state.php?method=dist();",
	//data:'sem='+val1,
	data: 'sem='+sem+'&cid='+cid,
	success: function(data){
		$(id).html(data);
	}
	});
}

function getuserdetails_mob(val,id) {
	$.ajax({
	type: "POST",
  	//url: "get_state.php?f=dist", 
				url  : "bind.php?usr=GetUserDetails_mob",
	//url: "get_state.php?method=dist();",
	data:'mob='+val,
	success: function(data){
		$(id).html(data);
	}
	});
}

function getuserdetails_uid(val,id) {
	$.ajax({
	type: "POST",
  	//url: "get_state.php?f=dist", 
				url  : "bind.php?usr=GetUserDetails_uid",
	//url: "get_state.php?method=dist();",
	data:'uid='+val,
	success: function(data){
		$(id).html(data);
	}
	});
}

//function getsystemno(lab,sysno,id) {
//	$.ajax({
//	type: "POST",
//  	url: "get_state.php?f=dist", 
//				url  : "bind.php?sysno=BindSystemNo",
//	url: "get_state.php?method=dist();",
//	data: 'lab='+lab+'&sysno='+sysno,
//	success: function(data){
//		$(id).html(data);
//	}
//	});
//}


function getsystemno(val,id) {
	$.ajax({
	type: "POST",
  	//url: "get_state.php?f=dist", 
				url  : "bind.php?sys=BindGetSystemNo",
	//url: "get_state.php?method=dist();",
	data:'labid='+val,
	success: function(data){
		$(id).html(data);
	}
	});
}


function getstudent_add(dept,year,name,purpose,id) {
	$.ajax({             //data: 'a='+No1 +'&b='+No2 +'&c='+No3 +'&d='+No4,
	type: "POST",        //url:"getdata.php?timestamp="+timestamp+"&uid="+id+"&uname="+name,
  	//url: "get_state.php?f=dist", ?accountCode="+stringAccountCode+"&aa="+someAccount
				url  : "bind.php?stud_add=Get_Student_Info_Add",
				//url:"getdata.php?timestamp="+timestamp+"&uid="+id+"&uname="+name,
	//url: "get_state.php?method=dist();",
	//data:'sem='+val1,
	data: 'dept='+dept+'&year='+year+'&name='+name+'&purpose='+purpose,
	success: function(data){
		$(id).html(data);
	}
	});
}
