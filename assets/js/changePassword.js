/**
 * File : addUser.js
 * 
 * This file contain the validation of add user form
 * 
 * Using validation plugin : jquery.validate.js
 * 
 * @author Kishor Mali
 */

$(document).ready(function(){
	
	var changePassword = $("#changePassword");
	
	var validator = changePassword.validate({
		
		rules:{
			inputOldPassword :{ required : true }, 
			inputPassword1 : { required : true },
			inputPassword2 : {required : true, equalTo: "#inputPassword1"}, 
		},
		messages:{
			inputOldPassword :{ required : "Este campo é obrigatório" }, 
			inputPassword1 : { required : "Este campo é obrigatório" },
			inputPassword2 : {required : "Este campo é obrigatório", equalTo: "Digite a mesma senha" }, 		
		}
	});
});
