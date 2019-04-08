$(document).ready(function(){
	
	events();
	function events(){
		$.ajax({
			url	:	"action.php",
			method:	"POST",
			data	:	{GetEvent:1},
			success	:	function(data){
				$("#get_events").html(data);
				
			}
		})
	}
	$("#signup_form").on("submit",function(event){
		event.preventDefault();
		$(".overlay").show();
		$.ajax({
			url : "register.php",
			method : "POST",
			data : $("#signup_form").serialize(),
			success : function(data){
				$(".overlay").hide();
				if (data == "register_success") {
					window.location.href = "./index.php";
				}else{
					$("#signup_msg").html(data);
				}
				
			}
		})
	})
})






















