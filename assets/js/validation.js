/*
||====== ACCOUNT SETTING VALIDATION - STEP 1 =======
*/
$(document).ready(function(){

	$("#txt_repassword").keyup(function(){
		if($("#txt_password").val() == $("#txt_repassword").val())
		{
			$("#che_password").hide();
			$("#btn_signup").attr("type", "submit");
		}
		else
		{
			$("#che_password").show();
			$("#btn_signup").attr("type", "button");
		}
	});
});
