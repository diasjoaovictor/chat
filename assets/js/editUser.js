/**
 * File : editUser.js 
 * 
 * This file contain the validation of edit user form
 * 
 * @author Kishor Mali
 */
$(document).ready(function(){
	
	var editUserForm = $("#editUser");
	
	var validator = editUserForm.validate({
		
		rules:{
			fname :{ required : true },
			userId :{ required : true },
			usuario : { required : true  },
                        email :{ required : true, email : true }, 
			mobile : { required : true, digits : true }, 
		},
		messages:{
			fname :{ required : "Este campo é obrigatório" },
			userId :{ required : "Este campo é obrigatório" },
			usuario : { required : "Este campo é obrigatório"  },
			email :{ required : "Este campo é obrigatório", email : "Por favor insira o endereço de e-mail válido" }, 
			mobile : { required : "Este campo é obrigatório", digits : "Por favor insira apenas números" }		
		}
	});
});