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
	
	var addUserForm = $("#addUser");
	
	var validator = addUserForm.validate({
		
		rules:{
			fname :{ required : true },
			usuario : { required : true, remote : { url : baseURL + "checkEmailExists", type :"post"} },
                        email : { required : true, email : true },
			password : { required : true },
			cpassword : {required : true, equalTo: "#password"},
			mobile : { required : true, digits : true },
		},
		messages:{
			fname :{ required : "Este campo é obrigatório" },
			usuario : { required : "Este campo é obrigatório", remote : "Usuario já cadastrado" },
                        email : { required : "Este campo é obrigatório", email : "Por favor insira o endereço de e-mail válido" },
			password : { required : "Este campo é obrigatório" },
			cpassword : {required : "Este campo é obrigatório", equalTo: "Digite a mesma senha" },
			mobile : { required : "Este campo é obrigatório", digits : "Por favor insira apenas números" },	
		}
	});
});
