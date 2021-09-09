var script = document.createElement('script');
script.src = 'jquerylib.js';
script.type = 'text/javascript';
document.getElementsByTagName('head')[0].appendChild(script);


function getbranch(val,id) {
	$.ajax({
	type: "POST",
  	//url: "get_state.php?f=dist", 
				url  : "bind.php?bankid=BindBranch",
	//url: "get_state.php?method=dist();",
	data:'bankid='+val,
	success: function(data){
		$(id).html(data);
	}
	});
}

function getlocation(val,id) {
	$.ajax({
	type: "POST",
  	//url: "get_state.php?f=dist", 
				url  : "bind.php?loc=BindLocation",
	//url: "get_state.php?method=dist();",
	data:'did='+val,
	success: function(data){
		$(id).html(data);
	}
	});
}