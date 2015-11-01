$(function(){
	$("#login").hide();
	$("#btn_login").click(function(){
		$("#login").slideToggle();
	})
})

function encriptarForm(){
	var pass = $().crypt({method:"md5",source:$("#pass").val()});
	$("#pass").val(pass);
	document.formularioLogin.submit();
}