$(document).ready(function(){
	
	// input tooltip    
    $("input").tooltip();
    
    // load rightside navbar
	$("#nav-right").load('/pingu/template/aside').hide().fadeIn('slow');

	// login
	$("#login-submit").click(function(){    
        username=$("#login-username").val();
        password=$("#login-password").val();
        $.ajax({
           type: "POST",
           url: "/pingu/account/login_process",
           data: "username="+username+"&password="+password,
           success: function(html){    
        		if(html=='true'){
             		window.location = "http://localhost/pingu";
            	}else if(html=='false'){
            		$("#login-alert").hide().html("<h4 class='alert-notif'>Ups, ada yang eror!</h4><p class=suggest>Username atau Password tidak cocok :3.</p>").fadeIn('slow');
            	}else{
            		$("#login-alert").hide().html("<h4 class='alert-notif'>Ups, ada yang eror!</h4><p class=suggest>Username dan Password harus diisi :3.</p>").fadeIn('slow');
            	}
           },
           beforeSend:function()
           {
            $("#login-alert").html("<h4 class='alert-notif'>Loading...</h4>").fadeIn('fast');
           }
          });
        return false;
    });

	// logout
	$("#logout").click(function(){
		$.ajax({
			type: "POST",
			url: "/pingu/account/logout"
		})
		$("#nav-right").load('/pingu/template/aside').hide().fadeIn('slow');
	})


});