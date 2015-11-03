$(function(){
	$("#login").hide();
	$("#btn_login").click(function(){
		$("#usuario")[0].value="";
		$("#pass")[0].value=""
		$("#login").slideToggle();
	})
})

function encriptarForm(){
	var pass = $().crypt({method:"md5",source:$("#pass").val()});
	$("#pass").val(pass);
	document.formularioLogin.submit();
}