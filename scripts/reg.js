
$(document).ready(function(){
  	$("#username").change(function(){
  		$.ajax({
			type : "get",
			async : true,
	  		url : "register.php",
	  		data : "username=" + $("#username").val(),
	  		success:function(data){
	  		$("#yzm_01").text(data);
	  		},
	 		error: function() {
	 	    alert("失败，请稍后再试！");
	  	    }
  		});
    });
});
$(document).ready(function(){
		$("#email").change(function(){
			$.ajax({
			type : "get",
			async : true,
  			url : "register.php",
  			data : "email=" + $("#email").val(),
  			success:function(data){
  			$("#yzm_02").text(data);
  			},
  		 	error: function() {
  		    alert("失败，请稍后再试！");
  		 	}
		});
    });
});
$(document).ready(function(){
	$("#password").change(function(){
		$.ajax({
			type : "get",
			async : true,
			url : "register.php",
			data : "password=" + $("#password").val(),
			success:function(data){
			$("#yzm_03").text(data);
			},
		 	error: function() {
		    alert("失败，请稍后再试！");
		 	}
		});
	});
});
//$(document).ready(function(){
//	$("#password_02").change(function(){
//		$.ajax({
//		type : "get",
//		async : true,
//			url : "register.php",
//			data :{"password":$("#password").val()},
//			success:function(data){
//			$("#yzm_04").text(data);
//			},
//		 	error: function() {
//		    alert("失败，请稍后再试！");
//		 	}
//		});
//	});
//});
$(document).ready(function(){
	$("#password_02").change(function(){


	});
});
$(document).ready(function(){
	$(".submit").click(function(){
		$(".submit")

	});
});
